<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charSet="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Laravel Blog</title>
    <meta name="robots" content="follow, index"/>
    <meta name="description" content="A blog created with Next.js and Tailwind.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased text-black bg-white dark:bg-gray-900 dark:text-white">
<div id="app">
    <div class="max-w-3xl px-4 mx-auto sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="flex flex-col justify-between h-screen">
            <header class="flex items-center justify-between py-10">
                <div><a aria-label="TailwindBlog" href="/">
                        <div class="flex items-center justify-between">
                            <div class="mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="344.564 330.278 111.737 91.218" width="53.87" height="43.61">
                                    <defs>
                                        <linearGradient id="logo_svg__b" gradientUnits="userSpaceOnUse" x1="420.97"
                                                        y1="331.28" x2="420.97" y2="418.5">
                                            <stop style="stop-color:#06b6d4;stop-opacity:1" offset="0%"></stop>
                                            <stop style="stop-color:#67e8f9;stop-opacity:1" offset="100%"></stop>
                                        </linearGradient>
                                        <linearGradient id="logo_svg__d" gradientUnits="userSpaceOnUse" x1="377.89"
                                                        y1="331.28" x2="377.89" y2="418.5">
                                            <stop style="stop-color:#06b6d4;stop-opacity:1" offset="0%"></stop>
                                            <stop style="stop-color:#67e8f9;stop-opacity:1" offset="100%"></stop>
                                        </linearGradient>
                                        <path d="M453.3 331.28v28.57l-64.66 58.65v-30.08l64.66-57.14Z"
                                              id="logo_svg__a"></path>
                                        <path d="M410.23 331.28v28.57l-64.67 58.65v-30.08l64.67-57.14Z"
                                              id="logo_svg__c"></path>
                                    </defs>
                                    <use xlink:href="#logo_svg__a" fill="url(#logo_svg__b)"></use>
                                    <use xlink:href="#logo_svg__c" fill="url(#logo_svg__d)"></use>
                                </svg>
                            </div>
                            <div class="hidden h-6 text-2xl font-semibold sm:block">TailwindBlog</div>
                        </div>
                    </a></div>
                <div class="flex items-center text-base leading-5">
                    <div class="hidden sm:block"><a class="p-1 font-medium text-gray-900 sm:p-4 dark:text-gray-100"
                                                    href="/blog">Blog</a><a
                            class="p-1 font-medium text-gray-900 sm:p-4 dark:text-gray-100" href="/tags">Tags</a><a
                            class="p-1 font-medium text-gray-900 sm:p-4 dark:text-gray-100"
                            href="/projects">Projects</a><a
                            class="p-1 font-medium text-gray-900 sm:p-4 dark:text-gray-100" href="/about">About</a>
                    </div>
                    <div class="sm:hidden">
                        <button type="button" class="w-8 h-8 py-1 ml-1 mr-1 rounded" aria-label="Toggle Menu">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="text-gray-900 dark:text-gray-100">
                                <path fill-rule="evenodd"
                                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div
                            class="fixed w-full h-full top-24 right-0 bg-gray-200 dark:bg-gray-800 opacity-95 z-10 transform ease-in-out duration-300 translate-x-full">
                            <button type="button" aria-label="toggle modal"
                                    class="fixed w-full h-full cursor-auto focus:outline-none"></button>
                            <nav class="fixed h-full mt-8">
                                <div class="px-12 py-4"><a
                                        class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                                        href="/blog">Blog</a></div>
                                <div class="px-12 py-4"><a
                                        class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                                        href="/tags">Tags</a></div>
                                <div class="px-12 py-4"><a
                                        class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                                        href="/projects">Projects</a></div>
                                <div class="px-12 py-4"><a
                                        class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                                        href="/about">About</a></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <main class="mb-auto">
                {{ $slot }}
            </main>
            <footer>
                <div class="flex flex-col items-center mt-16">
                    <div class="flex mb-3 space-x-4"><a class="text-sm text-gray-500 transition hover:text-gray-600"
                                                        target="_blank" rel="noopener noreferrer"
                                                        href="mailto:address@yoursite.com"><span
                                class="sr-only">mail</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 class="fill-current text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 h-6 w-6">
                                <path
                                    d="M2.003 5.884 10 9.882l7.997-3.998A2 2 0 0 0 16 4H4a2 2 0 0 0-1.997 1.884z"></path>
                                <path d="m18 8.118-8 4-8-4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.118z"></path>
                            </svg>
                        </a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
                               rel="noopener noreferrer" href="https://github.com"><span class="sr-only">github</span>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                 class="fill-current text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 h-6 w-6">
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                            </svg>
                        </a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
                               rel="noopener noreferrer" href="https://facebook.com"><span
                                class="sr-only">facebook</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                 class="fill-current text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 h-6 w-6">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                            </svg>
                        </a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
                               rel="noopener noreferrer" href="https://youtube.com"><span class="sr-only">youtube</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                 class="fill-current text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 h-6 w-6">
                                <path
                                    d="M23.499 6.203a3.008 3.008 0 0 0-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 0 0-2.088 2.09A31.258 31.26 0 0 0 0 12.01a31.258 31.26 0 0 0 .523 5.785 3.008 3.008 0 0 0 2.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 0 0 2.089-2.09 31.258 31.26 0 0 0 .5-5.784 31.258 31.26 0 0 0-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
                            </svg>
                        </a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
                               rel="noopener noreferrer" href="https://www.linkedin.com"><span
                                class="sr-only">linkedin</span>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                 class="fill-current text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 h-6 w-6">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg>
                        </a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
                               rel="noopener noreferrer" href="https://twitter.com/Twitter"><span class="sr-only">twitter</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                 class="fill-current text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 h-6 w-6">
                                <path
                                    d="M23.953 4.57a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.06a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.936 4.936 0 0 0 4.604 3.417 9.867 9.867 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0 0 24 4.59z"></path>
                            </svg>
                        </a></div>
                    <div class="flex mb-2 space-x-2 text-sm text-gray-500 dark:text-gray-400">
                        <div>Tails Azimuth</div>
                        <div> ???</div>
                        <div>?? 2022</div>
                        <div> ???</div>
                        <a href="/">Next.js Starter Blog</a></div>
                    <div class="mb-8 text-sm text-gray-500 dark:text-gray-400"><a target="_blank"
                                                                                  rel="noopener noreferrer"
                                                                                  href="https://github.com/timlrx/tailwind-nextjs-starter-blog">Tailwind
                            Nextjs Theme</a></div>
                </div>
            </footer>
        </div>
    </div>
