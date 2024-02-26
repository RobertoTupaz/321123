{{-- Application of Learning & Development (L&D) acquired after the last promotion --}}
<h1 id="ld" class="font-bold text-left p-4 pt-12">IX. Application of Learning & Development (L&D) acquired after the
    last promotion</h1>
<form action="/applicant/addLD" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-3 gap-1">
        <div>
            <h1 class="font-semibold">Title</h1>
            <input onkeyup="ldButtonDisabler()" id="ldAddTitle" class="input-default w-full" type="text" name="title" placeholder="Title">
            <label id="ldAddTitleLabel" class="text-red-500 hidden">Field is Required</label>
        </div>
        <div>
            <h1 class="font-semibold">Attach a file</h1>
            <div>
                <input accept="application/pdf" onchange="ldButtonDisabler()" id="ldAddDocument" class="w-full rounded-xl p-1.5 m-1 bg-white" type="file" name="document">
                <label id="ldAddDocumentLabel" class="text-red-500 hidden">Field is Required</label>
            </div>
        </div>
        <div>
            <h1 class="font-semibold invisible">Add</h1>
            <button disabled id="ldAddButton" class="p-2 m-1 rounded-xl bg-white w-full">
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
                <th class="border border-white p-3">Documment/s</th>
                <th class="border border-white p-3">Action</th>
            </tr>
        </thead>

        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($ld as $item)
                <tr>
                    <td class="p-1 border-r">{{$item->title}}</td>
                    <td class="p-1 border-r underline">
                        <a href="/uploads/ld/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                    </td>
                    <td class=" text-center ">
                        <button onclick='DevelopmentmyEditmodalFunction({{$i}})'
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








{{-- VIII. Application of Education acquired after the last promotion --}}
<div id="DevelopmentmyEditModal" class="fixed hidden h-screen bg-black/70 w-screen  top-0 left-0 right-0">
    <div class="modal-content grid m-auto mt-0.5 sm:mt-0.5 md:mt-0.5 lg:mt-12 xl:mt-12 h-[40%] w-[20%]">
        <div class="flex w-full justify-center">
            <div class="rounded-3xl px-28 py-8 bg-white justify-around mt-8 fixed">
                <form action="/applicant/editLD" method="POST" enctype="multipart/form-data" class="grid">
                    @csrf
                    <input type="text" name="id" id="learningID" hidden>
                    <div>
                        <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                    </div>
                    <h1 class="font-semibold">Title</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        name="title" id="learningTitle" title="input">
    
                    <h1 class="font-semibold">Attach a file</h1>
                    <div class="rounded-xl p-2 m-1 bg-white border border-navyblue">
                        <label for="upload">
                            <input type="file" accept="application/pdf" name="document" title="input">
                        </label>
                    </div>
                    <button type="submit"
                        class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Save</button>
                    <button type="button" onclick="DevelopmentmyEditmodalFunction2()"
                        class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    //LD data
    var learningDatass = {!! json_encode($ld->toArray(), JSON_HEX_TAG) !!};

    //   DevelopmentmyEditModal
    var learningID = document.getElementById('learningID');
    var learningTitle = document.getElementById('learningTitle');

    // For Development Edit button Modal
    function DevelopmentmyEditmodalFunction(index) {

        DevelopmentmyEditmodalFunction2();

        learningID.value = learningDatass[index]['id'];
        learningTitle.value = learningDatass[index]['title'];
    }

    function DevelopmentmyEditmodalFunction2() {

        document.getElementById("DevelopmentmyEditModal").classList.toggle("hidden");
    }

</script>

<script>
    //Disable submit button if empty

    //Get elements aoeaaAddDocument
    var ldAddTitle = document.getElementById('ldAddTitle');
    var ldAddDocument = document.getElementById('ldAddDocument');

    function ldButtonDisabler() {
        ldShowEmptyError();
	    if(ldAddTitle.value==="" || 
            ldAddDocument.files.length == 0
        ) { 
            document.getElementById('ldAddButton').classList.add("bg-white");
            document.getElementById('ldAddButton').classList.remove("bg-green-500");
            document.getElementById('ldAddButton').classList.remove("text-white");
            document.getElementById('ldAddButton').classList.remove("font-bold");
            document.getElementById('ldAddButton').disabled = true;
        } else {
            document.getElementById('ldAddButton').classList.remove("bg-white");
            document.getElementById('ldAddButton').classList.add("bg-green-500");
            document.getElementById('ldAddButton').classList.add("text-white");
            document.getElementById('ldAddButton').classList.add("font-bold");
            document.getElementById('ldAddButton').disabled = false;
        }
    }

    function ldShowEmptyError() {
        if(ldAddTitle.value === "") {
            document.getElementById('ldAddTitleLabel').classList.remove("hidden");
        } else {
            document.getElementById('ldAddTitleLabel').classList.add("hidden");
        }

        if(ldAddDocument.files.length == 0) {
            document.getElementById('ldAddDocumentLabel').classList.remove("hidden");
        } else {
            document.getElementById('ldAddDocumentLabel').classList.add("hidden");
        }
    }
</script>