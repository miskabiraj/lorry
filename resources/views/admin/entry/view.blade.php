@extends('admin.layout.master')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ENTRY MASTER</h2>
            </div>
            <!-- Basic Table -->

            <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>NAME</th>
                                    <th>Load Weigth</th>
                                    <th>Advance</th>
                                    <th>Advance Paid By</th>
                                    <th>Balance</th>
                                    <th>Lifted Company</th>
                                    <th>Suplier Name</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($entries as $customer)
                                    <tr>

                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->load_weigth}}</td>
                                        <td>{{$customer->advance}}</td>
                                        <td>{{$customer->advance_paid_by}}</td>
                                        <td>{{$customer->lifted_company}}</td>
                                        <td>{{$customer->suplier_name}}</td>
                                        <td> <a href="{{ route('admin.editEntry',$customer->id) }}"><input type="button" name="edit" class="btn btn-primary" value="Edit"></a><br></td>
                                        <td>
                                            <form action="{{ route('admin.deleteEntry', $customer->id) }}" method="POST">
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
            <!-- #END# Striped Rows -->
            <!-- Bordered Table -->

@endsection