{{-- Outstanding Accomplishment --}}
<h1 class="font-bold text-left p-4">VII. Outstanding Accomplishment</h1>
<div class="grid grid-cols-5 gap-1">
    <div>
        <h1 class="font-semibold">Title</h1>
        <input class="input-default  w-full" type="text" placeholder="Title">
    </div>
    <div>
        <h1 class="font-semibold">Type</h1>
        <input class="input-default  w-full" type="text" placeholder="Type">
    </div>

    <div>
        <h1 class="font-semibold">Attach a file</h1>
        <div class="rounded-xl p-2 m-1 bg-white">
            <label for="uploadFile">
                <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                <input class="w-full" type="file" accept="application/pdf" id="uploadFile" style="display:none">
                <h1 class=" text-gray-400">Add/Choose a file</h1>
            </label>
        </div>
    </div>
    <div>
        <h1 class="font-semibold invisible">Add</h1>
        <button class="p-2 m-1 rounded-xl bg-white w-full">
            Add
        </button>
    </div>

</div>

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
            <tr class="border-b ">
                <td class="p-1 border-r">Title</td>
                <td class="p-1 border-r">Year</td>
                <td class="p-1 border-r">Rating</td>
                <td class="p-1 border-r">Documment/s.Pdf</td>
                <td class=" text-center ">
                    {{-- {!! json_encode($data) !!} --}}
                    <button onclick='OutstandingmyEditmodalFunction(1)'
                        class="border m-1 px-3 py-1 rounded-lg p-1 bg-navyblue text-white">
                        Edit
                    </button>
                </td>

            </tr>

        </tbody>

    </table>
</div>

<div class="mt-3 ">
    <hr>
</div>
