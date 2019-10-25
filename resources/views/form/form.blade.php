@extends('form/header')
@section('content')
	<div>
		<h1>Laravel Formulier</h1>
	</div>
	<div>
		<form method="post" action="/form">
			{{ csrf_field() }}
			<input type="text" name="name" placeholder="Uw naam">
			<input type="text" name="age" placeholder="Uw leeftijd">
			<input type="text" name="mail"placeholder="E-mail adres">
			<button type="submit">Verzend</button>
			
		</form>
	</div>
@endsection