@extends('layouts.app')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @if (session('success'))
                <div class="flex justify-center items-center h-screen">
                    <div class="p-6 bg-white dark:bg-gray-800 text-white text-center ">
                        <p class="mb-4">{{ session('success') }}</p>
                        <form action="{{ route('options.index') }}" method="GET">
                            <button type="submit" class="px-4 py-2 bg-white text-black border border-gray-300 rounded-md shadow-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50">Votar Novamente</button>
                        </form>
                    </div>
                </div>
            @else
                <p class="p-6 bg-white dark:bg-gray-800 text-white border-b border-gray-200 dark:border-gray-700">Selecione uma das opções abaixo.</p>
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <form action="{{ route('vote.store') }}" method="POST">
                        @csrf
                        @foreach($options as $option)
                            <div class="mb-4">
                                <input type="radio" name="option_id" value="{{ $option->id }}" id="option-{{ $option->id }}" required>
                                <label for="option-{{ $option->id }}" class="ml-2 text-gray-800 dark:text-gray-200">{{ $option->name }}</label>
                            </div>
                        @endforeach
                        <button type="submit" class="px-4 py-2 bg-white text-black border border-gray-300 rounded-md shadow-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50">Votar</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
