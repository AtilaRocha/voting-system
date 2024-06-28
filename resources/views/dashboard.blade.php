@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 text-white border-b border-gray-200 dark:border-gray-700">
                <p>Dashboard da Votação</p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-2/3 px-4 mb-6">
                        <div class="bg-white dark:bg-gray-700 p-4 rounded shadow-md mb-4">
                            <form action="{{ route('dashboard') }}" method="GET">
                                <div class="mb-2">
                                    <label for="user_name" class="block text-gray-700 dark:text-gray-300">Filtrar por Nome de Usuário:</label>
                                    <input type="text" name="user_name" id="user_name" placeholder="Digite o Nome do Usuário" class="mt-1 block w-full bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                                <div class="mb-2">
                                    <label for="option_name" class="block text-gray-700 dark:text-gray-300">Filtrar por Opção Votada:</label>
                                    <input type="text" name="option_name" id="option_name" placeholder="Digite a Opção Votada" class="mt-1 block w-full bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                            </form>
                            <button type="submit" class="px-4 py-2 bg-white text-black border border-gray-300 rounded-md shadow-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50">Filtrar</button>
                        </div>

                        <div class="overflow-x-auto bg-white dark:bg-gray-700 p-4 rounded shadow-md">
                            <table class="min-w-full bg-white dark:bg-gray-700">
                                <thead>
                                    <tr class="bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-300">
                                        <th class="px-4 py-2">Usuário</th>
                                        <th class="px-4 py-2">Opção Votada</th>
                                        <th class="px-4 py-2">Data e Hora</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($filteredVotes as $vote)
                                        <tr class="border-b border-gray-200 dark:border-gray-600">
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">{{ $vote->user->name }}</td>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">{{ $vote->option->name }}</td>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">{{ $vote->created_at->format('d/m/Y H:i:s') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4">
                        <div class="overflow-x-auto bg-white dark:bg-gray-700 p-4 rounded shadow-md">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Top 5 Mais Votados</h3>
                            <table class="min-w-full bg-white dark:bg-gray-700">
                                <thead>
                                    <tr class="bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-300">
                                        <th class="px-4 py-2">Opção</th>
                                        <th class="px-4 py-2">Total de Votos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($topVotes as $vote)
                                        <tr class="border-b border-gray-200 dark:border-gray-600">
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">{{ $vote->option->name }}</td>
                                            <td class="px-4 py-2 text-gray-700 dark:text-gray-300">{{ $vote->total_votes }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
