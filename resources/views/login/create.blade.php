<x-layout>

    <section class="px-6 py-8">
        <main class="mx-auto max-w-xl">
            <h1 class="my-10 text-2xl text-bold underline decoration-wavy text-indigo-400 text-xl">Login</h1>
            <form action="/login" method="post">
                @csrf
                <x-form-input label="Username" id="username" name="username" required />
                <x-form-input label="Password" id="password" name="password" type="password" required />
                <div class="mb-5">
                    <input class="px-12 py-3 text-xl bg-green-500 text-white rounded cursor-pointer" type="submit"
                        value="Login" name="login" />
                </div>
            </form>

            @if ($errors->has('message'))
                <div 
                    {{-- x-data="{show: true}"
                    x-init="setTimeout(() => show = false, 3000)"
                    x-show="show" --}}
                class="bg-red-500 font-semibold px-2 py-2 rounded-sm text-white">
                    {{ $errors->first('message') }}
                </div>
            @endif
        </main>
    </section>


</x-layout>