<div>
    <h2 class="font-bold text-lg text-gray-500">Category:</h2>
    @foreach ($tags as $tag)
        <h3 class="font-bold text-lg mt-6 ml-5 text-blue-800">{{ ucfirst($tag->tag) }}:</h3>
        <div class="flex">
            @foreach ($tag->products as $product)
                @if ($loop->iteration > 5)
                    @break
                @endif
                    <x-card.card_home_aside :product="$product" />
            @endforeach
        </div>
    @endforeach
</div>