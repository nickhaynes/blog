<x-layout>
    <article>

        <h1>
            {{ $post->title }}
        </h1>

        <div>
            {!! $post->body !!}
        </div>

    </article>

    <x-button>
        <a href="/">Go Back</a>
    </x-button>
</x-layout>
