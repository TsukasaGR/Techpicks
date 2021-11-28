<x-layouts.app type="guest">
    <!-- Validation Errors -->
    <x-utils.forms.validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
    @csrf

        <!-- Name -->
        <div>
            <x-utils.forms.label for="name" :value="__('表示名')" />

            <x-utils.forms.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
        </div>

        <!-- Email Address -->
        <div>
            <x-utils.forms.label for="email" :value="__('メールアドレス')" />

            <x-utils.forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div>
            <x-utils.forms.label for="password" :value="__('パスワード')" />

            <x-utils.forms.input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-utils.forms.label for="password_confirmation" :value="__('パスワード（確認）')" />

            <x-utils.forms.input id="password_confirmation" class="block mt-1 w-full"
                     type="password"
                     name="password_confirmation" required />
        </div>

        <div class="flex items-center gap-4 flex-col md:flex-row-reverse">
            <x-utils.forms.button :message="__('登録')" />
            <x-utils.forms.a-button :href="route('login')" :message="__('登録済みの方')" type="sub"/>
        </div>
    </form>
</x-layouts.app>
