<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <center>
        {{-- <x-success-status class="mb-4" :status="session('message')" /> --}}
        {{--  <x-validation-errors class="mb-4" :errors="$errors" />  --}}
    </center>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ url('updatestudent/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="$student->name" autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="$student->email" autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>


                        <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="phone" name="phone"
                                :value="$student->phone" autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <br>

                        <div>
                            <center>
                                <x-primary-button class="ms-3">
                                    {{ __('update') }}
                                </x-primary-button>
                            </center>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--  @include('student.index')  --}}
</x-app-layout>