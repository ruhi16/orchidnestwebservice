

<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking Details') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-slate-400">
            <div class="bg-blue-200 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-right bg-white border-b border-gray-200">
                    
                    <p class="text-4xl font-bold text-purple-800 dark:text-white">Name: {{ $organisation->name }}</p>
                    <p class="text-2xl font-bold text-red-900 dark:text-white">Description: {{ $organisation->desc }}</p>
                    <p class="text-xl font-bold text-red-900 dark:text-white">Address: {{ $organisation->address }}</p>
                    <p class="text-xl old text-red-900 dark:text-white">Mobile: {{ $organisation->mobile1 }}</p>
                    <p class="text-xl  text-red-900 dark:text-white">Email: {{ $organisation->email }}</p>                   

                </div>

                <div class="p-6 bg-red-400 border-b border-gray-200 justify-center flex flex-row items-center"> <!-- max-w-xl -->
                
                
                    Hello   Hello
                    
                </div>

                
                
                
            <div class="p-6 bg-blue-200 border-b border-gray-200 justify-center flex flex-row items-center">
                <form method="GET" action="{{ route('test') }}">
                @csrf

                    <div class="relative max-w-sm">
                        <!-- <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div> -->
                        Search Date
                        <input type="date" name="bdate"/>

                        <x-button class="ml-3">
                            {{ __('Search') }}
                        </x-button>
                        
                        <!-- <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date"> -->
                    </div>

                            <div class="relative max-w-5xl bg-purple-400">
                            @php
                                $days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];                                
                                $month = \Carbon\Carbon::today()->format('F');
                                $today = \Carbon\Carbon::now();
                                $day = 1;
                            @endphp

                                <div class="bg-gray-100 flex items-center justify-center">

                                    <div class="lg:w-12/12 md:w-full sm:w-10/12 mx-auto p-4">
                                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                                            <div class="flex items-center justify-between px-6 py-3 bg-gray-700">
                                                <button id="prevMonth" class="text-white">Previous</button>
                                                <h2 id="currentMonth" class="text-white">{{$month}}</h2>
                                                <button id="nextMonth" class="text-white">Next</button>
                                            </div>
                                                <!-- {{ $today }}
                                                {{ $today->format('F') }}
                                                ={{ $today->dayOfWeek }}

                                                <br>{{ $today->startOfMonth()->dayOfWeek}} = {{ $today->endOfMonth()->day; }}
                                                 -->
                                                
                                                

                                            <div class="grid grid-cols-7 gap-2 p-4 w-full" id="calendar">
                                                <!-- Calendar Days Go Here -->

                                                @for ($i = 0; $i < 7 ; $i++)
                                                    <div class="h-8 w-16 flex items-center justify-center px-2 py-3 bg-gray-700">
                                                        <div class="text-white">

                                                            {{ $days[$i] }}

                                                        </div>
                                                    </div>
                                                @endfor

                                                
                                                @for ($i = 0; $i < 42 && $day <= $today->endOfMonth()->day; $i++)
                                                    <div class="box-border h-8 w-16 p-2 border-2 flex items-center justify-center ">
                                                    @if($i >= $today->startOfMonth()->dayOfWeek)   
                                                        {{$day++}}
                                                    @endif
                                                    </div>
                                                @endfor
                                                
                                            </div>                                            

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                </form>
                 
            </div>
            
        
        
        </div>
                
            
        </div>
    </div>

    
    
</x-app-layout>

<script type="text/javascript">

</script>