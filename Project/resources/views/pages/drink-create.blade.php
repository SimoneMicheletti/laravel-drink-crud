@extends('layouts.main-layout')

@section('content')

	<h1>INSERT NEW DRINK:</h1>

	<form action="{{ route('drink-store') }}" method="post">

		@csrf
		@method('POST')

		<label for="name">Name:</label>
		<input name="name" type="text">

		<br>

		<label for="strength">Strength:</label>
		<input name="strength" type="text">

		<br>

		<label for="price">Price:</label>
		<input name="price" type="text">

		<br>

		<input type="submit" value="SAVE">

	</form>

@endsection