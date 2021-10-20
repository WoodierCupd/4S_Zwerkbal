@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments" class="active">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
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
    <h1>Nieuw toernooi</h1>
	<form action="{{ route('tournaments.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="name" class="tournament_label">Naam toernooi:</label>
			<input type="text" id="name" name="name" class="form-control">
			<label for="date" class="tournament_label">Datum:</label>
			<input type="date" id="date" name="date">
			<label for="start_time" class="tournament_label">Start tijd:</label>
			<input type="time" id="start_time" name="start_time">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
