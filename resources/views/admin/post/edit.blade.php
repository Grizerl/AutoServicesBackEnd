@extends('layouts.admin_layouts')
@section('title',' Car Services and Mechanic')
@section('content')
<div class="card card-primary">
              <form action="{{route('post.update',$post['id'])}}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label>Title post</label>
                    <input name="title" type="text" class="form-control" value="{{$post['title']}}">
                  </div>
                  <div class="form-group">
                    <label>Content post</label>
                    <input name="content_post" type="text" class="form-control" value="{{$post['content']}}">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit post</button>
                </div>
              </form>
            </div>
@endsection