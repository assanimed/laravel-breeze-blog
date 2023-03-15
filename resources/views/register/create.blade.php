<x-layout>
    <section class="px-6 py-8">
        <main class="mx-auto max-w-xl">
            <h1 class="my-10 text-2xl text-bold text-center text-indigo-400 text-xl">Create Account</h1>
            <form action="/register" method="post">
                @csrf
                <x-form-input label="Full Name" id="name" name="name" required />
                <x-form-input label="Username" id="username" name="username" required />
                <x-form-input label="E-mail" id="email" name="email" type="email" required />
                <x-form-input label="Password" id="password" name="password" type="password" required />
                <x-form-input label="Confirm Password" id="password_confirmation" name="password_confirmation"
                    type="password" required />
                <div class="mb-5">
                    <input class="px-12 py-3 text-xl bg-green-500 text-white rounded cursor-pointer" type="submit"
                        value="Create" name="submit" />
                </div>
            </form>
        </main>
    </section>
</x-layout>
