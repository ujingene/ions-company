@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
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
                  <h3 class="card-title">Create employee Form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('employee.store') }}">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="company">First Name</label>
                          <input type="text"
                            name="first_name"
                            value="{{ old('first_name') }}"
                            class="form-control @error('first_name') is-invalid @enderror"
                            placeholder="Enter First Name" required>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text"
                              name="last_name"
                              value="{{ old('last_name') }}"
                              class="form-control @error('last_name') is-invalid @enderror"
                              placeholder="Enter Name" required>

                              @error('last_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control"
                            placeholder="Enter email" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Company</label>
                            @if($companies != null)
                            <select class="form-control select2" name="company_id" style="width: 100%;" required>
                                <option selected>Select Company</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                              </select>
                            @endif
                          </div>

                          <div class="form-group">
                            <label for="email">Phone</label>
                            <input type="tel"
                                name="phone"
                                value="{{ old('phone') }}"
                                class="form-control"
                                placeholder="Enter Mobile" required>

                            @error('phone')
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
