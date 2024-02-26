<form class="pt-12" action="/applicant/addExperience" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- Experience --}}

    <h1 id="experience" class="font-bold text-left p-4">III. Experience</h1>
    <div class="grid grid-cols-3 gap-1">
        <div>
            <h1 class="font-semibold">Position Title</h1>
            <input onkeyup="xpButtonDisabler()" class="input-default w-full" type="text" name="title" id="exAddID" placeholder="Position Title">
            <label for="exAddID" id="exAddIDLabel" class="text-red-500 hidden">Field is Required</label>
        </div>

        <div>
            <h1 class="font-semibold">Date Started(Date Covered)</h1>
            <div class="flex justify-center">
                <div>
                    <select onchange="xpButtonDisabler()" class="border text-center m-1 w-full rounded-xl p-2 px-3" name="monthStarted" id="selectedStartedMonth">
                        <option disabled selected value>Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div>
                    <select onchange="xpButtonDisabler()" class="border text-center m-1 w-full rounded-xl p-2 px-3" name="dayStarted" id="selectedStartedDay">
                        <option disabled selected value>Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div>
                    <input onkeyup="xpButtonDisabler()"
                        class="text-center w-full rounded-xl  m-1 py-2 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                        type="number" max="2099" min="1900" placeholder="Year"
                        name="yearStarted" id="xpAddStartedYear">
                </div>
            </div>

            <label id="xpDateStartedLabel" class="text-red-500 hidden">Field is Required</label>
        </div>
        {{-- Date Ended --}}
        <div>
            <h1 class="font-semibold">Date Ended(Date Covered)</h1>
            <div class="flex justify-center">
                <div>
                    <select onchange="xpButtonDisabler()" class="border text-center rounded-xl w-full m-1 p-2 px-3" name="monthEnded" id="selectedEndedMonth">
                        <option disabled selected value>Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div>
                    <select onchange="xpButtonDisabler()" class="border text-center rounded-xl w-full m-1 p-2 px-3" name="dayEnded" id="selectedEndedDay">
                        <option disabled selected value>Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>

                    </select>
                </div>
                <div>
                    <input onkeyup="xpButtonDisabler()"
                        class="text-center w-full rounded-xl m-1 py-2 px-3  focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                        type="number" max="2099" min="1900" placeholder="Year"
                        name="yearEnded" id="xpAddEndedYear">
                </div>

            </div>
            <label id="xpDateEndedLabel" class="text-red-500 hidden">Field is Required</label>
        </div>
        <div>
            <h1 class="font-semibold">Employer/Company</h1>
            <input onkeyup="xpButtonDisabler()" class="input-default  w-full" type="text" name="employer_company" id="exAddEmployerCompany" placeholder="Position Title">
            <label id="exAddEmployerCompanyLabel" class="text-red-500 hidden">Field is Required</label>
        </div>
        <div>
            <h1 class="font-semibold">Attach a file</h1>
            <div class="rounded-xl p-1.5 m-1 bg-white overflow-hidden">
                <label for="upload">
                    <input onchange="xpButtonDisabler()" type="file" accept="application/pdf" name="document" id="xpAddDocument" title="input">
                </label>
            </div>
            <label id="xpAddDocumentLabel" class="text-red-500 hidden">Field is Required</label>
        </div>
        <div>
            <h1 class="font-semibold invisible">Add</h1>
            <button disabled type="submit" id="exSubmitButton" class="p-2 m-1 rounded-xl bg-white w-full">
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
                <th class="border border-white p-3">Position Title</th>
                <th class="border border-white p-3">Date Started</th>
                <th class="border border-white p-3">Date Ended</th>
                <th class="border border-white p-3">Years Covered</th>
                <th class="border border-white p-3">Employer/Company</th>
                <th class="border border-white p-3">Document</th>
                <th class="border border-white p-3">Action</th>
            </tr>
        </thead>

        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($experience as $item)
                <tr>
                    <td class="p-1 border-r">{{$item->title}}</td>
                    <td class="p-1 border-r">{{$item->date_started}}</td>
                    <td class="p-1 border-r">{{$item->date_ended}}</td>
                    <td class="p-1 border-r">
                        {{ $item->years_covered }} 
                        Year/s
                        @if ($item->months_covered > 0)
                            and
                            {{$item->months_covered}}
                            Month/s
                        @endif
                    </td>
                    <td class="p-1 border-r">{{$item->employer_or_company}}</td>
                    <td class="p-1 border-r underline">
                        <a href="/uploads/experience/{{ $item->document }}" target="_blank">{{ $item->document }}</a>
                    </td>
                    <td class="text-center">
                        <button onclick='ExperiencemyEditmodalFunction({{$i}})'
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





