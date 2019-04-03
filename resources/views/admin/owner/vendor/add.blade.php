@extends('admin.layout.master')
@section('content')



    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <form method="post" action="{{ route('admin.saveVendor') }}">
        {{csrf_field()}}

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>VENDOR MASTER</h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Add Vendor
                                </h2>

                                <div class="body">
                                    <div class="row clearfix">
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Name" required autofocus id="vendor" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="gst_number" class="form-control gstinnumber" placeholder="GST Number" minlength="15" maxlength="15">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="contact_person" class="form-control" placeholder="Contact Person" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="phone_no" name="contact_number" class="form-control" minlength="10" maxlength="10" placeholder="Contact Number" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="submit" class="btn btn-primary col-md-12 waves-effect">Add Vendor</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Multi Column -->
                    </div>
                </div>
            </div>
        </section>
    </form>


    <section class="content">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>VENDOR NAME</th>
                                    <th>ADDRESS</th>
                                    <th>GST-NUMBER</th>
                                    <th>CONTANCT PERSON</th>
                                    <th>CONTANCT NUMBER</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($vendors as $customer)
                                    <tr>

                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->address}}</td>
                                        <td></td>
                                        <td>{{$customer->contact_person}}</td>
                                        <td>{{$customer->contact_number}}</td>
                                        <td> <a href="{{ route('admin.editVendor',$customer->id) }}"><input type="button" name="edit" class="btn btn-primary" value="Edit"></a><br></td>
                                        <td>
                                            <form action="{{ route('admin.deleteVendor',$customer->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection


