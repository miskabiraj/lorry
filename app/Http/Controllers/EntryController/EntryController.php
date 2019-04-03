<?php

namespace App\Http\Controllers\EntryController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entry;

class EntryController extends Controller
{

    public function addEntry(){
        return view('admin.entry.add');
    }

    public function saveEntry(Request $request){

        try {

            $customer=new Entry;
            $customer->name=$request->name;
            $customer->load_weigth=$request->load_weigth;
            $customer->advance=$request->advance;
            $customer->advance_paid_by=$request->advance_paid_by;
            $customer->balance=$request->balance;
            $customer->lifted_company=$request->lifted_company;
            $customer->suplier_name=$request->suplier_name;
            $customer->save();

            return back()->with('succcess','Entry Added Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');
        }
    }

    public function viewEntry(){
        $entries=Entry::all();
        return view('admin.entry.view',compact('entries'));
    }


    public function deleteEntry($id){
        try {
            Entry::FindorFail($id)->delete();
            return back()->with('success','Entry Updated Successfully');
        }catch (Exception $e){
            return back()->with('danger','Something went wrong! Delete Not Allowed!');
        }
    }
//

    public function editEntry($id){

        $customer = Entry::FindorFail($id);
        return view('admin.entry.edit',compact('customer'));
    }
    public function updateEntry($id){
        $customer = Entry::FindorFail($id);
        $customer->name=request('name');
        $customer->load_weigth=request('load_weigth');
        $customer->advance=request('advance');
        $customer->advance_paid_by=request('advance_paid_by');
        $customer->balance=request('balance');
        $customer->lifted_company=request('lifted_company');
        $customer->suplier_name=request('suplier_name');
        $customer->save();

        return redirect('admin/viewEntry')->with('success','Entry Updated Successfully');
}
}