<x-layouts.app>
    <x-slot name="header">
        {{ __('プロフィール編集') }}
    </x-slot>

    <div>
        <x-utils.frame>

            <form method="POST" action="{{ route('user.update', ['user' => $user]) }}" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                @method('PUT')

                    <!-- Name -->
                    <div>
                        <x-utils.forms.label for="name" :value="__('表示名')" />

                        <x-utils.forms.input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div>
                        <x-utils.forms.label for="email" :value="__('メールアドレス')" />

                        <x-utils.forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email" required />
                    </div>

                    <!-- Image -->
                    <div>
                        <x-utils.forms.label for="image" :value="__('画像')" />

                        <div class="flex mt-1 gap-4 items-center">
                            <x-domains.user.thumbnail :thumbnail="$user->thumbnail" />
                            <x-utils.forms.file id="image" accept="image/*" name="image" />
                        </div>
                    </div>

                    <div class="flex flex-row-reverse">
                        <x-utils.forms.button message="更新する" />
                    </div>
            </form>

        </x-utils.frame>
    </div>
</x-layouts.app>
