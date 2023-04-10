<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Chirp') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('chirps.update', $chirp) }}">
            @csrf
            @method('patch')
            <textarea
                name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message', $chirp->message) }}</textarea>
            @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif
            <div class="mt-4 space-x-2">
                <x-button>{{ __('Save') }}</x-button>
                <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>