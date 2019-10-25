@extends ('form/header')

@section('content')
	<div class='user' style="padding:10px;">
		@foreach ($users as $user) 
			<li>
				<span>Name is {{$user->name}} | </span>
				<span>Age is {{$user->age}} | </span>
				<span>E-mail adres is {{$user->mail}}</span>
			</li>
		@endforeach
	</div>
@endsection