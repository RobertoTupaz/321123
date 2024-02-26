{{-- Modal --}}
<div id="menu" class=" h-screen hidden fixed top-0 right-0 -left-80 bg-black/0">
    <div id="menu-content" class="h-screen popin text-center bg-white w-[17rem] mt-[4rem] rounded-tr-3xl">
        <div class="cursor-pointer  mr-6 pt-3 rounded-full">
            <!-- Close mark -->
            <div class="flex justify-between">
                <div></div>
                <div>
                    <button id="close-menu">
                        <img class="w-5 h-5" src="/images/x-mark.png" alt="close">
                    </button>
                </div>
            </div>
        </div>
        <div class="flex p-3 gap-2 mb-3">
            <div>
                <img class="w-14 " src="/images/user.png" alt="">
            </div>
            <div class="mt-1">
                <div>Division of Malaybalay City</div>
                <div>depEdCasisang@gmail.com</div>
            </div>

        </div>
        <div class="px-3">
            <hr>
        </div>
        <div>
            <a href="/"
                class="block px-4 py-4 font-semibold text-gray-800 duration-300 ease-out hover:bg-gray-200">
                Dashboard
            </a>
        </div>
        <div class="px-3">
            <hr>
        </div>
        <div>
            <a href="/applicant/applicationHistory"
                class="block px-4 py-4 font-semibold text-gray-800 duration-300 ease-out hover:bg-gray-200">Application
                History
            </a>
        </div>
        <div class="px-3">
            <hr>
        </div>
        <div>
            <a href="/applicant/personalInfo"
                class="block px-4 py-4 font-semibold text-gray-800 duration-300 ease-out hover:bg-gray-200">Personal
                Information
            </a>
        </div>
    </div>
</div>
