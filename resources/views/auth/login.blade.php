<x-layouts.app type="guest">
    <!-- Session Status -->
    <x-utils.forms.session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-utils.forms.validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
    @csrf

        <!-- Email Address -->
        <div>
            <x-utils.forms.label for="email" :value="__('メールアドレス')" />

            <x-utils.forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <!-- Password -->
        <div>
            <x-utils.forms.label for="password" :value="__('パスワード')" />

            <x-utils.forms.input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     required autocomplete="current-password" />
        </div>

        <!-- Remember Me -->
        <div>
            <x-utils.forms.label for="remember_me" class="inline-flex items-center">
                <x-utils.forms.checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('ログインしたままにする') }}</span>
            </x-utils.forms.label>
        </div>

        <div class="flex items-center gap-4 flex-col md:flex-row-reverse">
            <x-utils.forms.button :message="__('ログイン')" />
            <x-utils.forms.a-button :href="route('register')" :message="__('未登録の方')" type="sub" />
            <x-utils.forms.a-button :href="route('password.request')" :message="__('パスワードを忘れた方')" type="sub" />
        </div>
    </form>
</x-layouts.app>
