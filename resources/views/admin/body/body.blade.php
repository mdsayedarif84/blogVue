
@extends('admin.components.master')
@section('title')
    Home
@endsection
@section('body')
  <div class="content-wrapper" id="contents">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><router-link to="/add-category">Category</router-link></li>
                        <li class="breadcrumb-item active"><router-link to="/home">Home</router-link></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content" >
      <router-view></router-view>
        <!-- Default box -->
        {{-- <div id="home">
          <home/>
        </div>
        <div id="addCategory">
          <addCategory/>
        </div>
        <div id="manageCategroy">
          <manageCategory/>
        </div> --}}
        <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
@endsection