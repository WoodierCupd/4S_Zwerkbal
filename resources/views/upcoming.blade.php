@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
        <a href="/upcoming" class="active">Aankomend Toernooi</a>
    </nav>
@endsection

@section('content')
	@if($errors->any())
		<ul class="errors">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
    <h1>Aankomend Toernooi:</h1>
    <p>{{ $tournaments->name }}</p>
    <p>{{ $tournaments->date }}</p>
    <p>{{ $tournaments->start_time }}</p>
@endsection