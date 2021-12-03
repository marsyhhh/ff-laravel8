@extends('layouts.admin.app')

@section('content')
<div class="main-content" style="min-height: 530px;">
    <section class="section">
      <div class="section-header">
        <h1>Users</h1>
        <div class="section-header-button">
          <a href="{{ $route }}" class="btn btn-primary">Add New</a>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Users</h2>
        <div class="row">
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>All Users</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <td>{{ $user->name }}
                              <div class="table-links">
                                <div class="bullet"></div>
                                <a href="{{ route('user.edit', $user->id) }}">Edit</a>
                                <div class="bullet"></div>
                                <a href="#" onclick="event.preventDefault(); $('#destroy-{{ $user->id }}').submit()">Delete</a>
                                <form id="destroy-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                </form>
                                
                              </div>
                            </td>
                            <td>{{ $user->email  }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->password }}</td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    
@endsection

@section('script')
  <script>
    $(document).ready( function () {
      $('#table_id').DataTable();
    } );
  </script>
    
@endsection