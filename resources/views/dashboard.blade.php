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
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div>
        <h1 class="font-bold text-5xl text-black">What we do</h1>
        <br>
        <p class="text-xl text-gray-800"><a class="font-bold text-3xl text-gray-800">H</a>ere we assist victims or relatives to victims report cases and get help.We help you get assistance from professionals,for example,psychologists who will organize a check-up for you,lawyers who will help in fighting for your case in case reported,people who have experienced such cases and will encourage you to not do offensive things like suicide.</p>
        <br>
        <p class="text-xl text-gray-800">Another good thing with us is that your information is safe ,the information is between you and us other victims who come to lay their cases are not able to see or acces your information.</p>
    </div>
</x-app-layout>
