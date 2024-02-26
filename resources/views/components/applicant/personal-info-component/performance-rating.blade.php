{{-- Performance Rating --}}
<h1 id="performanceRatingHead" class="pt-12 font-bold text-left p-4">VI. Performance Rating</h1>
<form action="/applicant/addPerformanceRating" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-5 gap-1">
        <div>
            <h1 class="font-semibold">Employer/Company</h1>
            <input onkeyup="prButtonDisabler()" id="prAddEmployerCompany" class="input-default  w-full" type="text" name="company" placeholder="Title">
            <label id="prAddEmployerCompanyLabel" class="text-red-500 hidden">Field is Required</label>
        </div>
        <div>
            <h1 class="font-semibold">Year</h1>
            <input onkeyup="prButtonDisabler()" id="prAddYear" class="input-default  w-full" type="text" name="year" placeholder="Year">
            <label id="prAddYearLabel" class="text-red-500 hidden">Field is Required</label>
        </div>
        <div>
            <h1 class="font-semibold">Rating</h1>
            <input onkeyup="prButtonDisabler()" id="prAddRating" class="input-default  w-full" type="text" name="rating" placeholder="Rating">
            <label id="prAddRatingLabel" class="text-red-500 hidden">Field is Required</label>
        </div>

        <div>
            <h1 class="font-semibold">Attach a file</h1>
            <div>
                <input onchange="prButtonDisabler()" accept="application/pdf" id="prAddDocument" class="w-full rounded-xl p-1.5 m-1 bg-white" type="file" name="document">
                <label id="prAddDocumentLabel" class="text-red-500 hidden">Field is Required</label>
            </div>
        </div>
        <div>
            <h1 class="font-semibold invisible">Add</h1>
            <button disabled type="submit" id="prAddButton" class="p-2 m-1 rounded-xl bg-white w-full">
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

                <th class="border border-white p-3">Employer/Company</th>
                <th class="border border-white p-3">Year</th>
                <th class="border border-white p-3">Rating</th>
                <th class="border border-white p-3">Documment/s</th>
                <th class="border border-white p-3">Action</th>
            </tr>
        </thead>

        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($performanceRating as $item)
                <tr>
                    <td class="p-1 border-r">{{ $item->employer_or_company }}</td>
                    <td class="p-1 border-r">{{ $item->year }}</td>
                    <td class="p-1 border-r">{{ $item->rating }}</td>
                    <td class="p-1 border-r underline">
                        <a href="/uploads/performanceRating/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                    </td>
                    <td class=" text-center ">
                        {{-- {!! json_encode($data) !!} --}}
                        <button onclick='PerformancemyEditmodalFunction({{ $i }})'
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









{{-- VI. Performance Rating --}}
<div id="PerformancemyEditModal" class="z-20 fixed hidden h-screen bg-black/70 w-screen  top-0 left-0 right-0">
    <div class="modal-content grid m-auto mt-0.5 sm:mt-0.5 md:mt-0.5 lg:mt-12 xl:mt-12 h-[40%] w-[20%]">
        <div class="flex w-full justify-center">
            <div class="rounded-3xl px-12 py-8 bg-white mt-8 fixed">
                <form action="/applicant/editPerformanceRating" method="POST" enctype="multipart/form-data" class="grid">
                    @csrf
                    <input type="text" name="id" id="performanceID" hidden>
                    <div>
                        <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                    </div>
                    <h1 class="font-semibold">Employer/Company</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text" 
                        name="company" id="performanceEmployerCompany" title="input">
                    <h1 class="font-semibold">Year</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text" 
                        name="year" id="performanceYear" title="input">
                    <h1 class="font-semibold">Rating</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text" 
                        name="rating" id="performanceRating"title="input">
                    <h1 class="font-semibold">Attach a file</h1>
                    <div class="rounded-xl p-2 m-1 bg-white border border-navyblue">
                        <label for="upload">
                            <input type="file" accept="application/pdf" name="document" title="input">
                        </label>
                    </div>
                    <button type="submit"
                        class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Save</button>
                    <button type="button" onclick="PerformancemyEditmodalFunction2()"
                        class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>










<script>
    //performance data
    var performanceData = {!! json_encode($performanceRating->toArray(), JSON_HEX_TAG) !!};

    // get performance element
    var performanceID = document.getElementById('performanceID');
    var performanceEmployerCompany = document.getElementById('performanceEmployerCompany');
    var performanceYear = document.getElementById('performanceYear');
    var performanceRating = document.getElementById('performanceRating');

    // For Performance Edit button Modal
    function PerformancemyEditmodalFunction(index) {
        performanceID.value = performanceData[index]['id'];
        performanceEmployerCompany.value = performanceData[index]['employer_or_company'];
        performanceYear.value = performanceData[index]['year'];
        performanceRating.value = performanceData[index]['rating'];

        document.getElementById("PerformancemyEditModal").classList.toggle("hidden");
    }

    function PerformancemyEditmodalFunction2() {
        document.getElementById("PerformancemyEditModal").classList.toggle("hidden");
    }

</script>

<script>
    //Disable submit button if empty //// onkeyup="prButtonDisabler()"

    //Get elements 
    var prAddEmployerCompany = document.getElementById('prAddEmployerCompany');
    var prAddYear = document.getElementById('prAddYear');
    var prAddRating = document.getElementById('prAddRating');
    var prAddDocument = document.getElementById('prAddDocument');

    function prButtonDisabler() {
        prShowEmptyError();
	    if(prAddEmployerCompany.value==="" || 
            prAddYear.value==="" || 
            prAddRating.value==="" || 
            prAddDocument.files.length == 0
        ) { 
            document.getElementById('prAddButton').classList.add("bg-white");
            document.getElementById('prAddButton').classList.remove("bg-green-500");
            document.getElementById('prAddButton').classList.remove("text-white");
            document.getElementById('prAddButton').classList.remove("font-bold");
            document.getElementById('prAddButton').disabled = true;
        } else {
            document.getElementById('prAddButton').classList.remove("bg-white");
            document.getElementById('prAddButton').classList.add("bg-green-500");
            document.getElementById('prAddButton').classList.add("text-white");
            document.getElementById('prAddButton').classList.add("font-bold");
            document.getElementById('prAddButton').disabled = false;
        }
    }

    function prShowEmptyError() {
        if(prAddEmployerCompany.value === "") {
            document.getElementById('prAddEmployerCompanyLabel').classList.remove("hidden");
        } else {
            document.getElementById('prAddEmployerCompanyLabel').classList.add("hidden");
        }

        if(prAddYear.value === "") {
            document.getElementById('prAddYearLabel').classList.remove("hidden");
        } else {
            document.getElementById('prAddYearLabel').classList.add("hidden");
        }

        if(prAddRating.value === "") {
            document.getElementById('prAddRatingLabel').classList.remove("hidden");
        } else {
            document.getElementById('prAddRatingLabel').classList.add("hidden");
        }

        if(prAddDocument.files.length == 0) {
            document.getElementById('prAddDocumentLabel').classList.remove("hidden");
        } else {
            document.getElementById('prAddDocumentLabel').classList.add("hidden");
        }
    }
</script>