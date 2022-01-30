<x-app-layout>
    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        <div class="text-center">
            <h4 class="font-semibold text-2xl">{{ $post->created_at->format('d/m/Y') }}</h4>
            <h2 class="font-semibold text-4xl">{{ $post->title }}</h2>
        </div>
        <div class="divide-y divide-gray-200 dark:divide-gray-700">
            <div class="mt-4">
                <p>{{ $post->body }}</p>
                <div class="space-x-2">
                    <a class="font-semibold text-blue-600" href="{{ route('post.edit', $post->uuid) }}">Edit</a>
                    <form class="inline" method="post" action="{{ route('post.delete', $post->uuid) }}">
                        @method('delete')
                        @csrf
                        <button  class="font-semibold text-blue-600 border-none" type="submit">Delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
