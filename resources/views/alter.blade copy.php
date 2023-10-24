@extends('layouts.navbar')

@section("container")

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>

<div class="max-w-screen-xl container mx-auto mt-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
        <div class="grid grid-cols-3 gap-0   md:col-span-3 bg-gray-300 p-12 rounded-lg">
            <!-- Baris pertama, digabung menjadi 1 div -->
            <div id="satu" class="pr-4 col-span-2">
                <h1 class="font-semibold text-4xl pb-3">
                    Hello! 👋🏻
                </h1>
                <p class="text-lg" >
                    This is my personal website, not dedicated to any specific project as a software engineer. I'm a generalist, and here, I'll share what I'm passionate about. Enjoy!
                </p>
                <p class="text-md text-gray-700 pb-20" >-Askar</p>
            </div>
            <div id="dua" class="">
                <p>
                    Waduh ini mending diisi apa ya
                </p>
            </div>
            <div></div>
            <div>
                <p class="text-right">YK, IND</p>
                <p class="text-right">Mon, 05.10 PM</p>
            </div>

        </div>
        <div class="bg-white p-4 rounded-lg justify-items-center">
            <!-- Kolom 1, Baris 2 -->
            <img class="max-h-44 mx" src="images/askaref_purple_logo.png" alt="">
        </div>
        <div class="bg-gray-200 hover:bg-askar-100 hover:text-askar-300 transition-all duration-200  px-12 py-20 rounded-lg text-4xl font-medium text-center">
            <!-- Kolom 2, Baris 2 -->
            Notes 📝
        </div>
        <div class="bg-gray-300 hover:bg-askar-100 hover:text-askar-300 transition-all duration-200  px-12 py-20 rounded-lg text-4xl font-medium text-center">
            <!-- Kolom 3, Baris 2 -->
            About 💼
        </div>
        <div class="bg-gray-400 hover:bg-askar-100 hover:text-askar-300 transition-all duration-200 px-12 py-20 rounded-lg text-4xl font-medium text-center">
            <!-- Kolom 1, Baris 3 -->
            Photos 📷
        </div>
        <div class="bg-gray-500 hover:bg-askar-100 hover:text-askar-300 transition-all duration-200 px-12 py-20 rounded-lg text-4xl font-medium text-center">
            <!-- Kolom 2, Baris 3 -->
            Experiences 💻
        </div>
        <div class="bg-gray-600 hover:bg-askar-100 hover:text-askar-300 transition-all duration-200 px-12 py-20 rounded-lg text-4xl font-medium text-center">
            <!-- Kolom 3, Baris 3 -->
            Contacts 📱
        </div>
    </div>
</div>

@endsection
