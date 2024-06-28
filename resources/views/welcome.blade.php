@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 text-white border-b border-gray-200 dark:border-gray-700">
                <p>Bem-vindo ao Sistema de Votação</p>
                <p class="mt-4 text-gray-600 dark:text-gray-400">Nosso sistema utiliza tecnologias avançadas como Laravel, Blade, JavaScript e PostgreSQL para proporcionar uma experiência segura e eficiente de votação. Para começar, você pode se cadastrar e autenticar-se de forma segura. Após o login, participe das votações selecionando opções pré-definidas.</p>
        <p class="mt-4 text-gray-600 dark:text-gray-400"><strong>Principais Funcionalidades:</strong></p>
        <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 ml-6">
            <li class="mt-2">Registro Seguro: Cadastre-se com segurança para começar a votar.</li>
            <li class="mt-2">Votação Simples: Escolha entre opções disponíveis e envie seu voto.</li>
            <li class="mt-2">Estatísticas Detalhadas: Explore estatísticas de votação filtradas por nome de usuário e opção escolhida.</li>
        </ul>
        <p class="mt-4 text-gray-600 dark:text-gray-400">Explore e aproveite a experiência completa de votação segura e transparente!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
