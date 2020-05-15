@extends('layouts.app')

@section('content')
    <div>
        <!-- Start info bar -->
        <div class="bg-blue-50 px-4 py-3 flex items-start lg:justify-center lg:px-8 lg:py-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-3 flex-1 lg:flex lg:justify-between">
                    <p class="text-sm leading-6 font-medium text-blue-700">Los componentes se encuentran en etapa de pruebas.</p>
                    <p class="mt-2 text-sm leading-6 lg:mt-0 lg:ml-4">
                        <a href="/documentation" target="_blank" class="font-medium text-blue-700 hover:underline hover:text-blue-500 transition ease-in-out duration-150">Póngase en contacto para mas información →</a>
                    </p>
                </div>
            </div>
                
            
        </div>
        <!-- End info bar -->
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
            
            <x-stats></x-stats>

            <h2 class="text-xl leading-tight py-6 text-gray-900">Tareas finalizadas recientemente</h2>
        
            <x-table></x-table>
            <!-- /End replace -->
            </div>
        </main>
    </div>
@endsection
