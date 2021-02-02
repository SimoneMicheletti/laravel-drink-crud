@extends('layouts.main-layout')

@section('content')

	<h1>EDIT DRINK:</h1>

	<form action="{{ route('drink-update', $drink -> id) }}" method="post">

		@csrf
		@method('POST')

		<label for="name">Name:</label>
		<input name="name" type="text" value="{{ $drink -> name }}">

		<br>

		<label for="strength">Strength:</label>
		<input name="strength" type="text" value="{{ $drink -> strength }}">

		<br>

		<label for="price">Price:</label>
		<input name="price" type="text" value="{{ $drink -> price }}">

		<br>

		<input type="submit" value="UPDATE">

	</form>

@endsection