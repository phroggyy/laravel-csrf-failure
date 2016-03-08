@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="/">
            {!! csrf_field() !!}
            <input type="text" placeholder="Your name">
            <input type="submit" value="Test">
        </form>
    </div>
@stop