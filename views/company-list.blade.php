@extends('layouts.app')

@section('content')
<style>
table, td, th {
  border: 1px solid black;
}

#table1
{
    border-collapse: collapse;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if(Session::has('delete-company'))
<span>{{Session::get('delete-company')}}</span>
@endif
                <a href="{{route('company.add')}}">Add Company</a>
<table id="table1">
<tr>
<th>ID</th>
<th>Name</th>

<th>Email</th>
<th>website</th>
<th>Action</th>

</tr>
@foreach($company as $com)
<tr>
<td>{{$com->id}}</td>
<td>{{$com->name}}</td>
<td>{{$com->email}}</td>
<td>{{$com->website}}</td>
<td><a href="/edit-company/{{$com->id}}">Edit</a></td>
<td><a href="/delete-company/{{$com->id}}">Delete</a></td>

</tr>
@endforeach
<table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
