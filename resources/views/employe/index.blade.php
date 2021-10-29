@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Employees List') }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <a class="btn btn-primary mb-2" href="{{ route('employe.create') }}">Add an Employee</a>

          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              {{-- <th scope="row">3</th> --}}
              @foreach ($employes as $employe)
              <tr>
                <td> {{ $employe->id }} </td>
                <td>{{ $employe->name }}</td>
                <td>{{ $employe->email }}</td>
                <td> <a href="/employe/{{ $employe->id }}"> Voir </a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection