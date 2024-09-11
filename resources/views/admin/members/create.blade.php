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
                    <label>Phone number</label>
                    <input name="phone" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Place of residence</label>
                    <input name="residence" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                  <label for="feature_image">Feature Image</label>
                  <div><input style="width: 100%; padding: 3px 15px; margin: 10px 0px;" type="text" id="feature_image" name="img" value=""></div>
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