{{-- Personal Information --}}
<h1 class="font-bold text-left p-4">I. Personal Information</h1>
<div>
    <form action="/applicant/saveInfo" method="POST">
        @csrf
        <div class="grid grid-cols-1">
            <div>
                {{-- Name --}}
                <h1 class="text-left ml-1 ">*Name</h1>
                <div class="grid grid-cols-4">
                    {{-- Surname --}}
                    <div>
                        <h1 class="font-semibold">Surname</h1>
                        <input class="input-default" type="text" name="last_name"
                            value="{{ $user->last_name }}" placeholder="Surname">
                    </div>
                    {{-- First Name --}}
                    <div>
                        <h1 class="font-semibold">First Name</h1>
                        <input class="input-default" type="text" name="first_name"
                            value="{{ $user->first_name }}" placeholder="First Name">
                    </div>
                    {{-- Middle Name --}}
                    <div>
                        <h1 class="font-semibold">Middle Name</h1>
                        <input class="input-default" type="text" name="middle_name"
                            value="{{ $user->middle_name }}" placeholder="Middle Name">
                    </div>
                    {{-- Suffix --}}
                    <div>
                        <h1 class="font-semibold">Suffix</h1>
                        <div>

                            <select class="input-default" name="suffix_name" id="selectedSuffixName"
                                title="Suffix">
                                @if ($user->suffix_name == 'none')
                                    <option value="none"></option>
                                    <option value="Jr.">Jr.</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                @endif
                                @if ($user->suffix_name == 'Jr')
                                    <option value="Jr">Jr.</option>
                                    <option value="none"></option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                @endif
                                @if ($user->suffix_name == 'II')
                                    <option value="II">II</option>
                                    <option value="none"></option>
                                    <option value="Jr">Jr.</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                @endif
                                @if ($user->suffix_name == 'III')
                                    <option value="III">III</option>
                                    <option value="none"></option>
                                    <option value="Jr">Jr.</option>
                                    <option value="II">II</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                @endif
                                @if ($user->suffix_name == 'IV')
                                    <option value="IV">IV</option>
                                    <option value="III">III</option>
                                    <option value="none"></option>
                                    <option value="Jr">Jr.</option>
                                    <option value="II">II</option>
                                    <option value="V">V</option>
                                @endif
                                @if ($user->suffix_name == 'V')
                                    <option value="V">V</option>
                                    <option value="IV">IV</option>
                                    <option value="III">III</option>
                                    <option value="none"></option>
                                    <option value="Jr">Jr.</option>
                                    <option value="II">II</option>
                                @endif
                            </select>

                        </div>
                    </div>
                </div>
                {{-- Address --}}
                <h1 class="text-left ml-1 ">*Address</h1>
                <div class="grid grid-cols-4">
                    {{-- Street --}}
                    <div>
                        <h1 class="font-semibold">Street</h1>
                        <input name="street" value="{{ $user->street }}" class="input-default"
                            type="text" placeholder="Street">
                    </div>
                    {{-- Barangay --}}
                    <div>
                        <h1 class="font-semibold">Barangay</h1>
                        <input name="barangay" value="{{ $user->barangay }}" class="input-default"
                            type="text" placeholder="Barangay">
                    </div>
                    {{-- City/Municipality --}}
                    <div>
                        <h1 class="font-semibold">City/Municipality</h1>
                        <input name="city_municipality" value="{{ $user->city_municipality }}"
                            class="input-default" type="text" placeholder="City/Municipality">
                    </div>
                    {{-- Province --}}
                    <div class="">
                        <h1 class="font-semibold ">Province</h1>
                        <div>
                            <div>
                                <input class="input-default rounded-xl" type="text"
                                    placeholder="Province" id="myInput" onkeyup="filterFunction()"
                                    name="province" value="{{ $user->province }}" autocomplete="off"
                                    onclick="myFunctionSearch()">
                            </div>
                            {{-- Search Modal --}}
                            <div class="relative">
                                {{-- Search Modal --}}
                                <div id="myDropdown"
                                    class="dropdown-content absolute shadow-lg bg-white hidden rounded-xl px-[4rem]">

                                    @foreach ($provinces as $item)
                                        <a href="#about" onclick="handleLinkClick(this)"
                                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{ $item->name }}</a>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- Birthdate --}}
            <h1 class="text-left ml-1">*Birthdate</h1>
            <div class="grid grid-cols-4">
                {{-- Birthday --}}
                <div>
                    <h1 class="font-semibold">Month</h1>
                    <input class="input-default" type="text" name="month"
                        value="{{ $user->month }}" placeholder="Birthday">
                </div>
                <div>
                    <h1 class="font-semibold">Day</h1>
                    <input class="input-default" type="text" name="day"
                        value="{{ $user->day }}" placeholder="Birthday">
                </div>
                <div>
                    <h1 class="font-semibold">Year</h1>
                    <input class="input-default" type="text" name="year"
                        value="{{ $user->year }}" placeholder="Birthday">
                </div>
            </div>
            {{-- Contact --}}
            <h1 class="text-left ml-1">*Contact</h1>
            <div class="grid grid-cols-4">
                {{-- Mobile No. --}}
                <div>
                    <h1 class="font-semibold">Mobile No.</h1>
                    <input class="input-default" type="text" name="contact_number"
                        value="{{ $user->contact_number }}" placeholder="Mobile No.">
                </div>
                {{-- Email --}}
                <div>
                    <h1 class="font-semibold grid">Email</h1>
                    <div>
                        <input class="input-default" type="email" name="email"
                            value="{{ $user->email }}" placeholder="Email">
                    </div>
                </div>
            </div>
            {{-- Others --}}
            <h1 class="text-left ml-1 ">*Others</h1>
            <div class="grid grid-cols-4">
                {{-- Sex --}}
                <div>
                    <h1 class="font-semibold">Sex</h1>
                    @if ($user->sex == 'female')
                        <select class="input-default" name="email" id="" title="Sex">
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                    @else
                        <select class="input-default" name="email" id="" title="Sex">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    @endif
                </div>
                {{-- Civil Status --}}
                <div>
                    <h1 class="font-semibold">Civil Status</h1>
                    <select class="input-default" name="civil_status" id=""
                        title="civilstatus">
                        @if ($user->civil_status == 'married')
                            <option value="married">Married</option>
                            <option value="single">Single</option>
                            <option value="widowed">Widowed</option>
                        @endif
                        @if ($user->civil_status == 'single')
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="widowed">Widowed</option>
                        @endif
                        @if ($user->civil_status == 'widowed')
                            <option value="widowed">Widowed</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                        @endif
                    </select>
                </div>
                {{-- Religion --}}
                <div>
                    <h1 class="font-semibold">Religion</h1>
                    <input class="input-default" type="text" name="religion"
                        value="{{ $user->religion }}" placeholder="Religion">
                </div>

                {{-- Ethnic Group --}}
                <div>
                    <h1 class="font-semibold">Ethnic Group</h1>
                    <input class="input-default" type="text" name="ethnic_group"
                        value="{{ $user->ethnic_group }}" placeholder="Ethnic Group">
                </div>
                {{-- Disability --}}
                <div>
                    <h1 class="font-semibold">Disability</h1>
                    <input class="input-default" type="text" name="disability"
                        value="{{ $user->disability }}" placeholder="Disability">
                </div>

            </div>

        </div>
        <div>
            <button type="submit"
                class="bg-navyblue hover:bg-navyblue/90 text-white px-3 hover:shadow-md hover:py-2.5 hover:px-4 hover:-mb-1   mt-3 duration-300 ease-out py-2 rounded-xl">Save
                Information</button>
        </div>
    </form>

    <div class="mt-3 ">
        <hr>
    </div>
</div>
