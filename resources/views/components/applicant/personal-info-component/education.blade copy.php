<div id="education" class="relative bg-green-500 text-center">
    <div id="educationModal" class="absolute bg-gray-400 w-full h-screen hidden">
        <div class="w-full h-full flex justify-center justify-items-center items-center">
            <div class="w-auto bg-blue-500" >
                <form action="/applicant/editEducation" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Edit Educational Attainment</label>
                    <input type="text" name="id" id="id" hidden>
                    <br>
                    <label for="">Educational Attainment</label>
                    <input type="text" name="educational_attainment" id="educational_attainment" class="border-2">
                    <br>
                    <label for="">Units (if not graduated)</label>
                    <input type="text" name="units" id="units" class="border-2">
                    <br>
                    <label for="">Upload Document</label>
                    <input type="file" name="document" id="document" class="border-2">
                    <br>
                    <button type="submit">Update</button>
                </form>
                <button onclick="editEducationModal2()" type="submit" class="bg-rose-500">Cancel</button>
            </div>
        </div>
    </div>
    <form action="/applicant/addEducation" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Education</label>
        <br>
        <label for="">Educational Attainment</label>
        <input type="text" name="educational_attainment" class="border-2">
        <br>
        <label for="">Units (if not graduated)</label>
        <input type="text" name="units" class="border-2">
        <br>
        <label for="">Upload Document</label>
        <input type="file" name="document" class="border-2">
        <br>
        <button type="submit">Add</button>
    </form>
    <table>
        <thead>
            <tr>
                <th class="border">Educational Attainment</th>
                <th class="border">Units (if not graduated)</th>
                <th class="border">Upload Document</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($educationalAttainment as $item)
                <tr>
                    <td class="text-center">{{$item->educational_attainment}}</td>
                    <td class="text-center">{{$item->units}}</td>
                    <td class="text-center">{{$item->document}}</td>
                    <td class="text-center">
                        <button class="p-0 m-0" 
                        onclick="editEducationModal($i)"
                        >
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

{{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}
<script>
    // Get the modal
    // var datas = {!! json_encode($educationalAttainment->toArray(), JSON_HEX_TAG) !!};

    var educationModal = document.getElementById('educationModal');

    var id = document.getElementById('id');
    var educational_attainment = document.getElementById('educational_attainment');
    var units = document.getElementById('units');
    var document = document.getElementById('document');

    // Function to toggle the modal display
    function editEducationModal(index) {
        editEducationModal2();

        id.value = datas[index]['id'];
        educational_attainment.value = datas[index]['educational_attainment'];
        units.value = datas[index]['units'];
        
    }

        // Function to toggle the modal display
    function editEducationModal2() {
        if (educationModal.style.display === "none" || educationModal.style.display === "") {
            educationModal.style.display = "block";
        } else {
            educationModal.style.display = "none";
        }
    }
</script>