@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Embployees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Employees</li>
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
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                      <a href="{{ route('employee.create') }}" class="btn btn-primary justify-content-right">Add employee</a>
                  </p>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Company</th>
                      <th>Updated At</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($employees != null)
                    @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->company->name }}</td>
                        <td>{{$employee->updated_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-info float-right">Edit</a>

                            <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-warning float-left">View</a>

                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                                Delete
                            </button>

                        </td>
                        <div class="modal fade" id="modal-danger">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content bg-red">
                                <div class="modal-header">
                                    <h4 class="modal-title">Are you Sure?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                    <button type="submit" href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-outline-light">
                                        Yes, Delete Record
                                    </button>

                                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                                        @method('DELETE')
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                        <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </tr>
                    @endforeach
                    @endif
                    </tfoot>
                  </table>
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
