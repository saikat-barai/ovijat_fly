@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section> --}}
        <div class="mb-4">

        </div>


        <!-- Main content -->
        <section class="content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>image</th>
                                            <th>Title</th>
                                            <th>Duration</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Beds</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($umrahs as $umrah)
                                        <tr>
                                            <td>
                                                <img height="70" width="70" src="{{ asset('images/umrah/'.$umrah->image) }}" alt="">
                                            </td>
                                            <td>{{ $umrah->title }}</td>
                                            <td>{{ $umrah->rel_to_duration->duration }}</td>
                                            <td>{{ $umrah->rel_to_type->type }}</td>
                                            <td>{{ $umrah->price }}</td>
                                            <td>{{ $umrah->beds }}</td>
                                            <td class="">
                                                <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href=""><i class="fa-solid fa-trash" style="color: #ff8800;"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
