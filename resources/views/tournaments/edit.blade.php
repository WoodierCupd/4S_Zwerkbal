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
    <h1>Toernooi aanpassen</h1>
	<form action="{{ route('tournaments.update', $tournament) }}" method="POST">
		@csrf
        @method('PUT')
		<div class="form-group">
			<label for="name" class="tournament_label">Naam toernooi:</label>
			<input type="text" id="name" name="name" class="form-control" value="{{ $tournament->name }}">
            <label for="date" class="tournament_label">Datum:</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ $tournament->date }}">
            <label for="start_time" class="tournament_label">Start tijd:</label>
            <input type="time" id="start_time" name="start_time" class="form-control" value="{{ $tournament->start_time }}">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
