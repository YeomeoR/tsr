@extends('layouts.master')


@section('auth')
<form class="h-screen max-w-lg mt-12 flex justify-center items-center flex-col" method="POST" action="/users">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6 items-center p-48 shadow-2xl">
        <h2 class="text-xl text-blue-400 font-bold mb-12">The Student Room Login</h2>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-username">
                Username
            </label>
            <input name="username" value="{{ old('username') }}" class="block bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-12 leading-tight focus:bg-white" id="grid-username" type="text" placeholder="username">
            @error('username')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Password
            </label>
            <input name="password" class="appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="password" placeholder="password">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-5" for="grid-last-name">
                Confirm Password
            </label>
            <input name="password_confirmation" class="appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="password" placeholder="password">
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

    </div>
    <div class="">
        <button class="shadow bg-pink-500 hover:bg-pink-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 ml-8 rounded" type="submit">
            Register
        </button>
        <p>Already a user?<a href="/"> login</a></p>
    </div>

</form>


@endsection