</div>
<script id="__NEXT_DATA__" type="application/json">
    {"props":{"pageProps":{"posts":[{"title":"New features in v1","date":"2021-08-07T15:32:14.000Z","lastmod":"2021-12-15","tags":["next-js","tailwind","guide"],"draft":false,"summary":"An overview of the new features released in v1 - code block copy, multiple authors, frontmatter layout and more","layout":"PostSimple","bibliography":"references-data.bib","slug":"new-features-in-v1"},{"title":"Introducing Multi-part Posts with Nested Routing","date":"2021-05-02T00:00:00.000Z","tags":["multi-author","next-js","feature"],"draft":false,"summary":"The blog template supports posts in nested sub-folders. This can be used to group posts of similar content e.g. a multi-part course. This post is itself an example of a nested route!","slug":"nested-route/introducing-multi-part-posts-with-nested-routing"},{"title":"Introducing Tailwind Nextjs Starter Blog","date":"2021-01-12T00:00:00.000Z","lastmod":"2021-12-22","tags":["next-js","tailwind","guide"],"draft":false,"summary":"Looking for a performant, out of the box template, with all the best in web technology to support your blogging needs? Checkout the Tailwind Nextjs Starter Blog template.","images":["/static/images/canada/mountains.jpg","/static/images/canada/toronto.jpg"],"authors":["default","sparrowhawk"],"slug":"introducing-tailwind-nextjs-starter-blog"},{"title":"Deriving the OLS Estimator","date":"2020-12-21T00:00:00.000Z","tags":["next js","math","ols"],"draft":false,"summary":"How to derive the OLS Estimator with matrix notation and a tour of math typesetting using markdown with the help of KaTeX.","slug":"deriving-ols-estimator"},{"title":"Images in Next.js","date":"2020-11-11T00:00:00.000Z","tags":["next js","guide"],"draft":false,"summary":"In this article we introduce adding images in the tailwind starter blog and the benefits and limitations of the next/image component.","authors":["sparrowhawk"],"slug":"guide-to-using-images-in-nextjs"},{"title":"Markdown Guide","date":"2019-10-11T00:00:00.000Z","tags":["github","guide"],"draft":false,"summary":"Markdown cheatsheet for all your blogging needs - headers, lists, images, tables and more! An illustrated guide based on GitHub Flavored Markdown.","slug":"github-markdown-guide"},{"title":"The Time Machine","date":"2018-08-15T00:00:00.000Z","tags":["writings","book","reflection"],"draft":false,"summary":"The Time Traveller (for so it will be convenient to speak of him) was expounding a recondite matter to us. His pale grey eyes shone and twinkled, and his usually pale face was flushed and animated...","slug":"the-time-machine"},{"title":"O Canada","date":"2017-07-15T00:00:00.000Z","tags":["holiday","canada","images"],"draft":false,"summary":"The scenic lands of Canada featuring maple leaves, snow-capped mountains, turquoise lakes and Toronto. Take in the sights in this photo gallery exhibition and see how easy it is to replicate with some MDX magic and tailwind classes.","slug":"pictures-of-canada"},{"title":"Sample .md file","date":"2016-03-08T00:00:00.000Z","tags":["markdown","code","features"],"draft":false,"summary":"Example of a markdown file with code blocks and syntax highlighting","slug":"code-sample"}]},"__N_SSG":true},"page":"/","query":{},"buildId":"2WfLk6HPV-_qzBlS9hGN5","isFallback":false,"gsp":true,"scriptLoader":[]}
</script>
</body>
</html>
