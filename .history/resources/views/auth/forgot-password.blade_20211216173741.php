<x-guest-layout>
    <div class="wapper loginFormWap">
        <h1 class="h1LoinLogo">
            <img loading="lazy" src="img/Logo.png" alt="" width="168" height="152" />
        </h1>

        <div class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt">
            <p class="txtForgotPass">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>
            <div class="formForgotPass">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="block">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button>
                            {{ __('Email Password Reset Link') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-guest-layout>
