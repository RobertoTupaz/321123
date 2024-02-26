{{-- Eligibility --}}
<h1 id="eligibility" class="font-bold text-left p-4 pt-12">V. Eligibility</h1>
<form action="/applicant/addEligibility" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-5 gap-1">
        <div>
            <h1 class="font-semibold">Title</h1>
            <input onkeyup="eligibilityButtonDisabler()" class="input-default w-full" type="text" name="title" id="eligibilityAddTitle" placeholder="Title">
            <label id="eligibilityAddTitleLabel" class="text-red-500 hidden">Field is Required</label>
        </div>

        <div>
            <h1 class="font-semibold">Rating</h1>
            <input onkeyup="eligibilityButtonDisabler()" class="input-default w-full" type="text" name="rating" id="eligibilityAddRating" placeholder="Rating">
            <label id="eligibilityAddRatingLabel" class="text-red-500 hidden">Field is Required</label>
        </div>

        <div>
            <div>
                <h1 class="font-semibold">Attach a file</h1>
                <div>
                    <input accept="application/pdf" onchange="eligibilityButtonDisabler()" id="eligibilityAddDocument" class="w-full rounded-xl p-1.5 m-1 bg-white" type="file" name="document">
                    <label id="eligibilityAddDocumentLabel" class="text-red-500 hidden">Field is Required</label>
                </div>
            </div>
        </div>
        <div>
            <h1 class="font-semibold invisible">Add</h1>
            <button disabled type="submit" id="eligibilityAddButton" class="p-2 m-1 rounded-xl bg-white w-full">
                Add
            </button>
        </div>

    </div>
</form>

{{-- Table --}}
<div class="grid mt-3">
    <table>
        <thead class="z-0 bg-navyblue opacity-90 text-gray-200">
            <tr>

                <th class="border border-white p-3">Title</th>
                <th class="border border-white p-3">Rating</th>
                <th class="border border-white p-3">Documment/s</th>
                <th class="border border-white p-3">Action</th>
            </tr>
        </thead>

        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($eligibility as $item)
                <tr>
                    <td class="p-1 border-r">{{ $item->title }}</td>
                    <td class="p-1 border-r">{{ $item->rating }}</td>
                    <td class="p-1 border-r underline">
                        <a href="/uploads/eligibility/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                    </td>
                    <td class=" text-center ">
                        {{-- {!! json_encode($data) !!} --}}
                        <button onclick='EligibilitymyEditmodalFunction({{$i}})'
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











{{-- V. Eligibility --}}
<div id="EligibilitymyEditModal" class="z-20 fixed hidden h-screen bg-black/70 w-screen  top-0 left-0 right-0">
    <div class="modal-content grid m-auto mt-0.5 sm:mt-0.5 md:mt-0.5 lg:mt-12 xl:mt-12 h-[40%] w-[20%]">
        <div class="flex w-full justify-center">
            <div class="rounded-3xl px-28 py-8 bg-white justify-around mt-8 fixed">
                <form action="/applicant/editEligibility" method="POST" enctype="multipart/form-data" class="grid">
                    @csrf
                    <input type="text" name="id" id="eligibilityID" hidden>
                    <div>
                        <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                    </div>
                    <h1 class="font-semibold">Eligibility</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        name="title" id="eligibilityTitle" title="input">
                    <h1 class="font-semibold">Rating</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        name="rating" id="eligibilityRating" title="input">
                    <h1 class="font-semibold">Attach a file</h1>
                    <div class="rounded-xl p-2 m-1 bg-white border border-navyblue">
                        <label for="upload">
                            <input type="file" accept="application/pdf" id="upload" name="document" title="input">
                        </label>
                    </div>
                    <button type="submit"
                        class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Save</button>
                    <button 
                        type="button"
                        onclick="EligibilitymyEditmodalFunction2()"
                        class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // eligibilit datas
    var datas = {!! json_encode($eligibility->toArray(), JSON_HEX_TAG) !!};

    // Get Elements
    var eligibilityID = document.getElementById('eligibilityID');
    var eligibilityTitle = document.getElementById('eligibilityTitle');
    var eligibilityRating = document.getElementById('eligibilityRating');

    // For Eligibility Edit button Modal
    function EligibilitymyEditmodalFunction(index) {
        eligibilityID.value = datas[index]['id'];
        eligibilityTitle.value = datas[index]['title'];
        eligibilityRating.value = datas[index]['rating'];
        document.getElementById("EligibilitymyEditModal").classList.toggle("hidden");
    }

    function EligibilitymyEditmodalFunction2() {
        document.getElementById("EligibilitymyEditModal").classList.toggle("hidden");
    }
</script>

<script>
    //Disable submit button if empty

    //Get elements
    var eligibilityAddTitle = document.getElementById('eligibilityAddTitle');
    var eligibilityAddRating = document.getElementById('eligibilityAddRating');
    var eligibilityAddDocument = document.getElementById('eligibilityAddDocument');

    function eligibilityButtonDisabler() {
        eligibilityShowEmptyError();
	    if(eligibilityAddTitle.value==="" || 
            eligibilityAddRating.value==="" || 
            eligibilityAddDocument.files.length == 0
        ) { 
            document.getElementById('eligibilityAddButton').classList.add("bg-white");
            document.getElementById('eligibilityAddButton').classList.remove("bg-green-500");
            document.getElementById('eligibilityAddButton').classList.remove("text-white");
            document.getElementById('eligibilityAddButton').classList.remove("font-bold");
            document.getElementById('eligibilityAddButton').disabled = true;
        } else {
            document.getElementById('eligibilityAddButton').classList.remove("bg-white");
            document.getElementById('eligibilityAddButton').classList.add("bg-green-500");
            document.getElementById('eligibilityAddButton').classList.add("text-white");
            document.getElementById('eligibilityAddButton').classList.add("font-bold");
            document.getElementById('eligibilityAddButton').disabled = false;
        }
    }

    function eligibilityShowEmptyError() {
        if(eligibilityAddTitle.value === "") {
            document.getElementById('eligibilityAddTitleLabel').classList.remove("hidden");
        } else {
            document.getElementById('eligibilityAddTitleLabel').classList.add("hidden");
        }

        if(eligibilityAddRating.value === "") {
            document.getElementById('eligibilityAddRatingLabel').classList.remove("hidden");
        } else {
            document.getElementById('eligibilityAddRatingLabel').classList.add("hidden");
        }

        if(eligibilityAddDocument.files.length == 0) {
            document.getElementById('eligibilityAddDocumentLabel').classList.remove("hidden");
        } else {
            document.getElementById('eligibilityAddDocumentLabel').classList.add("hidden");
        }
    }
</script>
