@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
        <a href="/upcoming">Aankomend Toernooi</a>
    </nav>
@endsection

@section('content')

    <h1>Dashboard</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eligendi porro! Asperiores odio deleniti voluptatibus obcaecati corporis tempora quos numquam molestiae! Dolorum quis hic doloribus debitis nesciunt minima, quisquam optio.</p>
    <div class="dashboard">
        <div class="tournament-stats border">
            <p>Aantal aankomende toernooien:</p>
            <span>5</span>
        </div>
        <div class="img-container border">
            <img src="img\snitch.png" alt="Een Zwerkbal">
        </div>
        <div class="team-stats border">
            <p>Totaal aantal teams:‎</p>
            <span>26</span>
        </div>
    </div>

@endsection