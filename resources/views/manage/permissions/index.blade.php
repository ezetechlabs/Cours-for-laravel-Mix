@extends('layouts.app')

@section('content')
@include('_includes.nav._manage')
  <div class="section" style="background-color:#f5f5f0; width: 1095px;margin-left: 210px; ">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manage Permissions</h1>
      </div>
      <div class="column">
        <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Permission</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="card">
      <div class="card-content">
        <table class="table is-narrow">
          <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th></th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($permissions as $permission)
              <tr>
                <th>{{$permission->display_name}}</th>
                <td>{{$permission->name}}</td>
                <td>{{$permission->description}}</td>
                <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('permissions.show', $permission->id)}}">Voir</a></td>
                <td><a class="button is-outlined " href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div> <!-- end of .card -->
    {{ $permissions->links() }}
  </div>
@endsection
