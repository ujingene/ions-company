@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Companies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Company</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-8">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Edit Company Form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('company.update', $company->id) }}" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="company">Company Name</label>
                          <input type="text"
                            name="name"
                            value="{{ $company->name }}"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Enter Name" required>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Company Email</label>
                            <input type="email"
                            name="email"
                            value="{{ $company->email }}"
                            class="form-control"
                            placeholder="Enter email" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="website">Company website</label>
                            <input type="url"
                                name="website"
                                value="{{ $company->website }}"
                                class="form-control"
                                placeholder="Enter website" required>

                                @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @method('PUT')

                        <div class="form-group">
                            <label for="image" class="col-md-2 col-form-label">Logo</label>
                            <input type="file" class="form-control" name="logo">

                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->

  </div>
@endsection
