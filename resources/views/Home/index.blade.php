@extends('layouts.app-layout')
@extends('layouts.nav')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container px-6 mx-auto pt-[100px]">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($pizzas as $pizza)
            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md bg-white">
                <div class="flex items-end justify-end w-full bg-cover">

                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">Pizza {{ $pizza->name }}</h3>
                    <span class="mt-2 text-gray-500">{{ $pizza->price }}</span>
                    <br>
                    <span class="mt-2 text-gray-500">{{ $pizza->description }}</span>
                    <form action="{{ route('Winkelmandje.store') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $pizza->id }}" name="id">
                        <input type="hidden" value="{{ $pizza->name }}" name="name">
                        <input type="hidden" value="{{ $pizza->price }}" name="price">

                        <label>Klein 20cm</label>
                        <input type="radio" name="groote" value=0.8>
                        <br>
                        <label>Medium 25cm</label>
                        <input type="radio" name="groote" value=1 checked>
                        <br>
                        <label>Groot 30cm</label>
                        <input type="radio" name="groote" value=1.2>
                        <br>
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Toevoegen</button>
                    </form>
                </div>

            </div>
            @endforeach
        </div>
    </div>
@endsection
