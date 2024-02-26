{{-- Modal --}}
<div id="myModal" onclick="toggleModal()" class="hidden z-0 top-0 right-0 left-0 bottom-0 bg-black/0 fixed ">

    <div class="modal fixed  rounded-xl  text-lg shadow-md mt-14 right-3 bg-white">
        <a href="/applicant/personalInfo">
            <div class="my-3 cursor-pointer  hover:bg-gray-200 py-1 px-5">Account Settings</div>
        </a>
        <div class="mx-3">
            <hr>
        </div>
        <form action="/applicant/logout" method="POST">
            @csrf
            <button type="submit" class="w-full my-3 cursor-pointer hover:bg-gray-200 pt-1 px-5">Log out</button>
        </form>
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
</script>