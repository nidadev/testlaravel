@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
@if(Session::has('update-company'))
<span>{{Session::get('update-company')}}</span>
@endif

<a href="{{route('list.company')}}">View Company</a>

                   <form method="post" action="{{route('update.company')}}">
                   @csrf
                   <input type="hidden" name="id" value="{{$company->id}}">
                   Company Name:<br><input type="text" name="name" value="{{$company->name}}"><br>
                   Email:<br><input type="text" name="email" value="{{$company->email}}"><br>
                   Website:<br><input type="text" name="website" value="{{$company->website}}"><br>
                   <input type="submit" value="Submit">


                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
