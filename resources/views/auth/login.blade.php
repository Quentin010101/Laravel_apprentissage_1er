<x-layout.layout>

    <div class="w-96">
        <form action="/login" method="POST" >
            @csrf
            <div class="px-5 py-3 flex justify-between">
                <label for="">Email</label>
                <input class="border-2 border-blue-800 rounded" type="email" name="email" id="">
            </div>
            <div class="px-5 py-3 flex justify-between">
                <label for="">Password</label>
                <input class="border-2 border-blue-800 rounded" type="password" name="password" id="">
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="px-5 py-3 flex justify-between">
                <input type="submit" value="Send" class="cursor-pointer p-2 bg-blue-600">
            </div>
        </form>
    </div>
</x-layout.layout>