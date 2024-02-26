@extends('personel.html.index')
@section('body')
    {{-- Rounded with Border --}}
    <div class="mx-auto text-center mt-[1rem] bg-gray-500 opacity-90 rounded-xl p-3 shadow-lg  max-w-6xl  mb-28">


        <div class="grid bg-gray-300 rounded-xl p-3  ">

            <div>

                <h1 class="font-bold text-center p-4">SUMMARY OF DATA THAT IS ALREADY PUBLISHED</h1>

                <div class="flex justify-between">
                    <div>
                        <input class="input-default" type="text" placeholder="Search" oninput="handleSearch(this.value)">
                        <div id="suggestions" class="mt-2"></div>

                    </div>
                    <div>
                        <button class="border text-white input-default bg-navyblue" onclick="CloseOpenPubmodalFunction()">Create</button>
                    </div>
                </div>

                {{-- Table --}}
                <div>

                    <div class="grid mt-3">
                        <table>
                            <thead class="bg-navyblue opacity-90 text-gray-200">
                                <tr>
                                    <th class="border border-white p-3">No.</th>
                                    <th class="border border-white p-3">Position</th>
                                    <th class="border border-white p-3">Category</th>
                                    <th class="border border-white p-3">Education</th>
                                    <th class="border border-white p-3">Experience</th>
                                    <th class="border border-white p-3">Plantilla Item No.</th>
                                    <th class="border border-white p-3">Training</th>
                                    <th class="border border-white p-3">Eligibility</th>
                                    <th class="border border-white p-3">SG</th>
                                    <th class="border border-white p-3">Posting Date</th>
                                    <th class="border border-white p-3">Closing Date</th>
                                    <th class="border border-white p-3">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($jobs as $item)
                                    <tr class="text-center">
                                        {{-- Position --}}
                                        <td class="p-1 border-r">{{$i + 1}}</td>
                                        {{-- Position --}}
                                        <td class="p-1 border-r">{{$item->position}}</td>
                                        {{-- Category --}}
                                        <td class="p-1 border-r">{{$item->category}}</td>
                                        {{-- Education --}}
                                        <td class="p-1 border-r">{{$item->education}}</td>
                                        {{-- Experience --}}
                                        <td class="p-1 border-r">{{$item->experience}}</td>
                                        {{-- Plantilla item no. --}}
                                        <td class="p-1 border-r">{{$item->plantilla_item_no}}</td>
                                        {{-- Training --}}
                                        <td class="p-1 border-r">{{$item->training}}</td>
                                        {{-- Eligibility --}}
                                        <td class="p-1 border-r">{{$item->eligibility}}</td>
                                        {{-- Salary Grade --}}
                                        <td class="p-1 border-r">{{$item->salary_grade}}</td>
                                        {{-- Posting Date --}}
                                        <td class="p-1 border-r">{{$item->posting_date}}</td>
                                        {{-- Closing  date --}}
                                        <td class="p-1 border-r">{{$item->closing_date}}</td>
                                        {{-- Action --}}
                                        <td class="p-1 ">
                                            <button class="border m-1 px-3 py-1 rounded-lg p-1 bg-navyblue text-white"
                                                onclick="PublicationmodalFunction({{$i}})">
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
                </div>
            </div>
        </div>
    </div>








    <x-personel.add_job_modal :positions="$positions" />
    <x-personel.publication_modal />








    <script>
        // ----------------------------------------------------------------

        function PositionFunction() {
            document.getElementById("PositionDropdown").classList.toggle("hidden");
        }

        function PositionfilterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("PositionInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("PositionDropdown");
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

        function PositionhandleLinkClick(link) {
            var input = document.getElementById("PositionInput");
            input.value = link.textContent.trim();
            // Alternatively, you can set the input value instead of placeholder
            // input.placeholder = link.textContent.trim(); -> depende sa imong trip
            PositionFunction();
        }

        // ----------------------------------------------------------------
    </script>
@endsection
