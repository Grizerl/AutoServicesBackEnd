@extends('layouts.admin_layouts')
@section('title',' Car Services and Mechanic')
@section('content')
<div class="card card-primary">
              <form action="{{route('members.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Member name</label>
                    <input name="name" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                  <label for="feature_image">Feature Image</label>
                  <input type="text" id="feature_image" name="img" value="">
                  <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <input name="role" type="text" class="form-control">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create members</button>
                </div>
              </form>
            </div>
@endsection