@extends('layouts.app')
@section('content')

<h1>{{ trans('admin/customers.create.title') }}</h1>

@include('customers.form')

@endsection
