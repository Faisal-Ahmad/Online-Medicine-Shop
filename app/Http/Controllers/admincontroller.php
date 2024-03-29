<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use App\medicine;

class admincontroller extends Controller
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
            return view('admin.index', ['admin'=>$user[0]]);
        }else{
            return redirect()->route('login.index');
        }
    }
    public function add(Request $req ){
        if($this->sessionCheck($req)){
            return view('admin.addmedicine');
        }else{
            return redirect()->route('login.index');
        }
    }
    public function addmedicine(Request $req){ 
        if($this->sessionCheck($req)){
        $medicine  = new medicine();
        $medicine->name = $req->name; 
        $medicine->price = $req->price;
        $medicine->vendorname = $req->vname;
        $medicine->category = $req->category;
        $medicine->scategory = $req->scategory;
        $medicine->quantity = $req->quantity;
        $medicine->available = "Available";
        $medicine->save();
		return view('admin.addmedicine');
        }else{
            return redirect()->route('login.index');
        }
    }
    public function showcustomer(Request $req){
        if($this->sessionCheck($req)){
            $customer = user::where('admin', 0)->get();;
    	    return view('admin.showcustomer', ['customerlist'=>$customer]);
        }else{
            return redirect()->route('login.index');
        }
    }
    public function delete(Request $req,$uid){
    	if($this->sessionCheck($req)){
            
           $customer = user::find($uid);
    	return view('admin.deleteproduct', ['customer'=> $customer]);
        }else{
            return redirect()->route('login.index');
        }
        
    }
    public function remove(Request $req, $uid){
    	if($this->sessionCheck($req)){
            
            user::destroy($uid);
        return redirect()->route('admin.showcustomer');
        }else{
            return redirect()->route('login.index');
        }
        
    }
    public function showmedicines(Request $req){
        if($this->sessionCheck($req)){
            $medicine = medicine::all();
    	    return view('admin.showmedicine', ['medicinelist'=>$medicine]);
        }else{
            return redirect()->route('login.index');
        }
    }
    public function edit(Request $req,$mid){
        if($this->sessionCheck($req)){
            
            $medicine = medicine::find($mid);
    	return view('admin.editmedicine', ['medicine'=> $medicine]);
        }else{
            return redirect()->route('login.index');
        }
    }
    public function update(Request $req, $mid){
        if($this->sessionCheck($req)){
            
        $medicine = medicine::find($mid);
        $medicine->name = $req->name; 
        $medicine->price = $req->price;
        $medicine->vendorname = $req->vname;
        $medicine->category = $req->category;
        $medicine->scategory = $req->scategory;
        $medicine->quantity = $req->quantity;
        $medicine->available = $req->available;
        $medicine->save();
    	return redirect()->route('admin.medicines');  
        }else{
            return redirect()->route('login.index');
        }   
    }
    public function deletemed(Request $req,$mid){
    	if($this->sessionCheck($req)){
            
           $medicine = medicine::find($mid);
    	return view('admin.deletemedicine', ['medicine'=> $medicine]);
        }else{
            return redirect()->route('login.index');
        }
        
    }
    public function removemed(Request $req, $mid){
    	if($this->sessionCheck($req)){
            
            medicine::destroy($mid);
        return redirect()->route('admin.medicines');
        }else{
            return redirect()->route('login.index');
        }
        
    }
    public function order(Request $req){
    	if($this->sessionCheck($req)){
            
           $order = DB::table('orders')->join('medicines',"medicines.id","=","orders.medicineId")->join('users','users.id','=',"orders.customerId")->select('orders.id','medicines.mediname','users.name','orders.quantity','orders.date')->where('orders.confirm',0)->get();
           
          $result = json_decode($order, true);
          return view('admin.orders', ['orderlist'=>$result]);
        }else{
            return redirect()->route('login.index');
        }
        
    }
    public function purchase(Request $req){
    	if($this->sessionCheck($req)){
            
           $purchase = DB::table('purchases')->join('medicines',"medicines.id","=","purchases.medicineId")->join('users','users.id','=',"purchases.customerId")->select('purchases.id','medicines.mediname','users.name','purchases.quantity','purchases.price','purchases.paymenttype','purchases.purchasedate')->get();
        
          $result = json_decode($purchase, true);
          return view('admin.purchase', ['purchaselist'=>$result]);
        }else{
            return redirect()->route('login.index');
        }
        
    }
    
}
