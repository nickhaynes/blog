<x-layout>
    <article>

        <h1>
            {{ $post->title }}
        </h1>

        <div>
            {!! $post->body !!}
        </div>

    </article>

    <x-button href="/">
        Go Back
    </x-button>
</x-layout>
