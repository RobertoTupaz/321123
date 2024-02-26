@extends('personel.html.index')
@section('body')
    {{-- Rounded with Border --}}

    <div class="mx-auto text-center mt-[1rem] bg-white opacity-95 rounded-xl p-3  shadow-lg  max-w-6xl  mb-28">
        <div class="grid bg-white rounded-xl p-3  ">

            {{-- Personal Information --}}
            <h1 class="font-bold text-left p-4">I. Personal Information</h1>


            <div>

                <div class="grid grid-cols-1">

                    <div>

                        <div class="flex justify-evenly mx-20">

                            {{-- Application Code --}}
                            {{-- Read only cannot be edited --}}
                            <div>
                                <h1 class="font-semibold">Application Code</h1>
                                <div class="justify-center flex grid-cols-2">
                                    <button onclick="copyAppicationCode()"
                                        class="input-default hover:shadow-lg font-semibold text-white border bg-navyblue">
                                        Copy
                                    </button>
                                    <input id="copyApplicationValue" type="text"
                                        class="input-default text-center border border-2-navyblue border  w-fit" value="{{$application->application_id}}"
                                        placeholder="Application Code" disabled readonly>


                                </div>
                            </div>



                            {{-- Letter of Intent --}}
                            <div>
                                <div class="justify-center">
                                    <h1 class="font-semibold"> Letter of Intent</h1>
                                    <button onclick="ViewDetailsFunc()"
                                        class="input-default bg-navyblue text-white font-semibold cursor-pointer">View
                                        Details</button>
                                </div>
                            </div>

                        </div>
                        {{-- division --}}
                        <div>
                            <hr>
                        </div>
                        
                    </div>
                    <div>
                        {{-- Name --}}
                        <h1 class="text-left ml-1 ">*Name</h1>
                        <div class="grid grid-cols-4">
                            {{-- Surname --}}
                            <div>
                                <h1 class="font-semibold">Surname</h1>
                                <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="last_name"
                                    value="{{ $user->last_name }}" placeholder="Surname">
                            </div>
                            {{-- First Name --}}
                            <div>
                                <h1 class="font-semibold">First Name</h1>
                                <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="first_name"
                                    value="{{ $user->first_name }}" placeholder="First Name">
                            </div>
                            {{-- Middle Name --}}
                            <div>
                                <h1 class="font-semibold">Middle Name</h1>
                                <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="middle_name"
                                    value="{{ $user->middle_name }}" placeholder="Middle Name">
                            </div>
                            {{-- Suffix --}}
                            <div>
                                <h1 class="font-semibold">Suffix</h1>
                                <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="middle_name"
                                value="{{ $user->suffix_name }}" placeholder="Middle Name">
                            </div>
                        </div>
                        {{-- Address --}}
                        <h1 class="text-left ml-1 ">*Address</h1>
                        <div class="grid grid-cols-4">
                            {{-- Street --}}
                            <div>
                                <h1 class="font-semibold">Street</h1>
                                <input name="street" value="{{ $user->street }}" class="input-default text-center border border-2-navyblue border  w-fit" disabled
                                    type="text" placeholder="Street">
                            </div>
                            {{-- Barangay --}}
                            <div>
                                <h1 class="font-semibold">Barangay</h1>
                                <input name="barangay" value="{{ $user->barangay }}" class="input-default text-center border border-2-navyblue border  w-fit" disabled
                                    type="text" placeholder="Barangay">
                            </div>
                            {{-- City/Municipality --}}
                            <div>
                                <h1 class="font-semibold">City/Municipality</h1>
                                <input name="city_municipality" value="{{ $user->city_municipality }}"
                                    class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" placeholder="City/Municipality">
                            </div>
                            {{-- Province --}}
                            <div class="">
                                <h1 class="font-semibold ">Province</h1>
                                <div>
                                    <div>
                                        <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text"
                                            placeholder="Province" id="myInput" 
                                            name="province" value="{{ $user->province }}" autocomplete="off"
                                            >
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
                            <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="month"
                                value="{{ $user->month }}" placeholder="Birthday">
                        </div>
                        <div>
                            <h1 class="font-semibold">Day</h1>
                            <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="day"
                                value="{{ $user->day }}" placeholder="Birthday">
                        </div>
                        <div>
                            <h1 class="font-semibold">Year</h1>
                            <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="year"
                                value="{{ $user->year }}" placeholder="Birthday">
                        </div>
                    </div>
                    {{-- Contact --}}
                    <h1 class="text-left ml-1">*Contact</h1>
                    <div class="grid grid-cols-4">
                        {{-- Mobile No. --}}
                        <div>
                            <h1 class="font-semibold">Mobile No.</h1>
                            <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="contact_number"
                                value="{{ $user->contact_number }}" placeholder="Mobile No.">
                        </div>
                        {{-- Email --}}
                        <div>
                            <h1 class="font-semibold grid">Email</h1>
                            <div>
                                <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="email" name="email"
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
                            <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text"
                            value="{{ $user->sex }}" placeholder="Email">
                        </div>
                        {{-- Civil Status --}}
                        <div>
                            <h1 class="font-semibold">Civil Status</h1>
                            <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text"
                            value="{{ $user->civil_status }}" placeholder="Email">
                        </div>
                        {{-- Religion --}}
                        <div>
                            <h1 class="font-semibold">Religion</h1>
                            <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="religion"
                                value="{{ $user->religion }}" placeholder="Religion">
                        </div>

                        {{-- Ethnic Group --}}
                        <div>
                            <h1 class="font-semibold">Ethnic Group</h1>
                            <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="ethnic_group"
                                value="{{ $user->ethnic_group }}" placeholder="Ethnic Group">
                        </div>
                        {{-- Disability --}}
                        <div>
                            <h1 class="font-semibold">Disability</h1>
                            <input class="input-default text-center border border-2-navyblue border  w-fit" disabled type="text" name="disability"
                                value="{{ $user->disability }}" placeholder="Disability">
                        </div>

                    </div>

                </div>


                <div class="mt-3">
                    <hr>
                </div>

                {{-- Education --}}

                <h1 class="font-bold text-left p-4">II. Education</h1>

                {{-- Table --}}
                <div class="grid mt-3">
                    <table>
                        <thead class="bg-navyblue opacity-90 text-gray-200">
                            <tr>
                                <th class="border border-white p-3">Educational Attainment</th>
                                <th class="border border-white p-3">Units (if not graduated)</th>
                                <th class="border border-white p-3">Documment/s</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($educationalAttainment as $item)
                                <tr class="border-b">
                                    <td class="p-1 border-r">{{ $item->educational_attainment }}</td>
                                    <td class="p-1 border-r">{{ $item->units }}</td>
                                    <td class="p-1 border-r underline">
                                        <a href="/uploads/education/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                                    </td>                
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

                <div class="mt-3 ">
                    <hr>
                </div>

                {{-- Experience --}}

                <h1 class="font-bold text-left p-4">III. Experience</h1>


                {{-- Table --}}
                <div class="grid mt-3">
                    <table>
                        <thead class="bg-navyblue opacity-90 text-gray-200">
                            <tr>
                                <th class="border border-white p-3">Position Title</th>
                                <th class="border border-white p-3">Date Started</th>
                                <th class="border border-white p-3">Date Ended</th>
                                <th class="border border-white p-3">Years Covered</th>
                                <th class="border border-white p-3">Employer/Company</th>
                                <th class="border border-white p-3">Document</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($experience as $item)
                                <tr>
                                    <td class="p-1 border-r">{{$item->title}}</td>
                                    <td class="p-1 border-r">{{$item->date_started}}</td>
                                    <td class="p-1 border-r">{{$item->date_ended}}</td>
                                    <td class="p-1 border-r">
                                        {{ $item->years_covered }} 
                                        Year/s
                                        @if ($item->months_covered > 0)
                                            and
                                            {{$item->months_covered}}
                                            Month/s
                                        @endif
                                    </td>
                                    <td class="p-1 border-r">{{$item->employer_or_company}}</td>
                                    <td class="p-1 border-r underline">
                                        <a href="/uploads/experience/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>
                </div>




                {{-- Training --}}
                <h1 class="font-bold text-left p-4">IV. Training</h1>


                {{-- Table --}}
                <div class="grid mt-3">
                    <table>
                        <thead class="bg-navyblue opacity-90 text-gray-200">
                            <tr>
                                <th class="border border-white p-3">Title of Training</th>
                                <th class="border border-white p-3">No. of Hours</th>
                                <th class="border border-white p-3">Year Attended</th>
                                <th class="border border-white p-3">Documment/s</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($training as $item)
                                <tr>
                                    <td class="p-1 border-r">{{$item->title}}</td>
                                    <td class="p-1 border-r">{{$item->training_hours_no}}</td>
                                    <td class="p-1 border-r">{{$item->year_attended}}</td>
                                    <td class="p-1 border-r underline">
                                        <a href="/uploads/training/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="mt-3 ">
                    <hr>
                </div>


                {{-- Eligibility --}}
                <h1 class="font-bold text-left p-4">V. Eligibility</h1>

                {{-- Table --}}
                <div class="grid mt-3">
                    <table>
                        <thead class="bg-navyblue opacity-90 text-gray-200">
                            <tr>

                                <th class="border border-white p-3">Title</th>
                                <th class="border border-white p-3">Rating</th>
                                <th class="border border-white p-3">Documment/s</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($eligibility as $item)
                                <tr>
                                    <td class="p-1 border-r">{{ $item->title }}</td>
                                    <td class="p-1 border-r">{{ $item->rating }}</td>
                                    <td class="p-1 border-r underline">
                                        <a href="/uploads/eligibility/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


                <div class="mt-3 ">
                    <hr>
                </div>

                {{-- Performance Rating --}}
                <h1 class="font-bold text-left p-4">VI. Performance Rating</h1>

                {{-- Table --}}
                <div class="grid mt-3">
                    <table>
                        <thead class="bg-navyblue opacity-90 text-gray-200">
                            <tr>

                                <th class="border border-white p-3">Employer/Company</th>
                                <th class="border border-white p-3">Year</th>
                                <th class="border border-white p-3">Rating</th>
                                <th class="border border-white p-3">Documment/s</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($performanceRating as $item)
                                <tr>
                                    <td class="p-1 border-r">{{ $item->employer_or_company }}</td>
                                    <td class="p-1 border-r">{{ $item->year }}</td>
                                    <td class="p-1 border-r">{{ $item->rating }}</td>
                                    <td class="p-1 border-r underline">
                                        <a href="/uploads/performanceRating/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


                <div class="mt-3 ">
                    <hr>
                </div>



                {{-- Outstanding Accomplishment --}}
                <h1 class="font-bold text-left p-4">VII. Outstanding Accomplishment</h1>


                {{-- Table --}}
                <div class="grid mt-3">
                    <table>
                        <thead class="bg-navyblue opacity-90 text-gray-200">
                            <tr>

                                <th class="border border-white p-3">Title</th>
                                <th class="border border-white p-3">Type</th>
                                <th class="border border-white p-3">Documment/s</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($outstandingAccomplishment as $item)
                                <tr>
                                    <td class="p-1 border-r">{{ $item->title }}</td>
                                    <td class="p-1 border-r">{{ $item->type }}</td>
                                    <td class="p-1 border-r underline">
                                        <a href="/uploads/outstandingAccomplishment/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


                <div class="mt-3 ">
                    <hr>
                </div>


                {{-- Application of Education acquired after the last promotion --}}
                <h1 class="font-bold text-left p-4">VIII. Application of Education acquired after the last promotion
                </h1>


                {{-- Table --}}
                <div class="grid mt-3">
                    <table>
                        <thead class="bg-navyblue opacity-90 text-gray-200">
                            <tr>

                                <th class="border border-white p-3">Title</th>
                                <th class="border border-white p-3">Documment/s</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($aoeaa as $item)
                                <tr>
                                    <td class="p-1 border-r">{{ $item->title }}</td>
                                    <td class="p-1 border-r underline">
                                        <a href="/uploads/aoeaa/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


                <div class="mt-3 ">
                    <hr>
                </div>



                {{-- Application of Learning & Development (L&D) acquired after the last promotion --}}
                <h1 class="font-bold text-left p-4">IX. Application of Learning & Development (L&D) acquired after the
                    last promotion</h1>


                {{-- Table --}}
                <div class="grid mt-3">
                    <table>
                        <thead class="bg-navyblue opacity-90 text-gray-200">
                            <tr>

                                <th class="border border-white p-3">Title</th>
                                <th class="border border-white p-3">Documment/s</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($ld as $item)
                                <tr>
                                    <td class="p-1 border-r">{{$item->title}}</td>
                                    <td class="p-1 border-r underline">
                                        <a href="/uploads/ld/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>






            </div>
        </div>

        <script>

            // Copy Application Code
            function copyAppicationCode() {
                /* Get the text field */
                var copyApplicationValue = document.getElementById("copyApplicationValue");
                copyApplicationValue.select();
                navigator.clipboard.writeText(copyApplicationValue.value)
            }

            // ----------------------------------------------------------------

            // For ViewDetails button Modal
            function ViewDetailsFunc(data) {
                console.log(data);
                document.getElementById("ViewDetailsModal").classList.toggle("hidden");
            }


            function ViewDetailsFuncHandleClick() {
                var input = document.getElementById("DetailsModalInput");
                ViewDetailsFunc();
            }

            // ----------------------------------------------------------------
        </script>

        {{-- II. Education Edit Modal --}}
        <div id="ViewDetailsModal" class="fixed hidden h-screen bg-black/70 top-0 left-0 right-0">
            <div class="bg-red-500 w-full flex justify-center">
                <div class="rounded-3xl py-8 w-2/6 bg-white mt-8 fixed">
                    <form class="px-12 grid">
                        <div>
                            <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                        </div>
                        <div class="font-bold underline mb-2">LETTER OF INTENT</div>
                        <h1 class="font-semibold">Position Title:</h1>
                        <div class="border border-navyblue focus:ring-0 outline-0 input-default">
                            {{$job->position}}
                        </div>
                        @if ($job->category)
                            <h1 class="font-semibold">Academic Level</h1>
                            <div class="border border-navyblue focus:ring-0 outline-0 input-default">
                                Elementary
                            </div>
                        @endif
                        <h1 class="font-semibold">PDF</h1>
                        <div class="rounded-xl p-2 m-1 bg-white border border-navyblue">
                            <a target="_blank" href="/uploads/leterOfIntent/{{$application->letter_of_intent}}">
                                <div class="underline cursor-pointer">{{$application->letter_of_intent}}</div>
                            </a>

                        </div>
                        <button onclick="ViewDetailsFunc()"
                            class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Save</button>
                        <button type="button" onclick="ViewDetailsFunc()"
                            class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
