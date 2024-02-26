{{-- Create Modal --}}
<div id="CreatePublicationModal" class="z-10 fixed hidden h-screen bg-black/70 w-screen top-0 left-0 right-0">
    <div class="w-full grid grid-cols-3">
        <div>
            <div class="h-full" onclick="CloseOpenPubmodalFunction()">

            </div>
        </div>
        <div class="h-screen rounded-2xl border border-4 p-2 bg-white">
            <div class="crounded-3xl px-12 py-8 bg-white justify-around h-full grid overflow-hidden overflow-y-scroll">
                <form action="/personel/addJobs" method="POST">
                    @csrf
                    <div class="px-12 grid">
                        <div>
                            <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                        </div>
                        {{-- Create --}}
                        <h1 class="font-bold text-center text-lg">Create</h1>
                        <div class="relative">
                            <div>
                                {{-- <h1 class="font-semibold">Position</h1>
                                <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                    title="itsinput" name="position" id="PositionInput" onkeyup="PositionfilterFunction()"> --}}
                                {{-- position --}}
                                <div class="">
                                    <h1 class="font-semibold ">Position</h1>
                                    <div>
                                        <div>
                                            <input class="input-default rounded-xl border border-navyblue" type="text"
                                                id="myInput" onkeyup="filterFunction()"
                                                name="position" autocomplete="off"
                                                onclick="myFunctionSearch()">
                                        </div>
                                        {{-- Search Modal --}}
                                        <div class="relative">
                                            {{-- Search Modal --}}
                                            <div id="myDropdown"
                                                class="dropdown-content absolute shadow-lg bg-white hidden rounded-xl">

                                                @foreach ($positions as $item)
                                                    <a href="#about" onclick="handleLinkClick(this)"
                                                        class="block py-2 text-gray-800 hover:bg-gray-200 text-nowrap">{{ $item->position_title }}</a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="hidden" id="categoryDiv">
                                    {{-- <h1 class="font-semibold">Category</h1>
                                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                        name="category" id="PositionInput"> --}}

                                    <h1 class="font-semibold">Academic Level:</h1>
                                    <select name="category" class="input-default w-fit border border-navyblue">
                                        <option disabled selected value></option>
                                        <option value="SHS">Senior High School (SHS)</option>
                                        <option value="JHS">Junior High School (JHS)</option>
                                        <option value="ELEMENTARY">Elementary</option>
                                    </select>
                            </div>
                            </div>
                        </div>
                        <div>
                            <h1 class="font-semibold">Education</h1>
                            <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                name="education"title="input">
                        </div>
                        <div>
                            <h1 class="font-semibold">Experience</h1>
                            <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                name="experience"title="input">
                        </div>
                        <div>
                            <h1 class="font-semibold">Plantilla Item No.</h1>
                            <textarea name="plantilla_item_no" id="" rows="5"  class="border border-navyblue focus:ring-0 outline-0 rounded-2xl w-full p-2">

                            </textarea>
                        </div>
                        <div>
                            <h1 class="font-semibold">Training</h1>
                            <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                name="training" title="input">
                        </div>
                        <div>
                            <h1 class="font-semibold">Eligibility</h1>
                            <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                name="eligibility" title="input">
                        </div>
                        <div>
                            <h1 class="font-semibold">Salary Grade</h1>
                            <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                name="salaryGrade" title="input">
                        </div>
                        <div>
                            <h1 class="font-semibold">Monthly Salary</h1>
                            <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                name="monthlySalary" title="input">
                        </div>
                        <div>
                            <h1 class="font-semibold">Competency(if applicable)</h1>
                            <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                name="competency" title="input">
                        </div>
                        <div>
                            <h1 class="font-semibold">Place of Assignment</h1>
                            <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                                name="placeOfAssignment" title="input">
                        </div>
                        <div>
                            <h1 class="font-semibold">Posting Date</h1>
                            <input type="date" name="postingDate" placeholder="Posting Date" 
                                class="border border-navyblue focus:ring-0 outline-0 input-default w-full">
                        </div>
                        <div>
                            <h1 class="font-semibold">Closing Date</h1>
                            <input type="date" name="closingDate" placeholder="Closing Date" 
                                class="border border-navyblue focus:ring-0 outline-0 input-default w-full">
                        </div>
                        <div class="grid mt-1">
                            <button type="submit"
                                class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Save</button>
                            <button onclick="CloseOpenPubmodalFunction()" type="button"
                                class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="h-full" onclick="CloseOpenPubmodalFunction()">
                
            </div>
        </div>
    </div>
</div>

<script>
    // For Create button for Modal
    function CloseOpenPubmodalFunction() {
        document.getElementById("CreatePublicationModal").classList.toggle("hidden");
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
        var categoryDiv = document.getElementById('categoryDiv');
        var input = document.getElementById("myInput");

        input.value = link.textContent.trim();

        if(input.value == "Teacher I" || input.value == "Teacher 1") {
            categoryDiv.classList.remove('hidden');
        } else {
            categoryDiv.classList.add('hidden');
        }
        // Alternatively, you can set the input value instead of placeholder
        // input.placeholder = link.textContent.trim(); -> depende sa imong trip
        myFunctionSearch();
    }
</script>