<?php

namespace App\Http\Controllers\CustomerController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    public function addCustomer(){

        $customers=Customer::all();
        return view('admin.customer.add',compact('customers'));
    }

    public function saveCustomer(Request $request){
        try {
            $cust=new Customer;
            $cust->name=$request->name;
            $cust->location=$request->location;
            $cust->contact_number=$request->contact_number;
            $cust->save();

            return back()->with('success','Customer Added Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');
        }
    }
    public function editCustomer($id){
        $cust = Customer::FindorFail($id);
        return view('admin.customer.edit',compact('cust'));
    }
    public function updateCustomer($id){
        $cust = Customer::findOrfail($id);
        $cust->name = request('name');
        $cust->location = request('location');
        $cust->contact_number = request('contact_number');
        $cust->save();
        return redirect('admin/addCustomer ')->with('success','Customer Updated Successfully');
    }
    public function deleteCustomer($id){
        try {
            Customer::FindorFail($id)->delete();
            return back()->with('success','Customer Updated Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong! Delete Not Allowed!');
        }
    }

}
