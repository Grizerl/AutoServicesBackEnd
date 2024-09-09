@extends('layouts.admin_layouts')
@section('title',' Car Services and Mechanic')
@section('content')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Cars posts</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                        Id
                      </th>
                      <th style="width: 20%">
                        Title posts
                      </th>
                      <th style="width: 30%">
                        Content posts
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($post_content as $post)
                  <tr>
                      <td>
                        {{$post->id}}
                      </td>
                      <td>
                          <a>
                            {{$post->title}}
                          </a>
                          <br>
                      </td>
                      <td width="50%">
                        {{$post->content}}
                      </td>
                      <td style="display: flex; justify-content: center;  margin-left: 10vh;" class="project-actions text-right">
                          <a class="btn btn-info btn-sm mr-1" href="{{route('post.edit',$post['id'])}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <form action="{{route('post.destroy',$post['id'])}}" method="post">
                            @csrf
                            @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
@endsection