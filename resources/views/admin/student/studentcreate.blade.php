@extends('layouts.admin_master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Starter Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="card  card-outline m-0 border-0">
                            <div class="card-body bg-white border-0">
                                <h2 class="text-center">User Profil Information</h2>

                                {{-- @error('status')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror --}}

                                <form action="{{ url('admin/student/insert') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <ul class="list-group list-group-unbordered  bg-danger mb-3 w-50 mx-auto">
                                        <li class="list-group-item bg-white">
                                            <b>Student Name</b><input type="text"
                                                class="bg-white form-control col-sm-12 mt-2" id="usr" name="student_name"
                                                placeholder="Enter Student Name...!!">
                                            @error('student_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </li>
                                        <li class="list-group-item bg-white">
                                            <b>Email Address </b><input type="text"
                                                class="bg-white form-control col-sm- mt-2" id="usr" name="student_email"
                                                placeholder="Enter email...!!" value="">
                                            @error('student_email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </li>
                                        <li class="list-group-item bg-white">
                                            <b>Password</b><input type="password"
                                                class="bg-white form-control col-sm-12 mt-2" id="usr"
                                                name="student_password" placeholder="Password...!!">
                                            @error('student_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </li>

                                        <li class="list-group-item bg-white">
                                            <b>Student Picture</b>
                                            <div class="custom-file mt-1">
                                                <input type="file" class="custom-file-input mt-2" id="customFile"
                                                    name="student_picture">

                                                @error('student_picture')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </li>


                                        <li class="list-group-item bg-white">
                                            <b>Student Phone No :</b>
                                            <div class="mt-1">
                                                <input type="number" class="form-control mt-2" name="student_phone">

                                                @error('student_phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </li>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="switch1">
                                            <label class="custom-control-label" for="switch1">Toggle me</label>
                                        </div>



                                        <li class="list-group-item bg-white">
                                            <b>Gender :</b>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customRadio" name="sex"
                                                    value="male">
                                                <label class="custom-control-label" for="customRadio">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customRadio2"
                                                    name="sex" value="female">
                                                <label class="custom-control-label" for="customRadio2">Female</label>
                                            </div>
                                            @error('sex')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </li>

                                    </ul>
                                    <button type="submit" class="btn btn-outline-success btn-block mb-3 w-25 mx-auto">Add
                                        Student</button>
                                </form>


                            </div>
                        </div><!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->



                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
