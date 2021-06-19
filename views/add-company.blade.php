@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
@if(Session::has('add-company'))
<span>{{Session::get('add-company')}}</span>
@endif
<a href="{{route('list.company')}}">View Company</a>

                   <form method="post" action="{{route('save.company')}}">
                   @csrf
                   Company Name:<br><input type="text" name="name" value="">
                   @if($errors->has('name'))
                   {{$errors->first('name')}}
                   @endif
                   <br>
                   Email:<br><input type="text" name="email" value="">
                   @if($errors->has('email'))
                   {{$errors->first('email')}}
                   @endif<br>
                   Website:<br><input type="text" name="website" value="">
                   @if($errors->has('website'))
                   {{$errors->first('website')}}
                   @endif
                   <br>
                   <input type="submit" value="Submit">


                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
