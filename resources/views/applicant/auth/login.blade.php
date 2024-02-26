@extends('applicant.html.index')
@section('body')
    <div class="h-screen">
        {{-- Rounded with Border --}}

        <div
            class="mx-auto text-center mt-[9rem] bg-white opacity-90 rounded-3xl px-4 pt-5 shadow-lg justify-around w-4/12 ">
            <h1 class="font-bold text-xl mb-3">LOGIN</h1>
            <form class="grid text-lg" action="/applicant/login" method="POST">
                @csrf
                <label class="text-start font-semibold ">Email</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="email"
                    name="email"
                    value="{{@old('email')}}">
                @error('email')
                    <span role="alert" class="text-rose-500">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label class="text-start font-semibold">Password</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="password"
                    name="password">
                <button type="submit"
                    class=" mt-3 bg-navyblue text-white rounded-lg p-1 font-semibold hover:shadow-md">Login</button>
                <div class="mt-3 cursor-pointer text-navyblue">
                    Forgot password?
                </div>
                <div class="my-3">
                    <hr>
                </div>
                <div class="grid">
                    Don't have an account? <a href="/applicant/register" class="underline font-semibold cursor-pointer">Create Account</a>.
                </div>
            </form>
        </div>
    </div>
@endsection
