@if (!session()->has('personalInfoNotif'))
    {{-- Apply Modal --}}
    <div id="personalInfoNotification" class="fixed h-screen bg-black/70 top-0 left-0 right-0 z-20">
        <div class=" w-full flex justify-center">
            <div class="rounded-3xl py-8 bg-white mt-8 fixed">
                <form class="px-12 grid">
                    <div>
                        <img class="w-28 mx-auto mb-3" src="/images/Deped-Logo.png" alt="depedLOGO">
                    </div>
                    <h1 class="text-center font-bold text-lg">Hello Applicant!</h1>
                    <p class="text-center">
                        Please fill out your personal information
                        and other requirements before proceeding
                        to Job application.
                    </p>
                    <br><br>
                    <p>
                        <span class="font-bold">Data Privacy Notice</span> <br>
                        This System intends to collect information of the applicants for the Recruitment, Selection and
                        Appointment in the Division of Malaybalay City. <br>
                        Rest assured that all information will be kept confidential and will only be used for purposes
                        of evaluation related to Recruitment and Selection. <br>
                        The collection, processing, retention and disposal of all personal information will be done in
                        accordance with the Data Privacy Act of 2012. <br>
                    </p>
                    <p>
                        Consenting to this Privacy Notice, however, does not waive any of your rights under the Data
                        Privacy Act of 2012.
                    </p>

                    <button type="button" onclick="closeOpenpersonalInfoNotificationFunctionPersonalInfo()"
                        class="input-default mt-2 bg-green-500 text-white hover:bg-green-500/95 hover:shadow-md">Ok</button>
                </form>
            </div>
        </div>
    </div>



    <script>
        // ----------------------------------------------------------------

        // For Apply button Modal
        function personalInfoNotificationFunction(data) {
            closeOpenpersonalInfoNotificationFunctionPersonalInfo();
        }

        function closeOpenpersonalInfoNotificationFunctionPersonalInfo() {
            document.getElementById("personalInfoNotification").classList.toggle("hidden");
        }

        // ----------------------------------------------------------------


        // Show/hide the dropdown on hover
        const dropdown = document.querySelector('.relative');
        const dropdownContent = document.querySelector('.absolute');

        // dropdown.addEventListener('mouseenter', () => {
        //     dropdownContent.classList.remove('hidden');
        // });

        // dropdown.addEventListener('mouseleave', () => {
        //     dropdownContent.classList.add('hidden');
        // });
    </script>
@endif
