<?php

namespace App\Http\Controllers\OwnerController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendor;

class VendorController extends Controller
{
    public function add(){
        $vendors=Vendor::all();
        return view('admin.owner.vendor.add',compact('vendors'));
    }

    public function saveVendor(Request $request){

        try {

            $customer=new Vendor;
            $customer->name=$request->name;
            $customer->address=$request->address;
            $customer->gst_number=$request->gst_number;
            $customer->contact_person=$request->contact_person;
            $customer->contact_number=$request->contact_number;
            $customer->save();

            return back()->with('success','Vendor Added Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');
        }
    }
    public function editVendor($id){
           $customer = Vendor::FindorFail($id);
           return view('admin.owner.vendor.edit',compact('customer'));
    }

    public function deleteVendor($id){
        try {
            Vendor::FindorFail($id)->delete();
            return back()->with('success','Vendor Updated Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong! Delete Not Allowed!');
        }
    }

    public function updateVendor($id){
        $customer = Vendor::findOrfail($id);
        $customer->name = request('name');
        $customer->address = request('address');
        $customer->gst_number = request('gst_number');
        $customer->contact_person = request('contact_person');
        $customer->contact_number = request('contact_number');
        $customer->save();
        return redirect('admin/addVendor')->with('success','Vendor Updated Successfully');
    }

}