{{-- III. Experience --}}
<div id="ExperiencemyEditModal" class="z-20 hidden h-screen bg-black/70 w-screen fixed top-0 left-0 right-0">
    <div class="modal-content grid overflow-auto m-auto mt-0.5 sm:mt-0.5 md:mt-0.5 lg:mt-12 xl:mt-12 h-[40%] w-[20%]">
        <div class="w-full flex justify-center">
            <div class="rounded-3xl py-2 bg-white fixed">
                <form class="grid px-12" action="/applicant/editExperience" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                    </div>
                    <h1 class="font-semibold">Position Title</h1>
                    <input type="text" name="id" id="experienceID" hidden>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        name="title" id="experienceTitle" title="input">
                    <h1 class="font-semibold">Date Started(Date Covered)</h1>
                    <div class="flex justify-center">
                        <div>
                            <select class="border border-navyblue text-center m-1 w-full rounded-xl p-2 px-3"
                                name="monthStarted" id="experienceMonthStarted">
                                <option value="Month">Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div>
                            <select class="border border-navyblue text-center m-1 w-full rounded-xl p-2 px-3"
                                name="dayStarted" id="experienceDayStarted">
                                <option value="Day">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
    
                            </select>
                        </div>
                        <div>
                            <input
                                class="text-center border-navyblue border w-full rounded-xl  m-1 py-2 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                                type="number" max="2099" min="1900" placeholder="Year"
                                name="yearStarted" id="experienceYearStarted">
                        </div>
    
    
    
                    </div>
    
                    <h1 class="font-semibold">Date Ended(Date Covered)</h1>
                    <div class="flex justify-center">
    
    
                        <div>
                            <select class="border border-navyblue text-center m-1 w-full rounded-xl p-2 px-3"
                                name="monthEnded" id="experienceMonthEnded">
                                <option value="Month">Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div>
                            <select class="border border-navyblue text-center m-1 w-full rounded-xl p-2 px-3"
                                name="dayEnded" id="experienceDayEnded">
                                <option value="Day">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
    
                            </select>
                        </div>
                        <div>
                            <input
                                class="text-center border-navyblue border w-full rounded-xl  m-1 py-2 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                                type="number" max="2099" min="1900" placeholder="Year"
                                name="yearEnded" id="experienceYearEnded">
                        </div>
    
    
    
                    </div>
    
                    <h1 class="font-semibold">Employer/Company</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        value="Employer/Company" title="input"
                        name="employer_company" id="employer_or_company">
    
                    <h1 class="font-semibold">Attach a file</h1>
                    <div class="rounded-xl p-2 m-1 bg-white border border-navyblue">
                        <label for="upload">
                            <input type="file" accept="application/pdf" name="document" id="upload" value="mini.jpeg" title="input">
                        </label>
                    </div>
                    <button onclick="ExperiencemyEditmodalFunction()"
                        class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Save</button>
                    <button 
                        type="button"
                        onclick="ExperiencemyEditmodalFunction2()"
                        class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>









