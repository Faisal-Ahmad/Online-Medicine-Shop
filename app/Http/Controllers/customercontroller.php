<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\medicine;
use DB;

class customercontroller extends Controller
{
   public function sessionCheck($req){
        if($req->session()->has('userid')){
            return true;
        }else{
            return false;
        }
    }

    public function index(Request $req){
        if($this->sessionCheck($req)){
            $user = user::where('id', $req->session()->get('userid'))->get();
            return view('customer.index', ['customer'=>$user[0]]);
        }else{
            return redirect()->route('login.index');
        }
    }
    public function showmedicines(Request $req){
        if($this->sessionCheck($req)){
            $medicine = medicine::all();
    	   return view('customer.showmedicine', ['medicinelist'=>$medicine]);
        }else{
            return redirect()->route('login.index');
        }
    }
    public function searchindex(Request $req){
            
            if($this->sessionCheck($req)){
                return view('customer.search');
            }else{
                return redirect()->route('login.index');
            }
        
    }
    public function search(Request $req){
        
        if($this->sessionCheck($req)){
            if($req->ajax())
            {
                $query=$req->get('query');
                $type = $req->get('type');
               $output ='';
                $data='';
                if($query!='')
                {
                    if($type=='name')
                    {
                    $data = DB::table('medicines')->where('mediname','like','%'.$query.'%')->orderBy('id','desc')->get();
                    }
                    else if($type=='category')
                    {
                        $data = DB::table('medicines')->where('category','like','%'.$query.'%')->orderBy('id','desc')->get();
                    }
                    else if($type=='vname')
                    {
                        $data = DB::table('medicines')->where('vendorname','like','%'.$query.'%')->orderBy('id','desc')->get();
                    }
                }
                else
                {
                    $data = DB::table('medicines')->orderBy('id','desc')->get();
                }
                $total = $data->count();
                if($total>0)
                {
                    foreach($data as $row)
                    {
                        $output .='
                        <tr>
                            <td>'.$row->id.'</td>
                            <td>'.$row->mediname.'</td>
                            <td>'.$row->price.'</td>
                            <td>'.$row->vendorname.'</td>
                            <td>'.$row->category.'</td>
                            <td>'.$row->scategory.'</td>
                            <td>'.$row->quantity.'</td>
                            <td>'.$row->available.'</td>
                            <td>'.$row->price.'</td>
                        </tr>';
                    }
                }
                else
                {
                    $output = '<tr>
                    <td colspan="9" align="center">No Data Found
                    </td>
                    </tr>';
                }
                $data = array('table_data' => $output);
                echo json_encode($data);
            }
        }else{
            return redirect()->route('login.index');
        }
    }
}
