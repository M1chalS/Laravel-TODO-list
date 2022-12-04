@extends('layouts.layout')

@section('content')

    <h1>Laravel TODO List</h1>

    @foreach($lists as $list)
        <p>{{$list->content}}</p>
    @endforeach


@endsection
