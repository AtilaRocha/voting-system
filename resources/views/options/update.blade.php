
@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <p class="p-6 bg-white dark:bg-gray-800 text-white border-b border-gray-200 dark:border-gray-700">Digite novas opções de votação.</p>
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('options.update') }}" method="POST">
                        @csrf
                        @method('POST')                      
                        <div class="mb-4">
                            <label for="option1" class="block text-gray-700 dark:text-gray-300">Opção 1</label>
                            <input type="text" name="options[]" id="option1" class="block mt-1 w-full" required>
                        </div>                        
                        <div class="mb-4">
                            <label for="option2" class="block text-gray-700 dark:text-gray-300">Opção 2</label>
                            <input type="text" name="options[]" id="option2" class="block mt-1 w-full" required>
                        </div>                        
                        <div class="mb-4">
                            <label for="option3" class="block text-gray-700 dark:text-gray-300">Opção 3</label>
                            <input type="text" name="options[]" id="option3" class="block mt-1 w-full" required>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-white text-black border border-gray-300 rounded-md shadow-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50">Atualizar Votação</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
