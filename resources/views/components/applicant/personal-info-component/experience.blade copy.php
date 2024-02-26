<div id="experience" class="relative bg-green-500 text-center">
    <form action="/applicant/addExperience" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Experience</label>
        <br>
        <label for="">Position Title</label>
        <input type="text" name="title" class="border-2">
        <br>
        <label for="">Date Covered</label>
        <br>
        <label for="">Date Started</label>

        <input type="text" name="monthStarted" id="monthStarted" hidden>
        <input type="text" name="dayStarted" id="dayStarted" hidden>

        <select class="border rounded-full" name="monthStarted" id="selectedStartedMonth" onchange="setStartedMonth()">
            <option disabled selected value>----------</option>
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

        <select class="border rounded-full" name="dayStarted" id="selectedStartedDay" onchange="setStartedDay()">
            <option disabled selected value>--</option>
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
        <input
        class="border rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
        type="number" max="2099" min="1900"
        name="yearStarted">
        <br>

        <label for="">Date Ended</label>

        <input type="text" name="monthEnded" id="monthEnded" hidden>
        <input type="text" name="dayEnded" id="dayEnded" hidden>

        <select class="border rounded-full" name="monthEnded" id="selectedEndedMonth" onchange="setEndedMonth()">
            <option disabled selected value>----------</option>
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

        <select class="border rounded-full" name="dayEnded" id="selectedEndedDay" onchange="setEndedDay()">
            <option disabled selected value>--</option>
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
        <input
        class="border rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
        type="number" max="2099" min="1900"
        name="yearEnded">
        <br>
        <br>
        <label for="">Employer/Company</label>
        <input type="text" name="employer_company" class="border-2">
        <br>
        <label for="">Upload Document</label>
        <input type="file" name="document" class="border-2">
        <br>
        <button type="submit">Add</button>
    </form>
    <table>
        <thead>
            <tr>
                <th class="border">Position Title</th>
                <th class="border">Date Started</th>
                <th class="border">Date Ended</th>
                <th class="border">Years Covered</th>
                <th class="border">Employer/Company</th>
                <th class="border">Document</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($experience as $item)
                <tr>
                    <td class="text-center">{{$item->title}}</td>
                    <td class="text-center">{{$item->date_started}}</td>
                    <td class="text-center">{{$item->date_ended}}</td>
                    <td class="text-center">{{$item->years_covered}}</td>
                    <td class="text-center">{{$item->employer_or_company}}</td>
                    <td class="text-center">{{$item->document}}</td>
                    <td class="text-center">
                        <form action="#" class="p-0 m-0">
                            <button class="p-0 m-0">Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>