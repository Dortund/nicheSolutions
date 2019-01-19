@extends('layouts.app')

@section('content')
<div class="container">
	<div class="messages {{ session()->has('messages') ? 'visible' : 'invisible'}}">
		@if(session()->get('messages'))
			@foreach(session('messages') as $message)
        		<div class="alert alert-success">
        			{{ $message }}
        		</div>
        	@endforeach
		@endif
	</div>

	<div class="form-group row">
		<a id="createBtn" class="btn btn-primary" href="{{ route('admin.customers.create') }}">{{ trans('admin/customers.view.create') }}</a>
	</div>

	<h1>{{ trans('admin/customers.view.title') }}</h1>

	<table class="table">
		<thead>
	        <tr>
				<td>{{ trans('admin/customers.cols.name') }}</td>
				<td colspan="2">{{ trans('admin/customers.view.actions') }}</td>
	        </tr>
	    </thead>
	    <tbody>
	        @foreach($customers as $customer)
	        <tr>
	            <td>{{$customer->name}}</td>
	            <td><a href="{{ route('admin.customers.edit',$customer->id)}}" class="btn btn-primary">{{ trans('admin/customers.view.edit') }}</a></td>
	            <td>
	                <form action="{{ route('admin.customers.destroy', $customer->id)}}" method="post">
	                  @csrf
	                  @method('DELETE')
	                  <button class="btn btn-danger" type="submit">{{ trans('admin/customers.view.delete') }}</button>
	                </form>
	            </td>
	        </tr>
	        @endforeach
	    </tbody>
	</table>

	{{ $customers->links() }}
</div>
@endsection