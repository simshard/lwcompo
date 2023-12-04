
        <div class="py-2 align-middle inline-block  ">
            <div class="">
                    <label for="search" class="sr-only">Search</label>
                    <div class=" ">
                        <div class=" ">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input 
                        wire:model.live='search'
                        id="search"
                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-blue-300 focus:shadow-outline-blue sm:text-sm transition duration-150 ease-in-out"
                        placeholder="Search"
                        type="search">
                    </div>
                
 

            <div class="shadow   border  border-grey-400 sm:rounded-lg mt-4">   
                <table wire:loading.class="bg-gray" class=" divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex items-center">
                                 <button wire:click="sortBy('countryName')" class="bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider hover:text-gray-900">
                                    countryName
                                </button>  
                                
                                @if (!$sortField )
                                <span></span>
                            @elseif($sortAsc)
                                <svg class="ml-2 w-3" fill="none" stroke="#f00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 15l7-7 7 7"></path>
                                </svg>
                            @else
                                <svg class="ml-2 w-3" fill="none" stroke="#f00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            @endif
                            </div>
                            </th>
                            <th
                            class="px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex items-center"> 
                              countryCode 
                            </div>
                            </th>
                            <th
                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                 
                                 currencyName 
                                
                            </th>

                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">currencyCode</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">rateNew</th> 
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">period</th> 
                        </tr>
                     </thead>
                    <tbody class="bg-white divide-y divide-gray-200">


@foreach ($xrdata as $rate)
                        <tr>
                            <td class="w-4/12 px-6 py-4 whitespace-no-wrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://www.gravatar.com/avatar/?d=mp&f=y" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm leading-5 font-medium text-gray-900">
                                            {{ $rate->countryName }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="w-4/12 px-6 py-4 whitespace-no-wrap">
                                <div class="text-sm leading-5 text-gray-900">{{ $rate->countryCode }}</div>
                            </td>
                           
                           
                            <td class="w-4/12 px-6 py-4 whitespace-no-wrap">
                                <div class="text-sm leading-5 text-gray-900"> {{ $rate->currencyName }} </div>
                            </td>
                            <td class="w-4/12 px-6 py-4 whitespace-no-wrap">
                                <div class="text-sm leading-5 text-gray-900"> {{ $rate->currencyCode }} </div>
                            </td>
                            <td class="w-4/12 px-6 py-4 whitespace-no-wrap">
                                <div class="text-sm leading-5 text-gray-900"> {{ $rate->rateNew }} </div>
                            </td>
                            <td class="w-4/12 px-6 py-4 whitespace-no-wrap">
                                <div class="text-xs leading-5 text-gray-500"> {{ $rate->period }} </div>
                            </td>
                        </tr>
    @endforeach 
                    </tbody> 
                </table>
            </div>
    
 
            <div class="mt-8">
                {{ $xrdata->links(data: ['scrollTo' => false]) }}
            </div>
        
     



