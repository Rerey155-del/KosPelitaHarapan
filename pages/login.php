<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <section>
        <div class="relative">
            <img src="/KosPelitaHarapan/assets/avatar2.png" alt="Decoration"
                class="absolute object-cover" style="width: 27rem;">
            <div class="min-h-screen grid grid-cols-2 gap-x-16 justify-center" style="padding: 12rem; padding-top:5rem">
                <div class="border border-gray-200 rounded-lg p-8 bg-white shadow-md">
                    <form data-aos="zoom-in-right" action="/auth/login" method="POST" class="w-96 flex flex-col justify-center items-center">
                        @csrf
                        <h1 class="font-bold text-black text-2xl pb-8">Login</h1>
                        <p>Email</p>
                        <input type="email" name="email" class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500" placeholder="Email" required>
                        <p>Password</p>
                        <input type="password" name="password" class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500" placeholder="Password" required>

                        <button type="submit"
                            class="w-full h-12 bg-red-500 text-white text-sm font-medium rounded-lg hover:bg-red-600 transition mb-3">
                            Login
                        </button>

                        <div class="text-right mb-5">
                            <a href="#" class="text-sm text-red-500 hover:underline">Forgot Password?</a>
                        </div>
                        <p class="text-center text-sm">
                            Don't have an account?
                            <a href="/register" class="text-red-500 hover:underline">Create your account</a>
                        </p>
                       
                    </form>
                </div>
                <div data-aos="fade-in-right">
                    <img src="/KosPelitaHarapan/assets/Avatar.png" class="h-[40.1rem]">
                </div>
            </div>
        </div>
    </section>
</body>

</html>