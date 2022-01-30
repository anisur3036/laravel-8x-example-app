<x-app-layout>
    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        <x-top-heading title="Latest">A blog created with Laravel and Tailwind.css</x-top-heading>
        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach($posts as $post)
                <li class="py-12">
                    <article>
                        <div class="space-y-2 xl:grid xl:grid-cols-4 xl:space-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time
                                        dateTime="2021-08-07T15:32:14.000Z">{{ $post->created_at->format('m/d/Y') }}</time>
                                </dd>
                                <dt class="sr-only">Author</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time
                                        dateTime="2021-08-07T15:32:14.000Z">{{ $post->user->name }}</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6">
                                    <div><h2 class="text-2xl font-bold leading-8 tracking-tight"><a
                                                class="text-gray-900 dark:text-gray-100"
                                                href="{{ route('post.show', $post->uuid) }}">{{ $post->title }}</a></h2>
                                        <div class="flex flex-wrap">
                                            <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                               href="/tags/next-js">next-js</a>
                                            <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                               href="/tags/tailwind">tailwind</a>
                                            <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                               href="/tags/guide">guide</a>
                                        </div>
                                    </div>
                                    <div class="prose text-gray-500 max-w-none dark:text-gray-400">
                                        {{ $post->body }}
                                    </div>
                                </div>
                                <div class="text-base font-medium leading-6"><a
                                        class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                        aria-label="Read &quot;New features in v1&quot;"
                                        href="{{ route('post.show', $post->uuid) }}">Read more →</a></div>
                            </div>
                        </div>
                    </article>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="flex justify-end text-base font-medium leading-6">
        {{ $posts->links() }}
    </div>
    <div class="flex items-center justify-center pt-4">
        <div>
            <div class="pb-1 text-lg font-semibold text-gray-800 dark:text-gray-100">Subscribe to the
                newsletter
            </div>
            <form class="flex flex-col sm:flex-row">
                <div><label class="sr-only" for="email-input">Email address</label>
                    <input type="email"
                           autoComplete="email"
                           class="px-4 rounded-md w-72 dark:bg-black focus:outline-none focus:ring-2 focus:border-transparent focus:ring-primary-600"
                           id="email-input"
                           name="email"
                           placeholder="Enter your email"
                           required=""/>
                </div>
                <div class="flex w-full mt-2 rounded-md shadow-sm sm:mt-0 sm:ml-3">
                    <button
                        class="py-2 sm:py-0 w-full bg-primary-500 px-4 rounded-md font-medium text-white hover:bg-primary-700 dark:hover:bg-primary-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 dark:ring-offset-black"
                        type="submit">Sign up
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
