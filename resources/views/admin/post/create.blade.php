@extends('layouts.admin_layouts')
@section('title',' Car Services and Mechanic')
@section('content')
<div class="card card-primary">
              <form action="{{route('post.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Title post</label>
                    <input name="title" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Content post</label>
                    <input name="content" type="text" class="form-control">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create post</button>
                </div>
              </form>
            </div>
@endsection