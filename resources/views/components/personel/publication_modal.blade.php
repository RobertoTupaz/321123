{{-- Publication Edit Modal --}}
<div id="PublicationModal" class="fixed hidden h-screen bg-black/70 w-screen  top-0 left-0 right-0">
    <div class="bg-red-500 w-full flex justify-center">
        <div class="rounded-3xl px-28 py-8 bg-white justify-around grid mt-8 fixed h-4/5 overflow-y-scroll">

            <div class="px-12 grid">
                <div>
                    <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                </div>

                <div class="relative">
                    <div>
                        <h1 class="font-semibold">Position</h1>
                        <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                            value="Position" title="itsinput" id="PositionInput" onkeyup="PositionfilterFunction()">
                    </div>
                    {{-- Search Modal --}}
                    <div id="PositionDropdown"
                        class="hidden bg-white px-0 py-2 absolute border -ml-3 rounded-xl text-nowrap">

                        <a onclick="PositionhandleLinkClick()"
                            class="cursor-pointer hover:bg-gray-300 px-24 duration-300 ease-out">text1</a>
                        <a onclick="PositionhandleLinkClick()"
                            class="cursor-pointer hover:bg-gray-300 px-24 duration-300 ease-out">text2</a>
                        <a onclick="PositionhandleLinkClick()"
                            class="cursor-pointer hover:bg-gray-300 px-24 duration-300 ease-out">text3</a>

                    </div>
                </div>
                <div>
                    <h1 class="font-semibold">Education</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        value="Education" title="input">
                </div>
                <div>
                    <h1 class="font-semibold">Experience</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        value="Experience" title="input">
                </div>
                <div>
                    <h1 class="font-semibold">Plantilla Item No.</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        value="Plantilla Item No." title="input">
                </div>
                <div>
                    <h1 class="font-semibold">Training</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        value="Training" title="input">
                </div>
                <div>
                    <h1 class="font-semibold">Eligibility</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        value="Eligibility" title="input">
                </div>
                <div>
                    <h1 class="font-semibold">SG</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        value="SG" title="input">
                </div>
                <div>
                    <h1 class="font-semibold">Posting Date</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        value="Posting Date" title="input">
                </div>
                <div>
                    <h1 class="font-semibold">Closing Date</h1>
                    <input class="border border-navyblue focus:ring-0 outline-0 input-default" type="text"
                        value="Closing Date" title="input">
                </div>
                <div class="grid mt-1">
                    <button type="submit"
                        class="input-default mt-2 bg-navyblue text-white hover:bg-navyblue/95 hover:shadow-md">Save</button>
                    <button onclick="PublicationmodalFunction2()" type="button"
                        class="input-default mt-2 bg-rose-500 text-white hover:bg-rose-500/95 hover:shadow-md">Cancel</button>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    // For Education Edit button Modal
    function PublicationmodalFunction(index) {
        PublicationmodalFunction2();
    }

    function PublicationmodalFunction2() {
        document.getElementById("PublicationModal").classList.toggle("hidden");
    }
</script>
