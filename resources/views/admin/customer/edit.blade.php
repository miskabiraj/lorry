@extends('admin.layout.master')
@section('content')



    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <form method="post" action="{{ route('admin.updateCustomer',$cust->id) }}">
        {{csrf_field()}}

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Customer MASTER</h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Edit Customer
                                </h2>

                                <div class="body">
                                    <div class="row clearfix">
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Name"  value="{{$cust->name}}" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="location" class="form-control" placeholder="Location"  value="{{$cust->location}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="phone_no" name="contact_number" class="form-control" minlength="10" maxlength="10" placeholder="Contact Number"  value="{{$cust->contact_number}}" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="submit" class="btn btn-primary col-md-12 waves-effect">Update Customer</button>
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
@endsection


