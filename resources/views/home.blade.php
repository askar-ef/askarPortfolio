@extends('layouts.navbar')

@section("container")
{{-- profile --}}

<div class="max-w-screen-xl mx-auto flex flex-col sm:flex-row items-center p-4" >
    <div class="sm:w-4/12 w-8/12  px-2 sm:px-8">
        <img src="https://www.epicdope.com/wp-content/uploads/2020/08/Ray-1-1.jpg" alt="" class="rounded-3xl">
    </div>
    <div class="w-8/12 sm:p-6 md:p-8 lg:p-10">
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-semibold">"Every skill is learnable, but what were you born for?"</h1>
    </div>    
</div>

{{-- card --}}
<div class="p-4">
<div class="max-w-screen-xl mx-auto grid mb-4 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-6 md:grid-cols-2">
    {{-- satu --}}
    <div class="flex flex-col text-5xl text-gray-900 hover:text-qw-600 transition-all duration-1000 items-center justify-center p-4 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700" style="background-image: url('/images/blue_1.png')">
        <blockquote class="max-w-2xl mx-auto mb-2 lg:mb-2 dark:text-gray-400">
            <h3 class="mt-2 font-extrabold  dark:text-white">Dive Deeper</h3>
            <p class="my-2 text-lg text-white">If you care for your time, I hands down would go with this."</p>
        </blockquote>
    </div>

    {{-- dua --}}
    <div class="flex flex-col text-5xl text-gray-900 hover:text-blue-600 transition-all duration-1000 items-center justify-center p-4 text-center bg-white border-b border-gray-200 md:border-r dark:bg-gray-800 dark:border-gray-700" style="background-image: url('/images/blue_2.png')">
        <blockquote class="max-w-2xl mx-auto mb-2 lg:mb-2 dark:text-gray-400">
            <h3 class="mt-2 font-extrabold  dark:text-white">Life Events</h3>
            <p class="my-2 text-lg text-white">If you care for your time, I hands down would go with this."</p>
        </blockquote>
    </div>

    {{-- tiga --}}
    <div class="md:rounded-bl-lg flex flex-col text-5xl text-gray-900 hover:text-blue-600 transition-all duration-1000 items-center justify-center p-4 text-center bg-white border-b border-gray-200 md:rounded-t-none md:border-r dark:bg-gray-800 dark:border-gray-700" style="background-image: url('/images/blue_3.png')">
        <blockquote class="max-w-2xl mx-auto mb-2 lg:mb-2 dark:text-gray-400">
            <h3 class="mt-2 font-extrabold  dark:text-white">Diverse Undertakings</h3>
            <p class="my-2 text-lg text-white">If you care for your time, I hands down would go with this."</p>
        </blockquote>
    </div>

    {{-- empat --}}
    <div class="rounded-b-lg flex flex-col text-5xl text-gray-900 hover:text-blue-600 transition-all duration-1000 items-center justify-center p-4 text-center bg-white border-b border-gray-200 md:rounded-t-none md:border-r dark:bg-gray-800 dark:border-gray-700" style="background-image: url('/images/blue_4.png')">
        <blockquote class="max-w-2xl mx-auto mb-2 lg:mb-2 dark:text-gray-400">
            <h3 class="mt-2 font-extrabold  dark:text-white">Digital Contacts</h3>
            <p class="my-2 text-lg text-white">If you care for your time, I hands down would go with this."</p>
        </blockquote>
    </div>
</div>

<div class="text-center w-full">
    <p>Developed use <span class="font-bold">Laravel</span> with <span class="font-bold">TailwindCSS</span> and Hosted on <span class="font-bold">Vercel</span></p>
</div>
@endsection