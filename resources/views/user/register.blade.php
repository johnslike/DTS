@include('../partials/header')

    <header class="max-w-lg mx-auto">
        <a href="">
            <h1 class="text-4xl font-bold text-white text-center">
                {{-- {{$title}} --}}
                Register
            </h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">

        <section>
            <h3 class="font-bold text-xl">
                Welcome to Document Tracking System
                <p class="text-gray-600 text-sm pt-2">Sign in to your account <a href="/login" class="text-blue-500 text-bold">here</a></p>
            </h3>
        </section>
        <section class="mt-10">
            <form action="/store" method="POST" class="flex flex-col">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray 700 text-sm font-bold mb-2 ml-3">Name</label>
                    <input type="text" name="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value="{{old('name')}}">
                        @error('name')
                            <p class="text-red-500 text-xs p-2">
                                {{$message}}
                            </p>
                        @enderror

                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray 700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value="{{old('email')}}">
                        @error('email')
                        <p class="text-red-500 text-xs p-2">
                            {{$message}}
                        </p>
                        @enderror

                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password" class="block text-gray 700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('password')
                        <p class="text-red-500 text-xs p-2">
                            {{$message}}
                        </p>
                        @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password_confirmation" class="block text-gray 700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs p-2">
                            {{$message}}
                        </p>
                        @enderror
                </div>
                <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl tansition duration-200 mb-2" type="submit">Sign up and Login</button>

            </form>
        </section>
    </main>

@include('../partials/footer')