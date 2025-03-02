@props([
    'source' => 'https://cdn.devdojo.com/pines/videos/coast.mp4',
])

<div x-data="{ playing: false, muted: false }" class="relative h-full w-full m-auto" @click.outside="$refs.player.pause()" x-intersect:leave="$refs.player.pause()">

    <video x-ref="player" @play="playing=true" @pause="playing=false" class = " h-full max-h-[500px] w-full">
        <source src="{{ $source }}" type="video/mp4">
        your browser does not support html5 video
    </video>

    {{-- Play button --}}
    <div x-cloak x-show="!playing" @click="$refs.player.play()"
        class="absolute z-10 inset-0 flex items-center justify-center w-full h-full cursor-pointer"
        @click="playing = !playing">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-play-fill w-16 h-16 text-white" viewBox="0 0 16 16">
            <path
                d="M11.596 8.697 5.233 12.389c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
        </svg>
    </div>

    {{-- Pause button --}}
    <div x-show="playing" @click="$refs.player.pause()"
        class="absolute z-10 inset-0 flex items-center justify-center w-full h-full cursor-pointer"
        @click="playing = !playing">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-pause-fill w-16 h-16 text-white invisible" viewBox="0 0 16 16">
            <path
                d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5" />
        </svg>
    </div>

    {{-- mute  --}}

    <div class="absolute z-[100] bottom-2 right-2 m-4 bg-gray-900 text-white rounded-lg p-1 cursor-pointer">

        {{-- mute --}}

        <svg x-cloak x-show="!muted" @click="$refs.player.muted=true;muted=true" xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" class="bi bi-volume-mute-fill w-h w-4"
            viewBox="0 0 16 16">
            <path d="M9 4a.5.5 0 0 0-.812-.39L5.825 5.5H3.5A.5.5 0 0 0 3 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 9 12zm3.025 4a4.5 4.5 0 0 1-1.318 3.182L10 10.475A3.5 3.5 0 0 0 11.025 8 3.5 3.5 0 0 0 10 5.525l.707-.707A4.5 4.5 0 0 1 12.025 8"/>
        </svg>


        <svg x-show="muted" @click="$refs.player.muted=false;muted=false" xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" class="bi bi-volume-off-fill w-4 h-4" viewBox="0 0 16 16">
            <path d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06m7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0"/>
        </svg>

        {{-- unmute  --}}
    </div>
