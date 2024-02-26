@extends('applicant.html.index')
@section('body')
    <div class="h-screen">

        {{-- Rounded with Border --}}

        <div class="mx-auto text-center mt-[3rem] bg-white opacity-90 rounded-3xl px-4 pt-5 shadow-lg justify-around w-4/12 ">
            <h1 class="font-bold text-xl mb-3">REGISTER</h1>
            <form class="grid text-lg" action="/applicant/register" method="POST">
                @csrf
                <label class="text-start font-semibold ">First Name</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="text"
                    name="first_name"
                    value="{{@old('first_name')}}">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('first_name')
                            {{$message}}
                        @enderror
                    </p>
                <label class="text-start font-semibold ">Middle Name</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="text"
                    name="middle_name"
                    value="{{@old('middle_name')}}">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('middle_name')
                            {{$message}}
                        @enderror
                    </p>
                <label class="text-start font-semibold ">Last Name</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="text"
                    name="last_name"
                    value="{{@old('last_name')}}">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('last_name')
                            {{$message}}
                        @enderror
                    </p>
                <div class="flex justify-evenly py-2">
                    <div>
                        @php
                            $suffixes = ['none', 'Jr', 'II', 'III', 'IV', 'V'];
                        @endphp
                        <label class="text-start font-semibold ">Suffix</label>
                        <select class="border py-1 rounded-full px-3 w-fit text-center" name="suffix_name" id="selectedSuffixName" title="Suffix">
                            @foreach ($suffixes as $item)
                                @if ($item != @old('suffix_name'))
                                    <option value="{{$item}}">{{$item}}</option>
                                @else
                                    <option selected value="{{$item}}">{{$item}}</option>
                                @endif
                            @endforeach
                        </select>
                        <p class="text-red-500 px-2 text-sm mt-2">
                            @error('suffix_name')
                                {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div>
                        <label class="text-start font-semibold ">Sex</label>
                        <input type="text" name="sex" id="sex" class="hidden">
                        @php
                            $sexes = ['male', 'female'];
                        @endphp
                        <select class="border py-1 rounded-full px-3 w-fit text-center" name="sex" id="selectedSex" onchange="setSex()">
                            <option disabled selected value></option>
                            @foreach ($sexes as $item)
                                @if ($item != @old('sex'))
                                    <option value="{{$item}}">{{$item}}</option>
                                @else
                                    <option selected value="{{$item}}">{{$item}}</option>
                                @endif
                            @endforeach
                        </select>
                        <p class="text-red-500 px-2 text-sm mt-2">
                            @error('sex')
                                {{$message}}
                            @enderror
                        </p>
                    </div>
                </div>
                <label class="text-start font-semibold ">Birthday</label>
                <div class="grid grid-cols-3 gap-1">

                    <div>Month</div>
                    <div>Day</div>
                    <div>Year</div>
                    <input type="text" name="month" id="month" class="hidden">
                    <input type="text" name="day" id="day" class="hidden">
                    <input type="text" name="year" id="year" class="hidden">
                    {{-------------------}}

                    {{-- Month --}}
                    <div>
                        @php
                            $BDMonths = ['January', 'February', 'March', 'April', 'May', 'June', 
                                        'July', 'August', 'September', 'October', 'November', 'December'];
                            $BDMonthsNum = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
                            $monthIndex = 0;
                        @endphp
                        <select class="border rounded-full p-2 px-3" value="{{@old('month')}}" name="month" id="selectedMonth" onchange="setMonth()">
                            <option disabled selected value>----------</option>
                            @foreach ($BDMonthsNum as $item)
                                @if ($item != @old('month'))
                                    <option value="{{$item}}">{{$BDMonths[$monthIndex]}}</option>
                                @else
                                    <option selected value="{{$item}}">{{$BDMonths[$monthIndex]}}</option>
                                @endif
                                @php
                                    $monthIndex++;
                                @endphp
                            @endforeach
                        </select>
                        <p class="text-red-500 px-2 text-sm mt-2">
                            @error('month')
                                {{$message}}
                            @enderror
                        </p>
                    </div>
                    {{-- Day --}}
                    <div>
                        <select class="border rounded-full p-2 px-3" value="{{@old('day')}}" name="day" id="selectedDay" onchange="setDay()">
                            <option disabled selected value>--</option>
                            @for ($i = 1; $i <= 31; $i++)
                                @if ($i != (int)@old('day'))
                                    <option value="{{$i}}">{{$i}}</option>
                                @else
                                    <option selected value="{{$i}}">{{$i}}</option>
                                @endif
                            @endfor
                        </select>
                        <p class="text-red-500 px-2 text-sm mt-2">
                            @error('day')
                                {{$message}}
                            @enderror
                        </p>
                    </div>
                    {{-- Year --}}
                    <div>
                        <input
                            class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                            type="number" max="2099" min="1900"
                            name="year"
                            value="{{@old('year')}}">
                            <p class="text-red-500 px-2 text-sm mt-2">
                                @error('year')
                                    {{$message}}
                                @enderror
                            </p>
                    </div>
                </div>

                <label class="text-start font-semibold ">Email</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="email"
                    name="email"
                    value="{{@old('email')}}">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('email')
                            {{$message}}
                        @enderror
                    </p>
                <label class="text-start font-semibold">Password</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="password"
                    name="password">
                    <p class="text-red-500 px-2 text-sm mt-2">
                        @error('password')
                            {{$message}}
                            Password must contain atleat one Uppercase, Lowercase, Number and Special Character
                        @enderror
                    </p>

                <button type="submit" class="mt-3 bg-navyblue text-white rounded-lg p-1 font-semibold hover:shadow-md">Register</button>

                <div class="my-3">
                    <hr>
                </div>
                <div class="grid">
                    Already have an account? <a href="/applicant/login" class="underline font-semibold cursor-pointer">Login</a>.
                </div>
            </form>
        </div>
    </div>

@endsection
