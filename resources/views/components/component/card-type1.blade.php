<a class="grid grid-cols-1 scale-[97%] hover:scale-100 flex-none overflow-hidden m-1 rounded-xl w-[250px] hover:rounded-2xl sm:w-[275px] md:w-[300px] lg:w-[325px]" href="{{ $destination }}" onmousedown="return false">
    <img class="pointer-events-none h-full w-max object-cover col-span-full row-start-1 row-end-10"
        src="{{ asset($img) }}" alt="{{ $title }}" />
    <h3 class="bg-black bg-opacity-60 text-white text-2xl col-start-1 col-end-1 row-start-7 font-bold py-2 text-center">
        {{ $title }}
    </h3>
</a>
