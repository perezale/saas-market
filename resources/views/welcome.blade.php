@extends('layouts.app')

@section('content')
    <div>
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                Dashboard
            </h1>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <!-- <div class="px-4 py-6 sm:px-0">
                <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
            </div> -->
            
            <h2 class="text-xl leading-tight py-6 text-gray-900">Últimos 30 días</h2>
            <x-stats></x-stats>

            <h2 class="text-xl leading-tight py-6 text-gray-900">Tareas finalizadas recientemente</h2>
        
            <x-table></x-table>
            <!-- /End replace -->
            </div>
        </main>
    </div>
@endsection
