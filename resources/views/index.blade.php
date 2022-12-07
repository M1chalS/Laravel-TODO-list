@extends('layouts.layout')

@section('content')
<header>
    <h1>Laravel TODO List</h1>
</header>
<main>
    @foreach($lists as $list)
        <p>{{$list->content}}</p>
    @endforeach
<form action="/list" method="POST">
    @csrf
    @method("POST")
    <label>
        <i class="fa-sharp fa-solid fa-plus"></i>
        <input type="text" name="content" />
    </label>
    <button type="submit">
        <i class="fa-sharp fa-solid fa-check"></i>
    </button>
</form>
</main>
    <footer>

    </footer>
@endsection
