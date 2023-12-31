<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        <h4 class="font-black text-4xl">تسجيل دخول</h4>

        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-2 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <x-authentication-card-logo />

            <div>
                <x-label for="email" value="{{ __('البريد الكتروني') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('الرقم السري') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('تذكرني ') }}</span>
                    <x-checkbox id="remember_me" name="remember" />
                </label>
            </div>

            <div class="flex items-center mt-4 ">

                <x-button class="ml-4">
                    {{ __('تسجيل دخول') }}
                </x-button>


                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('نسيت كلمة السر?') }}
                    </a>
                @endif


            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
