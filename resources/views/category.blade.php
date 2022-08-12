<x-layout.layout>
    <x-header></x-header>
    <x-main>
        <a href="/">
            Return home
        </a>
        @slot('block')
            <x-main-block :tags="$tags" :products="$products" />          
        @endslot  
    </x-main>

</x-layout.layout>