<script>
    //get elements
    var xpID = document.getElementById('experienceID');
    var xpTitle = document.getElementById('experienceTitle');
    var xpMonthStarted = document.getElementById('experienceMonthStarted');
    var xpDayStarted = document.getElementById('experienceDayStarted');
    var xpYearStarted = document.getElementById('experienceYearStarted');
    var xpMonthEnded = document.getElementById('experienceMonthEnded');
    var xpDayEnded = document.getElementById('experienceDayEnded');
    var xpYearEnded = document.getElementById('experienceYearEnded');
    var xpEmployerOrCompany = document.getElementById('employer_or_company');

    // All exprerience
    var experiences = {!! json_encode($experience->toArray(), JSON_HEX_TAG) !!};

    // For Experience Edit button Modal
    function ExperiencemyEditmodalFunction(index) {

        var dateStartedArray = experiences[index]['date_started'].split('-');
        var dateEndedArray = experiences[index]['date_ended'].split('-');
        
        document.getElementById("ExperiencemyEditModal").classList.toggle("hidden");
        
        xpID.value = experiences[index]['id'];
        xpTitle.value = experiences[index]['title'];
        xpMonthStarted.value = dateStartedArray[0];
        xpDayStarted.value =  dateStartedArray[1];
        xpYearStarted.value = dateStartedArray[2];
        xpMonthEnded.value = dateEndedArray[0];
        xpDayEnded.value = dateEndedArray[1];
        xpYearEnded.value = dateEndedArray[2];
        xpEmployerOrCompany.value = experiences[index]['employer_or_company'];
    }

    // For Experience Edit button Modal
    function ExperiencemyEditmodalFunction2() {
        document.getElementById("ExperiencemyEditModal").classList.toggle("hidden");
    }

</script>

<script>
    //Disable submit button if empty

    //Get elements
    var exAddID = document.getElementById('exAddID');
    var selectedStartedMonth = document.getElementById('selectedStartedMonth');
    var selectedStartedDay = document.getElementById('selectedStartedDay');
    var xpAddStartedYear = document.getElementById('xpAddStartedYear');
    var selectedEndedMonth = document.getElementById('selectedEndedMonth');
    var selectedEndedDay = document.getElementById('selectedEndedDay');
    var xpAddEndedYear = document.getElementById('xpAddEndedYear');
    var exAddEmployerCompany = document.getElementById('exAddEmployerCompany');
    var xpAddDocument = document.getElementById('xpAddDocument');


    function xpButtonDisabler() {
        xpShowEmptyError();
	    if(
            exAddID.value==="" || 
            selectedStartedMonth.value==="" || 
            selectedStartedDay.value==="" || 
            xpAddStartedYear.value==="" || 
            selectedEndedMonth.value==="" || 
            selectedEndedDay.value==="" || 
            xpAddEndedYear.value==="" || 
            exAddEmployerCompany.value==="" || 
            xpAddDocument.files.length == 0
        ) { 
            document.getElementById('exSubmitButton').classList.add("bg-white");
            document.getElementById('exSubmitButton').classList.remove("bg-green-500");
            document.getElementById('exSubmitButton').classList.remove("text-white");
            document.getElementById('exSubmitButton').classList.remove("font-bold");
            document.getElementById('exSubmitButton').disabled = true;
        } else {
            document.getElementById('exSubmitButton').classList.remove("bg-white");
            document.getElementById('exSubmitButton').classList.add("bg-green-500");
            document.getElementById('exSubmitButton').classList.add("text-white");
            document.getElementById('exSubmitButton').classList.add("font-bold");
            document.getElementById('exSubmitButton').disabled = false;
        }
    }

    function xpShowEmptyError() {
        //Title
        if(exAddID.value === "") {
            document.getElementById('exAddIDLabel').classList.remove("hidden");
        } else {
            document.getElementById('exAddIDLabel').classList.add("hidden");
        }
        //Started Date
        if(selectedStartedMonth.value === "" || selectedStartedDay.value === "" || xpAddStartedYear.value === "") {
            document.getElementById('xpDateStartedLabel').classList.remove("hidden");
        } else {
            document.getElementById('xpDateStartedLabel').classList.add("hidden");
        }
        //Ended Month
        if(selectedEndedMonth.value === "" || selectedEndedDay.value === "" || xpAddEndedYear.value === "") {
            document.getElementById('xpDateEndedLabel').classList.remove("hidden");
        } else {
            document.getElementById('xpDateEndedLabel').classList.add("hidden");
        }
        //Employer
        if(exAddEmployerCompany.value === "") {
            document.getElementById('exAddEmployerCompanyLabel').classList.remove("hidden");
        } else {
            document.getElementById('exAddEmployerCompanyLabel').classList.add("hidden");
        }
        //Documents
        if(xpAddDocument.files.length == 0) {
            document.getElementById('xpAddDocumentLabel').classList.remove("hidden");
        } else {
            document.getElementById('xpAddDocumentLabel').classList.add("hidden");
        }

    }
</script>
