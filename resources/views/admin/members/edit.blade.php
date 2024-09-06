@extends('layouts.admin_layouts')
@section('title',' Car Services and Mechanic')
@section('content')
<div class="card card-primary">
    <form action="{}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>Member name</label>
                <input name="name" type="text" class="form-control" value="{{ $members->name }}">
            </div>
            <div class="form-group">
                <label>Images</label>
                <textarea class="editor" name="img">{{ $members->img }}</textarea>
            </div>
            <div class="form-group">
                <label>Role</label>
                <input name="role" type="text" class="form-control" value="{{ $members->role }}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Member</button>
        </div>
    </form>
</div>
@endsection
