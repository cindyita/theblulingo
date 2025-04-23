<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="
                        rounded-xl 
                        dark:bg-[#2d103a] 
                        border-[#d27ef2] 
                        dark:border-[#b666d2] 
                        text-[#d27ef2] 
                        focus:ring-[#d27ef2] 
                        dark:focus:ring-[#d27ef2] 
                        focus:ring-2 
                        dark:focus:ring-offset-gray-900 
                        shadow-sm 
                        transition 
                        duration-150 
                        ease-in-out
                    " 
                    name="remember"
                    />
                    <span class="ms-2 text-sm text-gray-700 dark:text-gray-200">
                    {{ __('Remember me') }}
                    </span>
            </label>
        </div>

        <div class="flex items-center mt-3 flex-col gap-0">
            <div class="flex justify-between w-[100%]">
                <div>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 
                        rounded-md dark:focus:ring-[#d27ef2] " href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <div>
                    @if (Route::has('register'))
                        <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 
                        rounded-md dark:focus:ring-[#d27ef2]" href="{{ route('register') }}">
                            {{ __('Register now') }}
                        </a>
                    @endif
                </div>
            </div>    
            <div>
                <x-primary-button class="mt-4 mb-1">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
