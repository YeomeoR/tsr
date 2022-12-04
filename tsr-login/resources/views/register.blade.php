@extends('layouts.master')
{{-- login form --}}
@section('login')

    <div class="">

        <form class="" method="post" action="">
            @csrf
            <div class="">
                <div class="">
                    <label class="" for="username">
                        Username
                    </label>
                    <input name="username" class="" id="grid-username" type="text" placeholder="yeomeo">
                </div>
            </div>
            <div class="">
                <div class="">
                    <label class="" for="grid-password">
                       Password
                    </label>
                    <input name="password" class="" id="password" type="password">

                </div>
            </div>


            <div class="">
                <div class="">
                    <button class="" type="submit">
                        Login
                    </button>
                </div>

            </div>
        </form>
    </div>

@endsection



