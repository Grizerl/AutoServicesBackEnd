@extends('layouts.admin_layouts')
@section('title',' Car Services and Mechanic')
@section('content')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Employees in the company</h3>

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
                        Member name
                      </th>
                      <th style="width: 30%">
                        Images
                      </th>
                      <th>
                        Role in company
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($members as $memberss)
                  <tr>
                      <td>
                        {{$memberss->id}}
                      </td>
                      <td>
                          <a>
                            {{$memberss->name}}
                          </a>
                          <br>
                      </td>
                      <td>
                        {{$memberss->img}}
                      </td>
                      <td class="project_progress">
                         {{$memberss->role}}
                      </td>
                      <td style="display: flex; margin-left: 10vh;" class="project-actions text-right">
                          <a class="btn btn-primary btn-sm mr-1" href="">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm mr-1" href="{}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <form action="{}" method="post">
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