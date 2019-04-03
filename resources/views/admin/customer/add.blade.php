@extends('admin.layout.master')
@section('content')



    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <form method="post" action="{{ route('admin.saveCustomer') }}">
        {{csrf_field()}}

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>CUTOMER MASTER</h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Add Customer
                                </h2>

                                <div class="body">
                                    <div class="row clearfix">
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            {{--<select class="form-control show-tick" name="vendor_name">--}}
                                                {{--<option value="">-- Select Vendor Name --</option>--}}
                                                {{--@foreach($vendors as $vendor)--}}
                                                    {{--<option value="{{$vendor->id}}" >{{$vendor->name}}</option>--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="location" class="form-control" placeholder="Location" required>
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
                                                <button type="submit" class="btn btn-primary col-md-12 waves-effect">Add Customer</button>
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

                                <th>NAME</th>
                                {{--<th>VENDOR NAME</th>--}}
                                <th>LOCATION</th>
                                <th>CONTANCT NUMBER</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($customers as $cust)
                                <tr>

                                    <td>{{$cust->name}}</td>
                                    <td>{{$cust->location}}</td>


                                    <td>{{$cust->contact_number}}</td>
                                    <td> <a href="{{ route('admin.editCustomer',$cust->id) }}"><input type="button" name="edit" class="btn btn-primary" value="Edit"></a><br></td>
                                    <td>
                                        <form action="{{ route('admin.deleteCustomer',$cust->id) }}" method="POST">
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


