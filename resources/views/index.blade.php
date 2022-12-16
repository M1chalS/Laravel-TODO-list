@extends('layouts.layout')

@section('content')
    <header class="w-full p-4 text-blue-700">
        <span class="absolute left-0 text-4xl"><i class="fa-sharp fa-solid fa-list-check"
                                                  title="Twoje tablice"></i></span>
        <h1 class="w-fit m-auto text-4xl ">Laravel TODO List</h1>
    </header>

    <nav class="absolute top-0 left-0 bg-blue-400 w-1/6 h-full text-blue-900">
            <i class="text-2xl fa-sharp fa-solid fa-xmark"></i>
            <h2 class="w-full text-3xl text-center">Your Lists</h2>
            <div class="text-xl flex w-full h-full text-center justify-start flex-col align-top items-start mt-4">
                <a class="w-full p-2">List 1</a>
                <a class="w-full p-2">List 2</a>
                <a class="w-full p-2">List 3</a>
                <a class="w-full p-2">List 4</a>
        </div>
    </nav>


    <main class="w-full text-blue-400">
        <section class="w-auto flex p-4">
            <div class="w-1/4 border-2 border-blue-500">
                @foreach($lists as $list)
                    <div class="flex" x-data>
                        <p class="flex-wrap break-all"
                           @click="alert('list')"
                        >{{$list->content}}</p>
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
        </section>
    </main>

    <footer>

    </footer>
@endsection
