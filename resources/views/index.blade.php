@extends('layouts.layout')

@section('content')
    <header class="w-full">
        <h1 class="w-fit m-auto">Laravel TODO List</h1>
    </header>
    <main class="w-full flex">
        <div class="w-1/4 border-2">
            @foreach($lists as $list)
                <div class="flex-wrap">{{$list->content}}
                    <button type="submit" form="delete-{{$list->id}}"><i class="fa-sharp fa-solid fa-minus"></i>
                    </button>
                </div>
                <form method="POST" action="/list/{{$list->id}}" id="delete-{{$list->id}}">
                    @csrf
                    @method("DELETE")
                </form>
            @endforeach
            <form action="/list" method="POST">
                @csrf
                @method("POST")
                <label>
                    <i class="fa-sharp fa-solid fa-plus"></i>
                    <input type="text" name="content"/>
                </label>
                <button type="submit">
                    <i class="fa-sharp fa-solid fa-check"></i>
                </button>
            </form>
        </div>
    </main>
    <footer>

    </footer>
@endsection
