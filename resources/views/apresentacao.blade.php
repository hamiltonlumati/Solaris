<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dados dos  últimos 30 dias') }}
        </h2>
    </x-slot>

    <div class="pt-2 pb-2">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-6 text-gray-900 dark:text-gray-100">
                    <div class="px-o" id='temperaturaAmbienteGraph'><!-- Plotly chart will be drawn inside this DIV --></div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="py-2">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id='tensaoDeSaida'><!-- Plotly chart will be drawn inside this DIV --></div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="py-2">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id='correnteDeSaida'><!-- Plotly chart will be drawn inside this DIV --></div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="py-2">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id='potenciaDeSaida'><!-- Plotly chart will be drawn inside this DIV --></div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="py-2">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id='eficiencia'><!-- Plotly chart will be drawn inside this DIV --></div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="py-2">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id='intensidadeLuminosa'><!-- Plotly chart will be drawn inside this DIV --></div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-auto text-center">
        Por Hamilton Lumati. 2023 &copy; Todos os direitos reservados.
    </div>
</x-app-layout>
