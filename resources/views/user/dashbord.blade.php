<x-layout.layout>
    <x-header></x-header>
    <x-main>
        <a href="/">
            Return home
        </a>
        @slot('block')
            <h1>You are too good</h1> 
            <h2>{{ $user->name }}</h2>     
            <h2>{{ $user->email }}</h2>     
        @endslot  
    </x-main>
</x-layout.layout>