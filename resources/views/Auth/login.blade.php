<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<main class="grid place-items-center min-h-screen">
    <section class="bg-white rounded-xl shadow w-[375px] border mx-auto p-8">
        <h2 class="text-4xl font-semibold">Login</h2>
        <form action="{{ route('login') }}" method="post" class="mt-5">
            @csrf
            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                <input class="border border-gray-400 p-2 w-full" name="email" type="email" id="email" required>
                @error('email')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
            </div>
            <div>
                <button type="submit"
                        class="rounded text-white bg-gray-800 px-4 py-2 focus:ring-1 focus:ring-gray-600 hover:bg-gray-700">
                    Login
                </button>
            </div>
        </form>
    </section>
</main>
</body>
</html>
