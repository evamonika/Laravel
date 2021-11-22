@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Mahasiswa Data') }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif


          <a href="/mahasiswa/create" class="btn btn-primary">Add Data</a><br><br>

          <table class="table table-responsive table-striped">
            <thread>
              <tr>
                <th>NIM</th>
                <th>Name</th>
                <th>Class</th>
                <th>Action</th>
              </tr>
            </thread>
            @foreach($mahasiswa as $m)
            <tr>
              <td>{{ $m->nim }}</td>
              <td>{{ $m->name }}</td>
              <td>{{ $m->class }}</td>
              <td>
              \<form action="/mahasiswa/{{$s->id}" method="post">
                  <a href="/mahasiswa/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                  $csrf
                  $method('DELETE')
                  <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection