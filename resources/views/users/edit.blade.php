@extends('layouts.app')
@section('content')

<h1> {{ trans('admin/users.update.update-other.title') }}</h1>
  
@include('users.form')

@endsection
