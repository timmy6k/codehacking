@extends('layouts.admin')


@section('content')

    <h1>Users</h1>

     <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)

          <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo ? $user->photo->file : '/images/placeholder.png'}}" alt="{{$user->photo ? $user->photo->file : '/'}}"> </td>
            <td><a href="{{route('admin.users.edit', $user->id)}}"> {{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <th>{{$user->created_at->diffForHumans()}}</th>
            <th>{{$user->updated_at->diffForHumans()}}</th>
          </tr>

            @endforeach
        @endif
        </tbody>
      </table>



@endsection