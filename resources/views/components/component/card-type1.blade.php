<a class="grid grid-cols-1 flex-none overflow-hidden m-2 rounded-lg w-[250px] sm:w-[325px]" href="{{ $destination }}" onmousedown="return false">
    <img class="pointer-events-none h-full w-max object-cover col-span-full row-start-1 row-end-10"
        src="{{ asset($img) }}" alt="{{ $title }}" />
    <h3 class="bg-black bg-opacity-60 text-white text-2xl col-start-1 col-end-1 row-start-7 font-bold py-2 text-center">
        {{ $title }}
    </h3>
</a>
