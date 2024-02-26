@extends('applicant.html.index')
@section('body')
    <div class="h-screen">

        {{-- Rounded with Border --}}

        <div class="mx-auto text-center mt-[3rem] bg-white opacity-90 rounded-3xl px-4 pt-5 shadow-lg justify-around w-4/12 ">
            <h1 class="font-bold text-xl mb-3">REGISTER</h1>
            <form class="grid text-lg" action="/applicant/register" method="POST">
                @csrf
                <label class="text-start font-semibold ">First Name</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="text"
                    name="first_name">
                <label class="text-start font-semibold ">Last Name</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="text"
                    name="last_name">
                <label class="text-start font-semibold ">Suffix</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="text" placeholder="Ex. Jr., Sr., II, III"
                    name="suffix_name">
                <label class="text-start font-semibold ">Sex</label>
                <input type="text" name="sex" id="sex" class="hidden">
                <select class="border py-1 rounded-full px-3 w-fit text-center" id="selectedSex" onchange="setSex()">
                    <option disabled selected value></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label class="text-start font-semibold ">Birthday</label>
                <div class="grid grid-cols-3 gap-1">

                    <div>Month</div>
                    <div>Day</div>
                    <div>Year</div>
                    <input type="text" name="month" id="month" class="hidden">
                    <input type="text" name="day" id="day" class="hidden">
                    <input type="text" name="year" id="year" class="hidden">
                    {{-------------------}}

                    {{-- Month --}}
                    <div>
                        <select class="border rounded-full p-2 px-3" name="month" id="selectedMonth" onchange="setMonth()">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    {{-- Day --}}
                    <div>
                        <select class="border rounded-full p-2 px-3" id="selectedDay" onchange="setDay()">
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
                    </div>
                    {{-- Year --}}
                    <div>
                        <input
                            class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                            type="number" max="2099" min="1990"
                            name="year">
                    </div>
                </div>

                <label class="text-start font-semibold ">Email</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="email"
                    name="email">
                <label class="text-start font-semibold">Password</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="password"
                    name="password">

                <button type="submit"
                    class=" mt-3 bg-navyblue text-white rounded-lg p-1 font-semibold hover:shadow-md">Register</button>

                <div class="my-3">
                    <hr>
                </div>
                <div class="grid">
                    Already have an account? <a href="/applicant/login" class="underline font-semibold cursor-pointer">Login</a>.
                </div>
            </form>
        </div>
        {{-- Modal --}}
        <div id="myModal" class="hidden z-0 top-0 right-0 left-0 bottom-0 bg-black/0 fixed ">

            <div class="modal fixed  rounded-xl  text-lg shadow-md mt-14 right-3 bg-white">
                <div class="my-3 cursor-pointer  hover:bg-gray-200 py-1 px-5">Account Settings</div>
                <div class="mx-3">
                    <hr>
                </div>
                <div class="my-3 cursor-pointer  hover:bg-gray-200 py-1 px-5">Log out</div>

            </div>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Function to toggle the modal display
            function toggleModal() {
                if (modal.style.display === "none" || modal.style.display === "") {
                    modal.style.display = "block";
                } else {
                    modal.style.display = "none";
                }
            }

            // Close the modal when clicking outside of it
            window.onclick = function(event) {
                if (event.target == modal) {
                    toggleModal();
                }
            }


            var month = document.getElementById('month');
            function setMonth() {
                var x = document.getElementById("selectedMonth").value;
                month.value = x;
            }

            var day = document.getElementById('day');
            function setDay() {
                var x = document.getElementById("selectedDay").value;
                day.value = x;
            }

            var sex = document.getElementById('sex');
            function setSex() {
                var x = document.getElementById("selectedSex").value;
                sex.value = x;
            }
        </script>
    </div>
@endsection
