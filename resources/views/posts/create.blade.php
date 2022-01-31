<x-app-layout>
    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="flex flex-col">
                <label class="font-bold text-xl" for="title">Title</label>
                <input
                    class="border rounded px-2 py-1"
                    type="text"
                    name="title"
                    placeholder="Post title">
            </div>
            <div class="mt-2 flex flex-col">
                <label  class="font-bold text-xl" for="body">Body</label>
                <textarea
                    class="border rounded px-2 py-1"
                    name="body"
                    id="body"
                    cols="30"
                    rows="10">
                </textarea>
            </div>
            <div class="mt-2 flex space-x-2">
                <button class="px-4 py-2 rounded text-white bg-gray-700" type="submit">Save</button>
                <a class="px-4 py-2 rounded text-white bg-gray-700" href="{{ route('post.index') }}">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
