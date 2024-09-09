@extends('layouts.admin_layouts')
@section('title', 'Car Services and Mechanic')
@section('content')
<div class="card card-primary">
    <form action="{{ route('members.update', $member->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>Member name</label>
                <input name="name" type="text" class="form-control" value="{{ $member->name }}">
            </div>
            <div class="form-group">
                    <label>Phone number</label>
                    <input name="phone" type="text" class="form-control"  value="{{$member->phone_number}}">
                  </div>
                  <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="text" class="form-control"  value="{{$member->age}}">
                  </div>
                  <div class="form-group">
                    <label>Place of residence</label>
                    <input name="residence" type="text" class="form-control"  value="{{$member->place_of_residence}}">
                  </div>
            <div class="form-group">
                <label>Feature Image</label>
                <input type="text" name="img" value="{{ $member->img }}">
                <a href="#" class="popup_selector">Select Image</a>
            </div>
            <div class="form-group">
                <label>Role</label>
                <input name="role" type="text" class="form-control" value="{{ $member->role }}">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Member</button>
            </div>
        </form>
    </div>
@endsection
