@extends('admin.layout.master')
@section('content')


    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <form method="post" action="{{ route('admin.saveLorry') }}">
        {{csrf_field()}}

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>LORRY MASTER</h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Add Lorry
                                </h2>

                                <div class="body">
                                    <div class="row clearfix">

                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="transport_name" class="form-control" placeholder="Transport Name" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control show-tick" name="vendor_type" id="selectVendor">
                                                <option value="" >-- Vendor Type --</option>
                                                <option value="1"  > Vendor </option>
                                                <option value="2" > SubVendor </option>

                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                                <div id="vendor_id"></div>
                                                <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="col-md-3 sub_vendor_id_Div">
                                            <div class="form-group">
                                                <div class="form-line ">
                                                    <input type="text" name="vendor_name"  class="form-control  sub_vendor_id" id="sub_vendor_id" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{--<div class="col-sm-3" name="p">--}}
                                            {{--<select class="form-control show-tick vendorName sub_vendor_id" name="vendor_name" id="sub_vendor_id" readonly >--}}
                                                {{--<option value=""></option>--}}

                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="vechile_number" class="form-control" placeholder="Vechile Number" required autofocus>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-sm-3">
                                            <select class="form-control show-tick" name="vechile_type">
                                                <option value="">-- Vechile Type --</option>
                                                <option value="bulker">-- BULKER --</option>
                                                <option value="material">-- MATERIAL --</option>

                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="lifted_company" class="form-control" placeholder="Lifted Company" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="suplier_name" class="form-control" placeholder="Suplier Name" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <button type="submit" class="btn btn-primary col-md-12 waves-effect">Add Lorry</button>
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

                                <th>TRANSPORT NAME</th>
                                <th>VENDOR TYPE</th>
                                <th>VENDOR NAME OR SUB VENDOR NAME</th>
                                <th>SUB VENDOR NAME</th>
                                <th>VECHILE NUMBER</th>
                                <th>VECHILE TYPE</th>
                                <th>LIFTED COMPANY</th>
                                <th>SUPLIER NAME TYPE</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>

                            {{--<tbody>--}}
                            {{--@foreach($lorries as $customer)--}}
                                {{--<tr>--}}

                                    {{--<td>{{$customer->transport_name}}</td>--}}
                                    {{--<td>{{$customer->vendor_type}}</td>--}}
                                    {{--<td>{{@$customer->Vendor->name}}</td>--}}

                                    {{--<td></td>--}}
                                    {{--<td>{{$customer->contact_person}}</td>--}}
                                    {{--<td>{{$customer->contact_number}}</td>--}}
                                    {{--<td> <a href=""><input type="button" name="edit" class="btn btn-primary" value="Edit"></a><br></td>--}}
                                    {{--<td>--}}
                                        {{--<form action="" method="POST">--}}
                                            {{--{{ csrf_field() }}--}}
                                            {{--<input type="hidden" name="_method" value="DELETE">--}}
                                            {{--<button onclick="return confirm('Are you sure?')" class="btn btn-danger">delete</button>--}}
                                        {{--</form>--}}
                                    {{--</td>--}}


                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#selectVendor").change(function(e){
                e.preventDefault();
                var selectVendor =$("#selectVendor option:selected").val();
                  if(selectVendor==1){
                      $.ajax({
                          type:"get",
                          url :'/admin/Vendor',
                          data: {vendor:selectVendor},
                          success:function(data){
                              if(data !=''){
                                  $('#vendor_id').html(data);
                                  $(".sub_vendor_id_Div").hide();
                              }else{
                                  $('#vendor_id').html('<p style="color: red">Vendor</p>');
                              }
                          }
                      });
                  }else {
                      $.ajax({
                          type:"get",
                          url :'/admin/SubVendor',
                          data: {vendor:selectVendor},
                          success:function(data){
                              if(data !=''){
                                  $('#vendor_id').html(data);
                                  $(".sub_vendor_id_Div").show();
                              }else{
                                  $('#vendor_id').html('<p style="color: red">Sub Vendor</p>');
                              }
                          }
                      });
                  }

            });

            $("#vendor_id").change(function(e){
                e.preventDefault();
                var selectVendor =$("#vendor_id option:selected").val();
                console.log(selectVendor);

                $.ajax({
                        type:"get",
                        url :'/admin/VendorName',
                        data: {vendor:selectVendor},
                        success:function(data){
                            if(data !=''){
                                $('#sub_vendor_id').val(data.name);
                                console.log(data);
                            }
                        }
                    });
            });
        });
    </script>


    {{--<script type="text/javascript">--}}

        {{--$(document).ready(function () {--}}

            {{--$("#selectVendor").click(function(){--}}
                {{--console.log('2');--}}
                {{--$(".vendorName").hide();--}}

            {{--});--}}
            {{--$("#selectVendor").click(function(){--}}

                {{--var selectVendor= $("#selectVendor").val()--}}
                {{--if(selectVendor == '2') {--}}
                    {{--$(".vendorName").show();--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}

    {{--</script>--}}


@endsection