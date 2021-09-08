@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Emp ID: {{ $employee->id }}</h1>
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

    {{($errors)}}

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-8">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">View employee Form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('employee.update', $employee->id) }}">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="company">First Name</label>
                          <input type="text"
                            value="{{ $employee->first_name }}"
                            class="form-control @error('first_name') is-invalid @enderror" readonly>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text"
                              value="{{ $employee->last_name }}"
                              class="form-control @error('last_name') is-invalid @enderror" readonly>
                          </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email"
                            value="{{ $employee->email }}"
                            class="form-control"
                            placeholder="Enter email" readonly>

                        </div>

                        <div class="form-group">
                            <label>Company</label>
                            <input type="text"
                                value="{{ $employee->company->name }}"
                                class="form-control"
                                placeholder="Enter Mobile" readonly>
                          </div>

                          <div class="form-group">
                            <label for="email">Phone</label>
                            <input type="tel"
                                value="{{ $employee->phone }}"
                                class="form-control"
                                placeholder="Enter Mobile" readonly>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @method('PUT')

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
