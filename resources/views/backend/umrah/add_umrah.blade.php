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
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">All Umrah List</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('umrah.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Umrah Title</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title here..." name="title">
                                            @error('title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    {{-- <input type="file" name="" class="custom-file-input" id=""> --}}
                                                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="exampleInputFile" name="image">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                {{-- @error('image')
                                                        <p class="alert alert-danger">{{ $message }}</p>
                                                    @enderror --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Duration</label>
                                            <select class="form-control select2 @error('duration') is-invalid @enderror" style="width: 100%;" name="duration">
                                              <option selected="selected" disabled>Select One</option>
                                              @foreach ($durations as $duration)
                                              <option value="{{ $duration->id }}">{{ $duration->duration }}</option>
                                              @endforeach
                                            </select>
                                            @error('duration')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Beds</label>
                                            <select class="form-control select2" style="width: 100%;" name="beds">
                                                <option selected="selected" disabled>Select One</option>
                                                <option value="1">1 beds</option>
                                                <option value="2">2 beds</option>
                                                <option value="3">3 beds</option>
                                                <option value="4">4 beds</option>
                                            </select>
                                            @error('beds')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Umrah package price.." name="price">
                                            @error('price')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Package Type</label>
                                            <select class="form-control select2 @error('type') is-invalid @enderror" style="width: 100%;" name="type">
                                              <option selected="selected" disabled>Select One</option>
                                              @foreach ($types as $type)
                                              <option value="{{ $type->id }}">{{ $type->type }}</option>
                                              @endforeach
                                            </select>
                                            @error('type')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Overview</label>
                                        <textarea id="summernote" name="overview">
                                            Write <em>overview</em> <strong>here...</strong>
                                          </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Including</label>
                                        <textarea id="summernote2" name="including">
                                            <em>Including</em> <strong>here...</strong>
                                          </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Excluding</label>
                                        <textarea id="summernote3" name="excluding">
                                            <em>Excluding</em> <strong>here...</strong>
                                          </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Requirements</label>
                                        <textarea id="summernote4" name="requirements">
                                            <em>Requirements</em> <strong>here...</strong>
                                          </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Terms & Conditions</label>
                                        <textarea id="summernote5" name="condition">
                                            <em>Terms & Conditions</em> <strong>here...</strong>
                                          </textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
