@extends('admin.admin_template')

@section('content')
   <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Profile</h3>
              <div class="box-tools pull-right">
               
              </div>
            </div>
            <div class="box-body">
              <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height: 150px; float: left; border-radius: 50%; margin-right:25px; border:1px black solid;">
              <h2>{{ $user->name }}</h2>
              <form enctype="multipart/form-data" action="/admin/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
              </form>
            </div><!-- /.box-body -->
            
          </div><!-- /.box -->

@endsection