<div class="container m-2 mx-auto text-3xl border border-x-red-300">
    <h1 class="text-red-500">{{ $count }}</h1>
 
    <button wire:click="increment" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">+</button>
 
    <button wire:click="decrement" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">-</button>
</div>
