@extends('admin.layout.master')
@section('content')



    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <form method="post" action="{{ route('admin.saveEntry') }}">
        {{csrf_field()}}

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>ENTRY MASTER</h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Add Entry
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
                                    </div>
                                    <div class="row clearfix">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="load_weigth" class="form-control" placeholder="Load Weigth" required autofocus>
                                                    </div>
                                                </div>
                                            </div>


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="advance" class="form-control" placeholder="Advance" required autofocus>
                                                        </div>
                                                    </div>
                                                </div>


                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="advance_paid_by" class="form-control" placeholder="Advance Paid By" required autofocus>
                                                            </div>
                                                        </div>
                                                    </div>


                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" name="balance" class="form-control" placeholder="Balance" required autofocus>
                                                                </div>
                                                            </div>
                                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="lifted_company" class="form-control" placeholder="Lifted Company" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="suplier_name" class="form-control" placeholder="Suplier Name" required autofocus>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="submit" class="btn btn-primary col-md-12 waves-effect">Add Entry</button>
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


