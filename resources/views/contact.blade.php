@extends('layouts.base')

@section('title', 'Listing')

@section('content')
    <h1>pages de contact</h1>
    <form class="center" action="index.html" method="post">
        <label for="">Nom</label>
        <input type="text" name="" value="">
        <label for="">Mail</label>
        <input type="text" name="" value="">
        <label for="">votre message</label>
        <textarea name="name" rows="8" cols="80"></textarea>
        <button type="submit" name="button">Envoyer</button>
    </form>
@endsection
