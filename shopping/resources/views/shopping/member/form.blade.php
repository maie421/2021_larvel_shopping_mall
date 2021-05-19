<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('member_register') }}
        </h2>
    </x-slot>
    @include('notify::messages')
    <x:notify-messages />
    <form method="post" action="{{ url('dashboard/member') }}">
        @csrf
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <input id="name"  class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <input id="email"  class="block mt-1 w-full" type="text" name="email" required/>
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <input id="password"  type="password" class="block mt-1 w-full" type="text" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <input id="password_confirmation" type="password" class="block mt-1 w-full" type="text" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
