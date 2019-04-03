<?php

namespace App\Http\Controllers\OwnerController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubVendor;
use App\Vendor;

class SubVendorController extends Controller
{
    public function add(){
        $sub_vendors=SubVendor::all();
        $vendors=Vendor::all();
        return view('admin.owner.subVendor.add',compact('sub_vendors','vendors'));
    }


    public function saveSubVendor(Request $request){

        try {

            $customer=new SubVendor;
            $customer->name=$request->name;
            $customer->address=$request->address;
            $customer->vendor_name=$request->vendor_name;
            $customer->gst_number=$request->gst_number;
            $customer->contact_person=$request->contact_person;
            $customer->contact_number=$request->contact_number;
            $customer->save();

            return back()->with('succcess','SubVendor Added Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');
        }
    }

    public function editSubVendor($id){
        $customer = SubVendor::FindorFail($id);
        $vendors = Vendor::all();
        return view('admin.owner.subVendor.edit',compact('customer','vendors'));
    }


    public function deleteSubVendor($id)
    {

        try {
            SubVendor::FindorFail($id)->delete();
            return back()->with('success','SubVendor Updated Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong! Delete Not Allowed!');
        }
    }
    public function updateSubVendor($id){
        $customer = SubVendor::findOrfail($id);
        $customer->name = request('name');
        $customer->address = request('address');
        $customer->vendor_name = request('vendor_name');
        $customer->gst_number = request('gst_number');
        $customer->contact_person = request('contact_person');
        $customer->contact_number = request('contact_number');
        $customer->save();
        return redirect('admin/addSubVendor')->with('success','SubVendor Updated Successfully');
    }

}

