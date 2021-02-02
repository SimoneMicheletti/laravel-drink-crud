@extends('layouts.main-layout')

@section('content')
	
	<h1>Drink {{ $drink -> name }}:</h1>

	<ul>
		<li>Strength: {{ $drink -> strength }}% vol</li>
		<li>Price: € {{ $drink -> price }}</li>
	</ul>

	<a href="{{ route('drink-index') }}">HOME</a>

@endsection