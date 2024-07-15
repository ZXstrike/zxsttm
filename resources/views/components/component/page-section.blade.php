<div class=" h-screen w-full items-center sect flex flex-col py-20 px-6" id="{{ $psid }}">
    <h1 class="text-5xl font-bold text-white mb-12">{{ $title }}</h1>
    <div class="content-container flex flex-wrap h-full w-full p-5 overflow-auto scrollbar-hidden rounded-3xl" {{ $attributes }}>
        {{ $slot }}
    </div>
</div>
