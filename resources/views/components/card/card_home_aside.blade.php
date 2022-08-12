<div class="xl:w-full w-5/6 px-5 xl:m-3">
    <div class="w-4/5 xl:h-px bg-gray-800 my-5"></div>
    <div>
        <h3>{{ $product->name }}</h3>
    </div>
    <div>
        <img class="p-2" src="{{ $product->images->path }}" alt="image produit">
    </div>
    <div>
        <p class="text-sm font-bold text-gray-600">Description:</p>
        <p class="px-2 text-sm italic">{{ $product->description }}</p>
    </div>
    <div>
        <p class="text-sm font-bold text-gray-600">Pricing:</p>
        <p class="px-2 text-sm font-bold italic text-green-500">{{ $product->price/100 }} &#8364</p>
    </div>
    <div class="flex flex-wrap">
        @foreach ($product->tags as $tag)
            <x-tag.tag :tag="$tag" />
        @endforeach
    </div>
</div>