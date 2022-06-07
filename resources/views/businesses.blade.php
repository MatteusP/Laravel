@extends('layouts.default')

@section('content')
    <form method="POST" action="{{route('businesses.store')}}">
        
        @csrf
        <input type="text" name="name">
        <br>
        <input type="text" name="email">
        <br>
        <input type="text", name="address">
        <br>
        <button type="submit">Salvar</button>
    </form>
@endsection