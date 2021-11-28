@props(['article' => null])

@if ($article)
    <x-utils.frame {{ $attributes->merge(['class' => 'flex flex-col gap-2']) }} :padding="false">

        <x-utils.forms.a href="{{ route('article.show', ['article' => $article]) }}">
            <img src="{{ $article->thumbnail }}" alt="thumbnail" class="block w-full h-48 sm:rounded-lg sm:rounded-b-none object-cover">
        </x-utils.forms.a>
        <div class="px-4 py-2 flex flex-col gap-2">
            <h2 class="font-bold text-2xl text-gray-800 tracking-normal break-all line-clamp-2 sm:h-16">
                <x-utils.forms.a href="{{ route('article.show', ['article' => $article]) }}">
                    {{ $article->title }}
                </x-utils.forms.a>
            </h2>

            <p class="text-sm text-gray-700 mr-1 line-clamp-3 sm:h-14">
                {{ $article->description }}
            </p>
            <div class="flex flex-row-reverse items-center justify-between mx-6 sm:h-8">
                @if ($article->comments->count())
                    <x-utils.forms.a href="{{ route('article.show', ['article' => $article]) }}">
                        <x-domains.communication.communication-count count="{{ $article->comments->count() }}"/>
                    </x-utils.forms.a>
                @endif
            </div>
            <x-domains.user.created-user :user="$article->user" :createdAt="$article->display_created_at" class="mb-4" />
        </div>
    </x-utils.frame>
@endif
