<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Dados do Painel:") }}
                    <div class="text-xl">Projecto Nova Vida - 2023-10-04, 13:02:25
                      {{-- {{date("Y-m-d H:i:s")}} --}}</div>

                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
                          <div class="bg-white p-6 rounded-lg border-2">
                            <h2 class="text-xl font-bold mb-4">Temperatura ambiente</h2>
                            <p class="text-4xl">26.5 ºC.</p>
                          </div>
                        </div>
                    
                        <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
                          <div class="bg-white p-6 rounded-lg border-2">
                            <h2 class="text-xl font-bold mb-4">Temperatura do Painel</h2>
                            <p class="text-4xl">28 ºC</p>
                          </div>
                        </div>
                    
                        <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
                          <div class="bg-white p-6 rounded-lg border-2">
                            <h2 class="text-xl font-bold mb-4">Corrente de Saída</h2>
                            <p class="text-4xl">0.30 A</p>
                          </div>
                        </div>
                    
                        <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
                          <div class="bg-white p-6 rounded-lg border-2">
                            <h2 class="text-xl font-bold mb-4">Tensão de Saída</h2>
                            <p class="text-4xl">3.3 V</p>
                          </div>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
                          <div class="bg-white p-6 rounded-lg border-2">
                            <h2 class="text-xl font-bold mb-4">Potência de Saída</h2>
                            <p class="text-4xl">0,99 W</p>
                          </div>
                        </div>

                        <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 p-4">
                          <div class="bg-white p-6 rounded-lg border-2">
                            <h2 class="text-xl font-bold mb-4">Intensidade Luminosa</h2>
                            <p class="text-4xl">91%</p>
                          </div>
                        </div>

                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>