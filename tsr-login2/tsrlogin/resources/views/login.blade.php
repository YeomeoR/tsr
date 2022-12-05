@extends('layouts.master')
{{-- login form --}}
@section('login')

    <form class="h-screen max-w-lg mt-12 flex justify-center items-center flex-col" method="post" action="">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6 items-center p-48 shadow-2xl">
            <h2 class="text-xl text-blue-400 font-bold mb-12">The Student Room Login</h2>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-username">
                    Username
                </label>
                <input name="username" class="block bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-12 leading-tight focus:bg-white" id="grid-username" type="text" placeholder="username">

                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Password
                </label>
                <input name="password" class="appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="password" placeholder="password">
            </div>

        </div>
        <div class="">
            <button class="shadow bg-pink-500 hover:bg-pink-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 ml-8 rounded" type="submit">
                Login
            </button>
        </div>

    </form>


@endsection



