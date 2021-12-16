<x-guest-layout>
    <div class="wapper loginFormWap">
        <h1 class="h1LoinLogo">
            <img loading="lazy" src="img/Logo.png" alt="" width="168" height="152" />
        </h1>

        <div class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="loginFormInput">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="loginFormInput loginFormInput02">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="display_flex_center  mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    <button class="buttonLogin" type="submit" >ログイン</button>
                </div>

                <div class="display_flex_center mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="/register">会員登録</a>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-4" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif


                </div>

            </form>
        </div>
    </div>
</x-guest-layout>


