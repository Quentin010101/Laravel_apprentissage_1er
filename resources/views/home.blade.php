<x-layout.layout>
    <x-header></x-header>
    <x-main>
        <x-aside.aside_home :products="$products"/>
        @slot('block')
            <x-main-block :tags="$tags" :products="$products" />          
        @endslot 
    </x-main>
</x-layout.layout>