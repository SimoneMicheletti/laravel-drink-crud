@extends('layouts.main-layout')

@section('content')
	
	<h1>DRINKS:</h1>

	<ul>
		@foreach ($drinks as $drink)
			<li>
				<a href="{{ route('drink-show', $drink -> id) }}">
					{{ $drink -> name }} | 
					<a href="{{ route('drink-edit', $drink -> id) }}">EDIT</a>
					<a href="{{ route('drink-delete', $drink -> id) }}">DELETE</a>		
				</a>
			</li>
		@endforeach
	</ul>

	<a href="{{ route('drink-create') }}">INSERT NEW DRINK</a>

@endsection