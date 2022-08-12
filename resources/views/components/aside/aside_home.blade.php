<aside class="xl:w-1/5 w-full mx-3 px-3 py-1 bg-white rounded hidden md:block">
    <div>
        <div>
            <h3 class="font-bold text-lg text-blue-800">Promotion</h3>
            <div class="flex flex-row justify-between xl:flex-col xl:items-start ">
                @foreach ($products as $product)
                    <x-card.card_home_aside :product="$product" />
                @endforeach
            </div>

        </div>
    </div>
</aside>