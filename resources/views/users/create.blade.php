@extends('layouts.app')
@section('content')

<h1>{{ trans('admin/users.create.title') }}</h1>

@include('users.form')

@endsection
