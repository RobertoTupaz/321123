{{-- Education --}}
<h1 id="education" class="font-bold text-left p-4">II. Education</h1>
<form action="/applicant/addEducation" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-5 gap-1">
            <div>
                <h1 class="font-semibold">Degree</h1>
                <input class="input-default w-full" type="text" onkeyup="educationalButtonDisabler()" name="educational_attainment" id="educationAttainmentAdd" placeholder="Educational Attainment">
                <label for="educationAttainmentAdd" id="educationAttainmentAddLabel" class="text-red-500 hidden">Field is Required</label>
            </div>
            <div>
                <h1 class="font-semibold">Units if not graduated</h1>
                <input class="input-default  w-full" type="text" onkeyup="educationalButtonDisabler()" name="units" id="educationalUnitAdd" placeholder="Units if not graduated">
                <label for="educationalUnitAdd" id="educationalUnitAddLabel" class="text-red-500 hidden">Field is Required</label>
            </div>
            <div>
                <h1 class="font-semibold">Attach a file</h1>
                <div class="">
                    <input class="w-full rounded-xl p-1.5 m-1 bg-white" type="file" accept="application/pdf" onchange="educationalButtonDisabler()" name="document" id="educationalDocumentAdd">
                    <label for="educationalDocumentAdd" id="educationalDocumentAddLabel" class="text-red-500 hidden">Field is Required</label>
                </div>
            </div>
            <div>
                <h1 class="font-semibold invisible">Add</h1>
                <button disabled type="submit" id="educationalAddButton" class="p-2 m-1 rounded-xl bg-white w-full">
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
                <th class="border border-white p-3">Educational Attainment</th>
                <th class="border border-white p-3">Units (if not graduated)</th>
                <th class="border border-white p-3">Documment/s</th>
                <th class="border border-white p-3">Action</th>
            </tr>
        </thead>

        <tbody>
            @php
                $educationLoop = 0;
            @endphp
            @foreach ($educationalAttainment as $item)
                <tr class="border-b">
                    <td class="p-1 border-r">{{ $item->educational_attainment }}</td>
                    <td class="p-1 border-r">{{ $item->units }}</td>
                    <td class="p-1 border-r underline">
                        <a href="/uploads/education/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                    </td>
                    <td class=" text-center ">
                        <button onclick='editEducationModal({{$educationLoop}})'
                            class="border m-1 px-3 py-1 rounded-lg p-1 bg-navyblue text-white">
                            Edit
                        </button>
                    </td>

                </tr>
                @php
                    $educationLoop++;
                @endphp
            @endforeach

        </tbody>

    </table>
</div>

<div class="mt-3 ">
    <hr>
</div>

{{-- II. Education Edit Modal --}}
<div id="EducationmyEditModal" class="z-10 fixed hidden h-screen bg-black/70 top-0 left-0 right-0">
    <div class="w-full flex justify-center">
        <div class="rounded-3xl py-8 bg-white mt-8 fixed">
            <form class="px-12 grid" action="/applicant/editEducation" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" id="educationID" hidden>
                <div>
                    <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                </div>
                <h1 class="font-semibold">Educational Attainment</h1>
                <input 
                    class="border border-navyblue focus:ring-0 outline-0 input-default" 
                    type="text"
                    title="input"
                    name="educational_attainment"
                    id="education_attainment2">
                <h1 class="font-semibold">Units (if not graduated)</h1>
                <input 
                    class="border border-navyblue focus:ring-0 outline-0 input-default" 
                    type="text"
                    title="input"
                    name="units"
                    id="educationunits">
                <h1 class="font-semibold">Attach a file</h1>
                <div class="rounded-xl p-2 m-1 bg-white border border-navyblue">
                    <label for="upload">
                        <input type="file" accept="application/pdf" id="upload" name="document" value="mini.jpeg" title="input">
                    </label>
                </div>
                <button onclick="EducationmyEditmodalFunction()"
                    class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Save</button>
                <button 
                    type="button"
                    onclick="EducationmyEditmodalFunction()"
                    class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
            </form>
        </div>
    </div>
</div>


<script>
    // Get the modal
    var educationdatasss = {!! json_encode($educationalAttainment->toArray(), JSON_HEX_TAG) !!};
    
    var id = document.getElementById('educationID');
    var educational_attainment2 = document.getElementById('education_attainment2');
    var units = document.getElementById('educationunits');

    // Function to toggle the modal display
    function editEducationModal(index) {
        EducationmyEditmodalFunction();

        id.value = educationdatasss[index]['id'];
        educational_attainment2.value = educationdatasss[index]['educational_attainment'];
        units.value = educationdatasss[index]['units'];
    }

    // For Education Edit button Modal
    function EducationmyEditmodalFunction() {
        document.getElementById("EducationmyEditModal").classList.toggle("hidden");
    }

</script>

<script>
    //Disable submit button if empty

    //Get elements
    var educationAttainmentAdd = document.getElementById('educationAttainmentAdd');
    var educationalUnitAdd = document.getElementById('educationalUnitAdd');
    var educationalDocumentAdd = document.getElementById('educationalDocumentAdd');

    function educationalButtonDisabler() {
        educationShowEmptyError();
	    if(educationAttainmentAdd.value==="" || educationalDocumentAdd.files.length == 0) { 
            document.getElementById('educationalAddButton').classList.add("bg-white");
            document.getElementById('educationalAddButton').classList.remove("bg-green-500");
            document.getElementById('educationalAddButton').classList.remove("text-white");
            document.getElementById('educationalAddButton').classList.remove("font-bold");
            document.getElementById('educationalAddButton').disabled = true;
        } else {
            document.getElementById('educationalAddButton').classList.remove("bg-white");
            document.getElementById('educationalAddButton').classList.add("bg-green-500");
            document.getElementById('educationalAddButton').classList.add("text-white");
            document.getElementById('educationalAddButton').classList.add("font-bold");
            document.getElementById('educationalAddButton').disabled = false;
        }
    }

    function educationShowEmptyError() {
        if(educationAttainmentAdd.value === "") {
            document.getElementById('educationAttainmentAddLabel').classList.remove("hidden");
        } else {
            document.getElementById('educationAttainmentAddLabel').classList.add("hidden");
        }

        if(educationalUnitAdd.value === "") {
            document.getElementById('educationalUnitAddLabel').classList.remove("hidden");
        } else {
            document.getElementById('educationalUnitAddLabel').classList.add("hidden");
        }

        if(educationalDocumentAdd.files.length == 0) {
            document.getElementById('educationalDocumentAddLabel').classList.remove("hidden");
        } else {
            document.getElementById('educationalDocumentAddLabel').classList.add("hidden");
        }
    }
</script>

