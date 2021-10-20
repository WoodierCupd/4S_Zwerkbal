@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" class="active">Teams</a>
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
    <h1>Nieuw team</h1>
	<form action="{{ route('teams.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="name" class="tournament_label">Naam team:</label>
			<input type="text" id="name" name="name" class="form-control">
			<label for="text" class="tournament_label">Soort:</label>
			<input type="text" id="type" name="type">
			<label for="origin" class="tournament_label">Oorsprong:</label>
			<input type="text" id="origin" name="origin">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
