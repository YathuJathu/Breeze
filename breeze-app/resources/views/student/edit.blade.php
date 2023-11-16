<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Name-->
                        <div>
                            <x-input-label for="name" :value="__('name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        

                        <!-- Email -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        
                            </x-primary-button>
                        </div>
                        <!-- Phone -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('phone')" />

                            <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone"
                                required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
