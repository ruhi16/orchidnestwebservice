

<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organisation Details') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-slate-400">
            <div class="bg-blue-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-right bg-white border-b border-gray-200">
                    
                    <p class="text-4xl font-bold text-purple-800 dark:text-white">Name: {{ $organisation->name }}</p>
                    <p class="text-2xl font-bold text-red-900 dark:text-white">Description: {{ $organisation->desc }}</p>
                    <p class="text-xl font-bold text-red-900 dark:text-white">Address: {{ $organisation->address }}</p>
                    <p class="text-xl old text-red-900 dark:text-white">Mobile: {{ $organisation->mobile1 }}</p>
                    <p class="text-xl  text-red-900 dark:text-white">Email: {{ $organisation->email }}</p>                   

                </div>

                <!-- <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-2xl font-bold text-green-900 dark:text-white">Locations:</p>                   
                    @foreach ($organisation->locations as $location)                    
                        <p class="text-2xl font-bold text-green-900 dark:text-white">{{ $location->name }}</p>                   
                    @endforeach
                </div> -->

                <div class="p-6 bg-red-400 border-b border-gray-200 justify-center flex flex-row items-center"> <!-- max-w-xl -->
                
                
                
                
                    <form class="w-full max-w-4xl bg-indigo-400 p-6">

                        <!-- <div class="grid grid-cols-6 md:grid-cols-12 gap-4">
                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>
                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>
                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>
                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>

                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>
                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>

                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>
                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>
                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>
                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>

                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>
                            <div class="w-32 h-16 bg-purple-600 rounded-md">01</div>
                        </div> -->


                        <div class="md:flex md:items-center md:gap-2 mb-6">
                            <div class="md:w-1/6">
                                <label  class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" 
                                        for="inline-full-addr">
                                    Name
                                </label>
                            </div>
                            <div class="md:w-2/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text"
                                        placeholder="Enter your name" 
                                        value="">
                            </div>
                            <!-- <div class="md:w-1/6">
                                <label  class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" 
                                        for="inline-full-addr">
                                    Age
                                </label>
                            </div> -->
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="Gender"
                                        value="">
                            </div>
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="Age"
                                        value="">
                            </div>
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="Nationality"
                                        value="Indian">
                            </div>
                        </div>

                        






                        <div class="md:flex md:items-center md:gap-2 mb-6">
                            <div class="md:w-1/6">
                                <label  class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" 
                                        for="inline-full-addr">
                                    Address
                                </label>
                            </div>
                            <div class="md:w-2/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="Your address please"
                                        value="">
                            </div>
                            <!-- <div class="md:w-1/6">
                                <label  class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" 
                                        for="inline-full-addr">
                                    Age
                                </label>
                            </div> -->
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="City"
                                        value="">
                            </div>
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="District"
                                        value="">
                            </div>
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="Pin"
                                        value="">
                            </div>
                        </div>

                        <div class="md:flex md:items-center md:gap-2 mb-6">
                            <div class="md:w-1/6">
                                <label  class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" 
                                        for="inline-full-addr">
                                    Mobile
                                </label>
                            </div>
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="Your Contact no"
                                        value="">
                            </div>
                      
                            <div class="md:w-2/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="Aadhaar"
                                        value="">
                            </div>
                            <div class="md:w-2/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="EPIC"
                                        value="">
                            </div>
                        </div>

                        <div class="md:flex md:items-center md:gap-2 mb-6">
                            <div class="md:w-1/6">
                                <label  class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" 
                                        for="inline-full-addr">
                                    Persons
                                </label>
                            </div>
                            <div class="md:w-2/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="Total No of effective persons"
                                        value="">
                            </div>
                      
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="Adult"
                                        value="">
                            </div>
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="bello 10yrs"
                                        value="">
                            </div>
                            <div class="md:w-1/6 mb-2">
                                <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                        id="inline-full-addr" 
                                        type="text" 
                                        placeholder="bello 3yrs"
                                        value="">
                            </div>
                        </div>




                        <div class="md:flex md:items-center">
                            <div class="md:w-1/6"></div>
                            
                            <div class="md:w-1/6">
                            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                Sign Up
                            </button>
                            </div>

                            <div class="md:w-1/6">
                            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                Cancel
                            </button>
                            </div>
                        </div>
                        



                    </form>

                    
                </div>

                

                <x-modal />
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="openModal()">
                    Open Modal 2
                </button>

                <div class="relative max-w-sm">
  <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
    </svg>
  </div>
  <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
</div>


                

                    <div class="flex flex-col mb-4 p-4">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <div class="flex space-x-4 items-center">
                                                    <a href="#">
                                                        <span>Name</span>
                                                    </a>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <div class="flex space-x-4 items-center">
                                                    <a href="#">
                                                        <span>Email</span>
                                                    </a>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <div class="flex space-x-4 items-center">
                                                    <a href="#">
                                                        <span>Title</span>
                                                    </a>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <div class="flex space-x-4 items-center">
                                                    <a href="#">
                                                        <span>Status</span>
                                                    </a>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <div class="flex space-x-4 items-center">
                                                    <a href="#">
                                                        <span>Role</span>
                                                    </a>
                                                </div>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">RAM</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">ram@gmail.com</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">Ramayana</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Active</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin </td>
                                            </tr>

                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    
                </div>
                
            
        </div>
    </div>

    
    
</x-app-layout>

<script type="text/javascript">

</script>