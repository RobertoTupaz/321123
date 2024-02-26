<div class="relative  top-0 h-[4rem] bg-nayblue/50 w-full overflow-hidden ">
    <div class="flex justify-between mx-[3%] ">
        {{-- left Side --}}
        <div class="flex gap-2 ">
            <div>
                <a href="/personel">
                    <img class="w-[6rem]" src="\images\Deped-Logo.png" alt="DepED_logo">
                </a>
            </div>
            <div class=" text-white mt-3 font-bold text-2xl">
                <h1>Division of Malaybalay City Recruitment & Selection System</h1>
            </div>
        </div>

        {{-- Right Side | Account Button --}}
        @if (Auth::guard('user2')->user())
            <form action="/personel/logout" method="POST">
                @csrf
                <button type="submit" class="bg-gray-400   text-white cursor-pointer p-2 rounded-xl font-bold mt-3">
                    Logout
                </button>
            </form>
        @endif
    </div>
</div>