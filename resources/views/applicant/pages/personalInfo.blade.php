@extends('applicant.html.index')
@section('body')
    <x-applicant.notif_personal_info />
    <div class="h-screen">
        <div class="mx-auto text-center mt-[1rem] bg-gray-500 opacity-90 rounded-xl p-3  shadow-lg max-w-6xl mb-28">
            <div class="grid bg-gray-300 rounded-xl overflow-y-scroll p-3">

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
                                        @if ($user->civil_status == 'none' || $user->civil_status == '')
                                            <option value="none"></option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="widowed">Widowed</option>
                                        @endif
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


                <x-applicant.personal-info-component.education :educationalAttainment="$educationalAttainment" />
                <x-applicant.personal-info-component.experience :experience="$experience" />
                <x-applicant.personal-info-component.training :training="$training" />
                <x-applicant.personal-info-component.applicantEligibility :eligibility="$eligibility" />
                <x-applicant.personal-info-component.performance-rating :performanceRating="$performanceRating" />

                {{-- Outstanding Accomplishment --}}
                <h1 id="outstandingAccomplishmentHeads" class="font-bold text-left p-4 pt-12">VII. Outstanding Accomplishment</h1>
                <form action="/applicant/addOutstandingAccomplishment" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-5 gap-1">
                        <div>
                            <h1 class="font-semibold">Title</h1>
                            <input onkeyup="oaButtonDisabler()" id="oaAddTitle" class="input-default  w-full" type="text" name="title" placeholder="Title">
                            <label id="oaAddTitleLabel" class="text-red-500 hidden">Field is Required</label>
                        </div>
                        <div>
                            <h1 class="font-semibold">Type</h1>
                            <select onchange="oaButtonDisabler()" id="oaAddtype" class="input-default  w-full" name="type" id="outstanding">
                                @foreach ($outstandingAccomplishmentType as $item)
                                    <option value="{{ $item->id }}">{{ $item->type . ' ' . $item->title }}</option>
                                @endforeach
                            </select>
                            <label id="oaAddtypeLabel" class="text-red-500 hidden">Field is Required</label>
                        </div>

                        <div>
                            <h1 class="font-semibold">Attach a file</h1>
                            <div>
                                <input onchange="oaButtonDisabler()" id="oaAddDocument" class="w-full rounded-xl p-1.5 m-1 bg-white" type="file" accept="application/pdf" name="document">
                                <label id="oaAddDocumentLabel" class="text-red-500 hidden">Field is Required</label>
                            </div>
                        </div>
                        <div>
                            <h1 class="font-semibold invisible">Add</h1>
                            <button disabled id="oaAddButton" type="submit" class="p-2 m-1 rounded-xl bg-white w-full">
                                Add
                            </button>
                        </div>

                    </div>
                </form>

                {{-- Table --}}
                <div class="grid mt-3">
                    <table>
                        <thead class="bg-navyblue opacity-90 text-gray-200">
                            <tr>
                                <th class="border border-white p-3">Title</th>
                                <th class="border border-white p-3">Type</th>
                                <th class="border border-white p-3">Documment/s</th>
                                <th class="border border-white p-3">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($outstandingAccomplishment as $item)
                                <tr>
                                    <td class="p-1 border-r">{{ $item->title }}</td>
                                    <td class="p-1 border-r">{{ $item->type }}</td>
                                    <td class="p-1 border-r underline">
                                        <a href="/uploads/outstandingAccomplishment/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                                    </td>
                                    <td class=" text-center ">
                                        {{-- {!! json_encode($data) !!} --}}
                                        <button onclick='OutstandingmyEditmodalFunction({{ $i }})'
                                            class="border m-1 px-3 py-1 rounded-lg p-1 bg-navyblue text-white">
                                            Edit
                                        </button>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>

                    </table>
                </div>

                <div class="mt-3 ">
                    <hr>
                </div>

                <x-applicant.personal-info-component.aoeaa :aoeaa="$aoeaa"/>
                <x-applicant.personal-info-component.ld :ld="$ld"/>
            </div> {{-- Container closing --}}
        </div>
    </div>








    {{-- VII. Outstanding Accomplishment --}}
    <div id="OutstandingmyEditModal" class="fixed hidden h-screen bg-black/70 w-screen  top-0 left-0 right-0">
        <div class="modal-content grid m-auto mt-0.5 sm:mt-0.5 md:mt-0.5 lg:mt-12 xl:mt-12 h-[40%] w-[20%]">
            <div class="flex w-full justify-center">
                <div class="rounded-3xl px-28 py-8 bg-white justify-around mt-8 fixed">
                    <form action="/applicant/editOutstandingAccomplishment" method="POST" enctype="multipart/form-data" class="grid">
                        @csrf
                        <input type="text" name="id" id="outstandingID" hidden>
                        <div>
                            <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                        </div>
                        <h1 class="font-semibold">Title</h1>
                        <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                            name="title" id="outstandingTitle" title="input">

                        <h1 class="font-semibold">Type</h1>
                        <select class="input-default border border-navyblue w-full" name="type" id="outstandingAwards">
                            @foreach ($outstandingAccomplishmentType as $item)
                                <option value="{{ $item->id }}">{{ $item->type . ' ' . $item->title }}</option>
                            @endforeach
                        </select>
                        <h1 class="font-semibold">Attach a file</h1>
                        <div class="rounded-xl p-2 m-1 bg-white border border-navyblue">
                            <label for="upload">
                                <input type="file" accept="application/pdf" name="document" id="upload" value="mini.jpeg" title="input">
                            </label>
                        </div>
                        <button onclick="OutstandingmyEditmodalFunction()"
                            class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Save</button>
                        <button 
                            type="button"
                            onclick="OutstandingmyEditmodalFunction2()"
                            class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get Outstanding Data's
        var outstandingDatas = {!! json_encode($outstandingAccomplishment->toArray(), JSON_HEX_TAG) !!};
        var outstandingDatas2 = {!! json_encode($outstandingAccomplishmentType->toArray(), JSON_HEX_TAG) !!};
        // Get Outstanding elements
        var outstandingID = document.getElementById('outstandingID');
        var outstandingTitle = document.getElementById('outstandingTitle');
        var outstandingAwards = document.getElementById('outstandingAwards');
        
        // For Outstanding Edit button Modal
        function OutstandingmyEditmodalFunction(index) {
            OutstandingmyEditmodalFunction2();

            outstandingID.value = outstandingDatas[index]['id'];
            outstandingTitle.value = outstandingDatas[index]['title'];
            outstandingAwards.value = outstandingDatas2[outstandingDatas[index]['type']]['id'];
        }

        function OutstandingmyEditmodalFunction2() {
            document.getElementById("OutstandingmyEditModal").classList.toggle("hidden");
        }
    </script>

    <script>
        //Disable submit button if empty

        //Get elements 
        var oaAddTitle = document.getElementById('oaAddTitle');
        var oaAddtype = document.getElementById('oaAddtype');
        var oaAddDocument = document.getElementById('oaAddDocument');

        function oaButtonDisabler() {
            oaShowEmptyError();

            if(oaAddTitle.value==="" ||
                oaAddtype.value==="" ||
                oaAddDocument.files.length == 0
            ) { 
                document.getElementById('oaAddButton').classList.add("bg-white");
                document.getElementById('oaAddButton').classList.remove("bg-green-500");
                document.getElementById('oaAddButton').classList.remove("text-white");
                document.getElementById('oaAddButton').classList.remove("font-bold");
                document.getElementById('oaAddButton').disabled = true;
            } else {
                document.getElementById('oaAddButton').classList.remove("bg-white");
                document.getElementById('oaAddButton').classList.add("bg-green-500");
                document.getElementById('oaAddButton').classList.add("text-white");
                document.getElementById('oaAddButton').classList.add("font-bold");
                document.getElementById('oaAddButton').disabled = false;
            }
        }

        function oaShowEmptyError() {
            if(oaAddTitle.value === "") {
                document.getElementById('oaAddTitleLabel').classList.remove("hidden");
            } else {
                document.getElementById('oaAddTitleLabel').classList.add("hidden");
            }

            if(oaAddtype.value === "") {
                document.getElementById('oaAddtypeLabel').classList.remove("hidden");
            } else {
                document.getElementById('oaAddtypeLabel').classList.add("hidden");
            }

            if(oaAddDocument.files.length == 0) {
                document.getElementById('oaAddDocumentLabel').classList.remove("hidden");
            } else {
                document.getElementById('oaAddDocumentLabel').classList.add("hidden");
            }
        }
    </script>






















    <script>
        //Getting the stored data  from the search province modal

        function myFunctionSearch() {
            document.getElementById("myDropdown").classList.toggle("hidden");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

        function handleLinkClick(link) {
            var input = document.getElementById("myInput");
            input.value = link.textContent.trim();
            // Alternatively, you can set the input value instead of placeholder
            // input.placeholder = link.textContent.trim(); -> depende sa imong trip
            myFunctionSearch();
        }
    </script>

@endsection
