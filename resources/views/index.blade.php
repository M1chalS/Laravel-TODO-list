@extends('layouts.layout')

@section('content')
    <header class="w-full p-4 text-blue-700">
        <span class="absolute left-0 text-4xl"><i class="fa-sharp fa-solid fa-list-check" title="Twoje tablice"></i></span>
        <h1 class="w-fit m-auto text-4xl ">Laravel TODO List</h1>
    </header>
    <main class="w-full text-blue-400">
        <section class="w-auto flex p-4">
        <div class="w-1/4 border-2 border-blue-500">
            @foreach($lists as $list)
                <div class="flex" x-data>
                    <p class="flex-wrap break-all"
                    @click="alert('list')"
                    >{{$list->content}}</p>
                    <button type="submit" form="delete-{{$list->id}}"><i class="fa-sharp fa-solid fa-minus"></i></button>
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
        </section>
    </main>

    <footer>

    </footer>
@endsection
