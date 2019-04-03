<?php

namespace App\Http\Controllers\LorryController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lorry;
use App\SubVendor;
use App\Vendor;


class LorryController extends Controller
{
    public function addLorry(){
    	return view('admin.lorry.add');
    }

    public function saveLorry(Request $request){

        try {

            $customer=new Lorry;
            $customer->transport_name=$request->transport_name;
            $customer->vendor_type=$request->vendor_type;
            $customer->name=$request->name;
            $customer->vendor_name=$request->vendor_name;
            $customer->vechile_number=$request->vechile_number;
            $customer->vechile_type=$request->vechile_type;
            $customer->lifted_company=$request->lifted_company;
            $customer->suplier_name=$request->suplier_name;
            $customer->save();

            return back()->with('succcess','Lorry Added Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');
        }
    }

    public function ShowAllVendor(){
        $vendors = Vendor::findorfail(request('vendor'))->get();
        $FinalDatas = '<select class="form-control show-tick" name="vendor_id" id="vendor_id"> 
        <option value="">Select Vendor Name</option>';
        if(!empty($vendors)){
            foreach($vendors as $vendor){
                $FinalDatas .= '<option value="'.$vendor->id.'">'.$vendor->name.' </option>';
            }
        }
        return $FinalDatas.'</select>';
    }
    public function ShowAllSubVendor(){
         $subVendors = SubVendor::findorfail(request('vendor'))->get();
            $FinalDatas = '<select class="form-control show-tick" name="vendor_id" id="vendor_id"> 
        <option value="">Select Vendor Name</option>';
        if(!empty($subVendors)){
            foreach($subVendors as $subVendor){
                $FinalDatas .= '<option value="'.$subVendor->id.'">'.$subVendor->name.' </option>';
            }
        }
        return $FinalDatas.'</select>';
    }


    public function ShowVendorName(){
        $subVendors = SubVendor::findorfail(request('vendor'));
        return $subVendors = Vendor::findorfail($subVendors->vendor_name);
    }


}
