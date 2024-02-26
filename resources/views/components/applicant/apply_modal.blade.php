{{-- Apply Modal --}}
<div id="ApplyModal" class="fixed hidden h-screen bg-black/70 top-0 left-0 right-0 ">
    <div class=" w-full h-full flex justify-center ">
        <div class="rounded-3xl py-8  bg-white mt-8 mb-8 overflow-auto mx-28">
            <form action="/applicant/applyNow" method="POST" enctype="multipart/form-data" class="px-12 grid">
                @csrf
                <input type="text" name="academicLevel" id="academicLevelInput" hidden>

                <div>
                    <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                </div>
                <h1 class="text-center font-bold text-lg">LETTER OF INTENT</h1>
                <input type="text" name="job_id" id="jobApplyID" hidden>
                {{-- 
                    'job_id' => ['required'],
                    'application_id' => ['required'],
                    'is_teacher_1' => ['required'],
                    'letter_of_intent' => ['required'],
                    'academic_level' => ['required'],
                    'specialty' => ['required'],    
                --}}
                <div class="flex gap-1 grid-cols-2">
                    <div class="mt-2">
                        <h1 class="font-semibold mt-2">Position Title:</h1>
                    </div>
                    <div> <input
                            class="border-b border-navyblue focus:ring-0 outline-0 text-center font-semibold py-3 m-1"
                            type="text" name="appliedPosition" id="appliedPosition" title="input" readonly></div>
                </div>
                <h1 class="font-semibold">Upload PDF:</h1>
                <div class="rounded-xl p-2 m-1 bg-white border border-navyblue">
                    <label for="upload">
                        <input type="file" accept="application/pdf" id="upload" name="document" title="input">
                    </label>
                </div>
                {{-- Hover Test --}}
                {{-- <div>
                    <div class="z-20 hidden" id="academicSelectionDiv">
                        <h1 class="font-semibold">Academic Level:</h1>
                        <select name="academicLevel" onchange="showAcademicSelected()" class="input-default border border-navyblue w-full" name="" id="academicSelect">
                            <option disabled selected value></option>
                            <option value="SHS">Senior High School (SHS)</option>
                            <option value="JHS">Junior High School (JHS)</option>
                            <option value="ELEM">Elementary</option>
                        </select>
                    </div>
                </div> --}}

                {{-- Senior High School --}}
                <div id="SHSModal" class="z-10 px-8 hidden pt-2 border rounded-2xl bg-white text-black  pb-8 shadow-md">
                    {{-- <div class="flex justify-between mx-1 -mr-5">
                        <div></div>
                        <div>
                            <img onclick="SHSmodalFunction()" class="w-5 my-3 cursor-pointer" src="\images\x-mark.png"
                                alt="">
                        </div>
                    </div> --}}
                    <h1 class=" font-bold rounded-xl bg-navyblue p-1 text-center text-white"> ACADEMIC LEVEL
                        (Senior High School)</h1>

                    {{-- HUMSS --}}
                    <div
                        class="mt-5 font-semibold text-center bg-navyblue rounded-xl w-fit mx-auto p-1 text-white mb-3">
                        HUMANITIES AND SOCIAL SCIENCES (HUMSS) </div>

                    <div class="grid grid-cols-2 gap-1 ">


                        {{-- A.HUMSS --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="humss_a" name="specializationRadio">
                                </div>
                                <div>A.</div>
                            </div>
                            <div class="grid gap-0.5 ">
                                <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Oral Communication</div>
                                </div>
                                <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div> Reading and Writing</div>
                                </div>
                                <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>English for Academic</div>
                                </div>
                                <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Professional Purposes</div>
                                </div>
                                <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Practical Research</div>
                                </div>
                            </div>

                        </div>


                        {{-- -----B.HUMSS----- --}}

                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="humss_b" name="specializationRadio">
                                </div>
                                <div>B.</div>
                            </div>


                            <div class="grid gap-0.5 ">
                                <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</div>
                                </div>
                                <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Pagbasa at Pagsusuri ng Iba’t ibang Teksto sa Pananaliksik</div>
                                </div>
                                <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Pagsulat sa Filipino sa Piling Larangan</div>
                                </div>





                            </div>
                        </div>
                        {{-- -----C.HUMSS----- --}}

                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="humss_c" name="specializationRadio">
                                </div>
                                <div>C.</div>
                            </div>
                            <div class="grid gap-0.5 ">
                                <div class="flex gap-1 border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</div>
                                </div>
                                <div class="flex gap-1 border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Pagbasa at Pagsusuri ng Iba’t ibang Teksto sa Pananaliksik</div>
                                </div>
                                <div class="flex gap-1 border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Pagsulat sa Filipino sa Piling Larangan</div>
                                </div>


                            </div>
                        </div>
                        {{-- -----D.HUMSS----- --}}

                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="humss_d" name="specializationRadio">
                                </div>
                                <div>D.</div>
                            </div>
                            <div class="grid gap-0.5 ">
                                <div class="flex gap-1 border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Media and Information Literacy; Empowerment Technologies</div>
                                </div>



                            </div>
                        </div>

                    </div>

                    {{-- Division --}}
                    <div class="mt-5 border border-navyblue">
                    </div>

                    {{-- ABM --}}
                    <div
                        class="mt-5 font-semibold text-center bg-navyblue rounded-xl w-fit mx-auto p-1 text-white mb-3">
                        ACCOUNTANCY, BUSINESS, AND MANAGEMENT (ABM) </div>
                    <div class="grid grid-cols-2 gap-1">


                        {{-- A. --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="abm" name="specializationRadio">
                                </div>
                                <div>ACCOUNTANCY, BUSINESS, AND MANAGEMENT (ABM) & ENTREPRENEURSHIP, RESEARCH AND
                                    WORK IMMERSION</div>
                            </div>


                        </div>


                    </div>


                    {{-- Division --}}
                    <div class="mt-5 border border-navyblue">
                    </div>


                    {{-- STEM --}}
                    <div
                        class="mt-5 font-semibold text-center bg-navyblue rounded-xl w-fit mx-auto p-1 text-white mb-3">
                        SCIENCE, TECHNOLOGY, ENGINEERING, AND MATHEMATICS (STEM)</div>
                    <div class="grid grid-cols-2 gap-1">


                        {{-- A.STEM --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="stem_a" name="specializationRadio">
                                </div>
                                <div>A.</div>
                            </div>
                            <div class="grid gap-0.5 ">
                                <div class="flex gap-1 border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>General Mathematics</div>
                                </div>
                                <div class="flex gap-1 border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Statistics and Probability and related specialized STEM subjects</div>
                                </div>
                            </div>
                        </div>

                        {{-- B.STEM --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="stem_b" name="specializationRadio">
                                </div>
                                <div>B.</div>
                            </div>
                            <div class="grid gap-0.5 ">
                                <div class="flex gap-1 border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Earth Science</div>
                                </div>
                                <div class="flex gap-1 border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Earth and Life Science</div>
                                </div>
                                <div class="flex gap-1 border rounded-xl px-2 py-1 cursor-pointer">
                                    <div class="my-auto ">
                                        •
                                    </div>
                                    <div>Physical Science and related specialized STEM subjects</div>
                                </div>


                            </div>



                        </div>
                    </div>

                    {{-- Division --}}
                    <div class="mt-5 border border-navyblue">
                    </div>



                    {{-- TVL --}}
                    <div
                        class="mt-5 font-semibold text-center bg-navyblue rounded-xl w-fit mx-auto p-1 text-white mb-3">
                        TECHNICAL-VOCATIONAL-LIVELIHOOD (TVL)</div>
                    <div class="grid grid-cols-2 gap-1">


                        {{-- A.TVL --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="tvl_a" name="specializationRadio">
                                </div>
                                <div>A Specialized TVL/Agri-Fisheries</div>
                            </div>

                        </div>

                        {{-- B.TVL --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="tvl_b" name="specializationRadio">
                                </div>
                                <div>B.Specialized TVL/Industrial Arts</div>
                            </div>




                        </div>
                        {{-- C.TVL --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="tvl_c" name="specializationRadio">
                                </div>
                                <div>C. Specialized TVL/ICT </div>
                            </div>




                        </div>
                        {{-- D.TVL --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer accent-navyblue" type="radio" value="tvl_d" name="specializationRadio">
                                </div>
                                <div>D. Specialized TVL/Home Economics</div>
                            </div>

                        </div>
                    </div>

                    {{-- Division --}}
                    <div class="mt-5 border border-navyblue">
                    </div>



                    {{-- SPORTS --}}
                    <div
                        class="mt-5 font-semibold text-center bg-navyblue rounded-xl w-fit mx-auto p-1 text-white mb-3">
                        SPORTS</div>
                    <div class="grid grid-cols-2 gap-1">


                        {{-- SPORTS --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer  accent-navyblue " type="radio"
                                        value="sports" name="specializationRadio">
                                </div>
                                <div>Physical Education and Health, Personal Development and related specialized
                                    Sports Subjects</div>
                            </div>

                        </div>



                    </div>
                    {{-- Division --}}
                    <div class="mt-5 border border-navyblue">
                    </div>



                    {{-- ARTS & DESIGN --}}
                    <div
                        class="mt-5 font-semibold text-center bg-navyblue rounded-xl w-fit mx-auto p-1 text-white mb-3">
                        ARTS & DESIGN</div>
                    <div class="grid grid-cols-2 gap-1">


                        {{-- ARTS & DESIGN --}}
                        <div class="duration-300 ease-out p-1 rounded-xl border hover:shadow-md">
                            <div class="flex gap-1 font-semibold mt-1">
                                <div class="flex  my-auto">
                                    <input class="cursor-pointer  accent-navyblue " type="radio"
                                       value="artsAndDesign" name="specializationRadio">
                                </div>
                                <div>ARTS & DESIGN</div>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- Junior High School --}}
                <div id="JHSModal" class="z-10 px-8 hidden border rounded-2xl pt-2 bg-white text-black pb-8 shadow-md">
                    <div>
                        {{-- <div class="flex justify-between mx-1 -mr-5">
                            <div></div>
                            <div>
                                <img onclick="JHSmodalFunction()" class="w-5 my-3 cursor-pointer"
                                    src="\images\x-mark.png" alt="">
                            </div>
                        </div> --}}
                        <h1 class=" font-bold rounded-xl bg-navyblue p-1 text-center text-white"> ACADEMIC LEVEL
                            (Junior High School)</h1>
                        <div
                            class="mt-2 font-semibold text-center bg-navyblue rounded-xl w-fit mx-auto p-1 text-white mb-3">
                            Junior High School Specialization </div>

                        <div class=" ">
                            {{-- ------- --}}

                            {{-- JHS --}}
                            <div class="p-1 rounded-xl ">

                                <div class="grid gap-0.5 ">
                                    <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                        <div class="my-auto ">
                                            <input type="radio" value="english" name="specializationRadio"
                                                class="accent-navyblue cursor-pointer">
                                        </div>
                                        <div>English</div>
                                    </div>
                                    <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                        <div class="my-auto ">
                                            <input type="radio" value="science" name="specializationRadio"
                                                class="accent-navyblue cursor-pointer">
                                        </div>
                                        <div>Science</div>
                                    </div>
                                    <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                        <div class="my-auto ">
                                            <input type="radio" value="math" name="specializationRadio"
                                                class="accent-navyblue cursor-pointer">
                                        </div>
                                        <div>Mathematics</div>
                                    </div>
                                    <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                        <div class="my-auto ">
                                            <input type="radio" value="filipino" name="specializationRadio"
                                                class="accent-navyblue cursor-pointer">
                                        </div>
                                        <div>Filipino</div>
                                    </div>
                                    <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                        <div class="my-auto ">
                                            <input type="radio" value="ap" name="specializationRadio"
                                                class="accent-navyblue cursor-pointer">
                                        </div>
                                        <div>Araling Panlipunan</div>
                                    </div>
                                    <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                        <div class="my-auto ">
                                            <input type="radio" value="tvl" name="specializationRadio"
                                                class="accent-navyblue cursor-pointer">
                                        </div>
                                        <div>TVL</div>
                                    </div>
                                    <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                        <div class="my-auto ">
                                            <input type="radio" value="mapeh" name="specializationRadio"
                                                class="accent-navyblue cursor-pointer">
                                        </div>
                                        <div>MAPEH</div>
                                    </div>
                                </div>

                            </div>

                            {{-- ------- --}}

                        </div>
                    </div>
                </div>





                {{-- Elementary --}}
                <div id="ELEMModal" class="z-10 px-8 hidden border rounded-2xl pt-2 bg-white text-black pb-8 shadow-md">
                    <div>
                        {{-- <div class="flex justify-between mx-1 -mr-5">
                            <div></div>
                            <div>
                                <img onclick="ELEMmodalFunction()" class="w-5 my-3 cursor-pointer"
                                    src="\images\x-mark.png" alt="">
                            </div>
                        </div> --}}
                        <h1 class=" font-bold rounded-xl bg-navyblue p-1 text-center text-white"> ACADEMIC LEVEL
                            (Elementary)</h1>


                        <div class="">
                            {{-- ------- --}}

                            {{-- ELEM --}}
                            <div class="p-1 rounded-xl ">

                                <div class="grid gap-0.5 ">
                                    <div class="flex gap-1  border rounded-xl px-2 py-1 cursor-pointer">
                                        <div class="my-auto ">
                                            <input type="radio" value="elem" checked name="specializationRadio"
                                                class="accent-navyblue cursor-pointer">
                                        </div>
                                        <div>ELEMENTARY</div>
                                    </div>

                                </div>

                            </div>

                            {{-- ------- --}}

                        </div>
                    </div>
                </div>


                {{-- Apply Button --}}
                <button type="submit"
                    class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Apply</button>
                <button type="button" onclick="ApplyModalFunction2()"
                    class="input-default mt-0.5 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
            </form>
        </div>
    </div>
</div>

<script>
    // For Apply button Modal
    var appliedPosition = document.getElementById('appliedPosition');
    var jobApplyID = document.getElementById('jobApplyID');
    var academicLevelInput = document.getElementById('academicLevelInput');

    function ApplyModalFunction(data, jobID, category) {
        console.log(data);
        ApplyModalFunction2();

        appliedPosition.value = data;
        jobApplyID.value = jobID;

        if(data == 'Teaching') {
            academicLevelInput.value = category;

            if (category == 'SHS') {
                SHSmodalFunction();
            } else if (category == 'JHS') {
                JHSmodalFunction();
            } else {
                ELEMmodalFunction();
            }
        } else {
            document.getElementById("SHSModal").classList.add("hidden");
            document.getElementById("JHSModal").classList.add("hidden");
            document.getElementById("ELEMModal").classList.add("hidden");
        }
    }

    function ApplyModalFunction2() {
        document.getElementById("ApplyModal").classList.toggle("hidden");
    }

    // ----------------------------------------------------------------


    // For SHS button Modal
    function SHSmodalFunction() {
        document.getElementById("SHSModal").classList.remove("hidden");
        document.getElementById("JHSModal").classList.add("hidden");
        document.getElementById("ELEMModal").classList.add("hidden");
    }

    // ----------------------------------------------------------------


    // JHSModal

    // For JHS button Modal
    function JHSmodalFunction() {
        document.getElementById("JHSModal").classList.remove("hidden");
        document.getElementById("SHSModal").classList.add("hidden");
        document.getElementById("ELEMModal").classList.add("hidden");
    }
    // ----------------------------------------------------------------


    // ELEMModal

    // For Elementary button Modal
    function ELEMmodalFunction() {
        document.getElementById("ELEMModal").classList.remove("hidden");
        document.getElementById("SHSModal").classList.add("hidden");
        document.getElementById("JHSModal").classList.add("hidden");
    }

</script>