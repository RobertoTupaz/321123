@extends('personel.html.index')
@section('body')
    <div class="mx-auto  text-center mt-[1rem] opacity-95  bg-white  rounded-2xl p-3  shadow-lg  max-w-6xl  mb-28">


        <div class="grid bg-white rounded-xl overflow-y-scroll p-3">

            <div>

                <h1 class="font-bold text-center py-q">PERSONEL PAGE VIEW</h1>
                <h1 class="font-semibold text-center py-1">View Applicant Page</h1>


                {{-- Table --}}
                <div class=" bg-white   ">

                    {{-- Upper --}}
                    <div class="grid mt-0.5  mb-2">
                        <table>
                            <thead class="bg-navyblue   text-gray-200 ">
                                <tr>
                                    <th class="border border-white p-3">Position</th>
                                    <th class="border border-white p-3">Plantilla Item No.</th>
                                    <th class="border border-white p-3">Report</th>
                                    <th class="border border-white p-3">Category</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr class="border-b">
                                    <td class="p-1 border-r">ADAS I</td>
                                    <td class="p-1 border-r">34234234</td>
                                    <td class="p-1 border-r">Initial Evaluation Report</td>

                                    <td class="p-1 border-r">MATH</td>



                                </tr>
                            </tbody>
                        </table>

                    </div>



                    {{-- Lower --}}
                    <div class="grid mt-0.5 ">
                        <table>
                            <thead class="bg-navyblue   text-gray-200 ">
                                <tr>
                                    <th class="border border-white p-3">Application Code</th>
                                    <th class="border border-white p-3">Applicant's Name</th>
                                    <th class="border border-white p-3">Education</th>
                                    <th class="border border-white p-3">Training</th>
                                    <th class="border border-white p-3">Experience</th>
                                    <th class="border border-white p-3">Remarks (Qualified/Disqualified)</th>

                                    <th class="border border-white p-3">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($application as $item)
                                    @foreach ($applicants as $item2)
                                        @if ($item->user1_applicant_id == $item2->id)
                                            <tr class="border-b">
                                                <td class="p-1 border-r">{{ $item->id }}</td>
                                                <td class="p-1 border-r">{{ $item2->first_name . ' ' . $item2->last_name }}
                                                </td>
                                                <td class="p-1 border-r">
                                                    @foreach ($education as $item3)
                                                        @if ($item3->user1_applicant_id == $item2->id)
                                                            {{$item3->educational_attainment}}
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </td>

                                                <td class="p-1 border-r">
                                                    @foreach ($training as $item3)
                                                        @if ($item3->user1_applicant_id == $item2->id)
                                                            {{$item3->title}}
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </td>


                                                <td class="p-1 border-r">
                                                    @foreach ($experience as $item3)
                                                        @if ($item3->user1_applicant_id == $item2->id)
                                                            {{$item3->years_covered}} year/s
                                                            @if ($item3->months_covered > 0)
                                                                and <br>
                                                                {{$item3->months_covered}}
                                                                Month/s
                                                            @endif 
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </td>
                                                {{-- Qualified or Not Qualified --}}
                                                <td class="p-1 border-r">

                                                        @if ($item->remarks == 'disqualified')
                                                            <select class="input-default" name="remarks" id="remarks" title="remarks">
                                                                <option value="disqualified">disqualified</option>
                                                                <option value="qualified">qualified</option>
                                                            </select>
                                                        @endif
                                                        @if ($item->remarks == 'qualified')
                                                            <select class="input-default" name="remarks" id="remarks" title="remarks">
                                                                <option value="qualified">qualified</option>
                                                                <option value="disqualified">disqualified</option>
                                                            </select>
                                                        @endif
                                                        @if ($item->remarks == null)
                                                            <select onclick="addRemark({{$item->id}})" class="input-default" name="remarks" id="{{$item->id}}" title="remarks">
                                                                <option selected disabled value></option>
                                                                <option value="qualified">qualified</option>
                                                                <option value="disqualified">disqualified</option>
                                                            </select>
                                                        @endif
                                                </td>
                                                <td class="p-1 ">
                                                    <div class="flex gap-1.5 justify-center">
                                                        <form target="_blank" action="/personel/applicantInfo"
                                                            method="POST" class="p-0 m-0">
                                                            @csrf
                                                            <input type="text" name="application_id"
                                                                value="{{ $item->id }}" hidden>
                                                            <button type="submit"
                                                                class="font-semibold  underline px-1 py-1 rounded-lg p-1 bg-navyblue text-white ">
                                                                View
                                                            </button>
                                                        </form>
                                                        <button
                                                            class="font-semibold  underline px-1 py-1 rounded-lg p-1 bg-navyblue text-white "
                                                            onclick="EvaluationmodalFunction({{ $item->id }})">
                                                            Evaluate
                                                        </button>
                                                        <form class="p-0 m-0" target="_blank" action="/personel/printEvaluationLetter" method="POST">
                                                            @csrf
                                                            <input type="text" name="id" value="{{$item->id}}" hidden>
                                                            <button type="submit"
                                                                class="font-semibold  underline px-1 py-1 rounded-lg p-1 bg-navyblue text-white">
                                                                Print(Letter)
                                                            </button>
                                                        </form>
                                                        <button
                                                            class="font-semibold text-nowrap underline px-1 py-1 rounded-lg p-1 bg-navyblue text-white"
                                                            onclick="ChangePositionFunction()">
                                                            Change Position
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @break
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>

                    </div>



                </div>
            </div>
        </div>







        {{-- Evaluate Modal --}}
        <div id="EvaluationModal" class="fixed hidden h-screen bg-black/70 w-screen  top-0 left-0 right-0">
            <div class="bg-red-500 w-full flex justify-center">
                <div class="rounded-3xl px-14 py-8 bg-white justify-around grid mt-8 fixed">
                    <form action="/personel/evaluateApplicant" method="POST">
                        @csrf
                        <input type="text" name="id" id="applicationEditID" hidden>
                        <input type="text" name="jobID" value="{{$jobID}}" hidden>
                        <div class="px-12 grid">
                            <div>
                                <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                            </div>
    
                            <div class="font-bold">View Individual Evaluation Result for (Teacher I)</div>
                            <div class="font-semibold">REMARKS:</div>
                            <div class="text-rose-500">Select if Qualified or Not Qualified</div>
                            <div class="flex justify-between">
                                <h1 class="font-semibold my-auto">Education:</h1>
    
                                <select name="education" id="applicationEditEducation"
                                    class="border p-3 border-navyblue focus:ring-0 outline-0 input-default">
                                    <option value="">Select</option>
                                    <option value="qualified">Qualified</option>
                                    <option value="disqualified">Not Qualified</option>
                                </select>
    
                            </div>
    
                            <div class="flex justify-between ">
                                <h1 class="font-semibold my-auto">Experience:</h1>
    
                                <select name="experience" id="applicationEditExperience"
                                    class="border p-3 border-navyblue focus:ring-0 outline-0 input-default">
                                    <option value="">Select</option>
                                    <option value="qualified">Qualified</option>
                                    <option value="disqualified">Not Qualified</option>
                                </select>
    
                            </div>
                            <div class="flex justify-between">
                                <h1 class="font-semibold my-auto">Training:</h1>
    
                                <select name="training" id="applicationEditTraining"
                                    class="border p-3 border-navyblue focus:ring-0 outline-0 input-default">
                                    <option value="">Select</option>
                                    <option value="qualified">Qualified</option>
                                    <option value="disqualified">Not Qualified</option>
                                </select>
    
                            </div>
                            <div class="flex justify-between">
                                <h1 class="font-semibold my-auto">Eligibility:</h1>
    
                                <select name="eligibility" id="applicationEditEligibility"
                                    class="border p-3 border-navyblue focus:ring-0 outline-0 input-default">
                                    <option value="">Select</option>
                                    <option value="qualified">Qualified</option>
                                    <option value="disqualified">Not Qualified</option>
                                </select>
                            </div>
                            <div class="grid mt-1">
                                <button type="submit"
                                    class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Submit</button>
                                <button onclick="EvaluationmodalFunction2()" type="button"
                                    class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
    
                            </div>
    
                        </div>
                    </form>
                </div>
            </div>
        </div>










        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            //save remarks
            async function addRemark(applicationIDID) {
                try {
                    let newRemark = document.getElementById(applicationIDID).value;
                    let newRemarkData = {
                        id: applicationIDID,
                        remarks: newRemark
                    };
                    let result = await axios.post('/personel/addRemarks', newRemarkData)
                    .then(function (response) {
                        // handle success
                        console.log(response);
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .finally(function () {
                        // always executed
                    });
                } catch (error) {
                    console.log(error);
                }
            }


            //printLetter
            async function printLetter(applicationIDID) {
                try {
                    let printLetter = await axios.post('/personel/printEvaluationLetter', {id: applicationIDID})
                    .then(function (response) {
                        // handle success
                        console.log(response);
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .finally(function () {
                        // always executed
                    });
                } catch (error) {
                    console.log(error);
                }
            }
        </script>




        <script>
            // ----------------------------------------------------------------
            // For Evaluate Edit button Modal
            let applicationEditID = document.getElementById('applicationEditID');

            function EvaluationmodalFunction(id) {
                EvaluationmodalFunction2();

                applicationEditID.value = id;
            }

            function EvaluationmodalFunction2() {
                document.getElementById("EvaluationModal").classList.toggle("hidden");
            }

            // ----------------------------------------------------------------

            // ChangePositionModal

            // For Change Position Modal
            function ChangePositionFunction(data) {
                document.getElementById("ChangePositionModal").classList.toggle("hidden");
            }

            function CHangePositionhandleClick() {
                var input = document.getElementById("ChangePosition");
                ChangePositionFunction();
            }
        </script>

        {{-- Change Position Modal --}}
        <div id="ChangePositionModal" class="fixed hidden h-screen bg-black/70 w-screen  top-0 left-0 right-0">
            <div class="bg-red-500 w-full flex justify-center">
                <div class="rounded-3xl px-14 py-8 bg-white justify-around grid mt-8 fixed">

                    <div class="px-12 grid">
                        <div>
                            <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                        </div>

                        <div class="font-bold">Change Position</div>

                        <div class="flex justify-between">
                            <h1 class="font-semibold my-auto">From:</h1>

                            <input class="input-default border-navyblue border outline-0" type="text" placeholder="">

                        </div>
                        <div class="flex justify-between ">
                            <h1 class="font-semibold my-auto">To:</h1>

                            <div>
                                <input class="input-default border-navyblue border outline-0 " type="text"
                                    placeholder="" oninput="handleSearch(this.value)">
                                <div id="suggestions" class="mt-2"></div>

                            </div>
                        </div>

                        <div class="grid mt-1">
                            <button onclick="ChangePositionFunction()"
                                class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Move
                                Position</button>
                            <button onclick="ChangePositionFunction()"
                                class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
