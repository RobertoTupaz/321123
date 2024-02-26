@extends('personel.html.index')
@section('body')
    <div class="h-screen">
        {{-- Rounded with Border --}}

        <div
            class="mx-auto text-center mt-[9rem] bg-white opacity-90 rounded-3xl px-4 pt-5 shadow-lg justify-around w-4/12 ">
            <h1 class="font-bold text-xl mb-3">PERSONEL LOGIN</h1>
            <form class="grid text-lg" action="/personel/login" method="POST">
                @csrf
                <label class="text-start font-semibold ">Username</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="text"
                    name="username">
                <label class="text-start font-semibold">Password</label>
                <input
                    class="border w-full rounded-full  py-1 px-3 focus:outline-1 focus:ring-navyblue focus:ring-2 outline-none "
                    type="password"
                    name="password">
                <button type="submit"
                    class=" mt-3 bg-navyblue text-white rounded-lg p-1 font-semibold hover:shadow-md">Login</button>
                <div class="mt-3 cursor-pointer text-navyblue">
                    Forgot password?
                </div>
                <div class="my-3">
                    <hr>
                </div>
                <div class="grid">
                    Don't have an account? <a href="/applicant/register" class="underline font-semibold cursor-pointer">Create Account</a>.
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
        </script>
    </div>
@endsection
