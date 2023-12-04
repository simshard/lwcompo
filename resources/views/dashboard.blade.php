<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-semibold mt-4">HMRC UK Exchange Rate table </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto mt-4">
                <div class="my-8">
                  
              
                  <livewire:xr-table />
              </div>
                <div class="text-3xl text-purple-900 text-center">
                  @php  $str = "\u{03A8}";//  
                  echo $str;
                  @endphp
              </div>
              </div>
        </div>
    </div>
</x-app-layout>
