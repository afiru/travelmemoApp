<x-guest-layout>
    <div class="wapper loginFormWap">
        <h1 class="h1LoinLogo">
            <img loading="lazy" src="img/Logo.png" alt="" width="168" height="152" />
        </h1>

        <div class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="formRgister">
                    <x-jet-input id="name" class="w-full formLoginInput" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="ユーザー名"/>
                </div>

                <div class="formRgister formRgister02">
                    <x-jet-input id="email" class="w-full formLoginInput" type="email" name="email" :value="old('email')" required placeholder="メールアドレス"/>
                </div>

                <div class="formRgister formRgister02">
                    <x-jet-input id="password" class="w-full formLoginInput" type="password" name="password" required autocomplete="new-password" placeholder="パスワード"/>
                </div>

                <div class="formRgister formRgister02">
                    <x-jet-input id="password_confirmation" class="w-full formLoginInput" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="パスワード確認用" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-between loginFormChackButton">
                    <a class="buttonLinkFormRe" href="{{ route('login') }}">
                        ログイン
                    </a>
                    <button class="buttonLogin" type="submit" >アカウント作成</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
