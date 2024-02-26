<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body class="text-sm">

    <div class="w-full text-center">
        <img class="w-16 mx-auto" src="C:\deped\depedSystem\public\images\DEPedLogo.png" alt="Depedlogo">

        <div>
            <div>
                <div class="mt-3">
                    <img class="mx-auto w-52" src="C:\deped\depedSystem\public\images\RepubOfPH.png" alt="">
                </div>
                <div class="">
                    <img class="w-72 mx-auto" src="C:\deped\depedSystem\public\images\DOE.png" alt="">
                </div>
                <div>Division of Malaybalay</div>
                <div class="font-semibold">PERSONNEL DIVISION</div>
    
                <div class="text-left my-3">
                    <div class="my-3">{{$date_evaluated}}</div>
                    <div class="font-semibold">{{$applicant->first_name.' '.$applicant->middle_name.' '.$applicant->last_name.' '.$applicant->suffix_name}}</div>
                    <div>{{$address}}</div>
    
                    <div class="my-2">Dear <a class="font-semibold">{{$applicant->first_name}}</a>,</div>
                </div>
            </div>
        </div>
    </div>

    <p class="text-start">
        We are pleased to inform you that based on the initial evaluation, 
        we have found your qualifications to be substantial vis-à-vis the 
        Civil Service Commission (CSC) approved Qualification Standards (QS)
        of  <a class="font-semibold"> {{$job->position}}</a> position under 
        <a class=" font-semibold">{{$job->place_of_assignment}}</a>. Below are
        the results of the initial evaluation conducted by the undersigned 
        {{$date_evaluated}}
    </p>

    {{-- 1st Table --}}
    <div class="grid grid-cols-2">

        <table class="border border-2">
            <thead class="bg-gray-500 text-white">
                <tr>
                    <th class="border">
                        Position Applied For
                    </th>
                    <th class="border">
                        CSC-approved QS <br> of the position
                    </th>
                    <th class="border">
                        Your Qualification
                    </th>
                    <th class="border">
                        Remarks/Details
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    {{-- row 1 --}}
                    <td rowspan="4" class="border">
                        <p>{{$job->position}}</p>
                        <p>{{$application->application_id}}</p>
                        <p>
                            {{$job->plantilla_item_no}}
                        </p>
                    </td>
                    <td class="border">
                        <p class="font-bold">Education:</p>
                        <p>
                            {{$job->education}}
                        </p>
                    </td>
                    <td class="border">
                        @foreach ($education as $item)
                            {{$item->educational_attainment}} <br>
                        @endforeach
                    </td>
                    <td class="border">
                        {{$application->education}}
                    </td>
                </tr>
                <tr>
                    {{-- row 2 --}}
                    <td class="border">
                        <p class="font-bold">Experience:</p>
                        <p>
                            One (1) year relevant experience
                        </p>
                    </td>
                    <td class="border">
                        @foreach ($experience as $item)
                            {{$item->years_covered}} years
                                @if ($item->months_covered)
                                    and {{$item->months_covered}} months <br>
                                @endif
                            of experience as {{$item->title}} <br>
                        @endforeach
                    </td>
                    <td class="border">
                        {{$application->experience}}
                    </td>
                </tr>
                <tr>
                    {{-- row 3 --}}
                    <td class="border">
                        <p class="font-bold">Training:</p>
                        <p>
                            Four (4) hours of relevant training
                        </p>
                    </td>
                    <td class="border">
                        @foreach ($training as $item)
                            {{$item->training_hours_no}} hours of training in {{$item->title}}
                        @endforeach
                    </td>
                    <td class="border">
                        {{$application->training}} 
                    </td>
                </tr>
                <tr>
                    {{-- row 4 --}}
                    <td class="border">
                        <p class="font-bold">Eligibility:</p>
                        <p>Career Service (Professional)</p>
                        <p>Second Eligibility</p>
                    </td>
                    <td class="border">
                        @foreach ($eligibility as $item)
                            {{$item->title}}
                        @endforeach
                    </td>
                    <td class="border">
                        {{$application->eligibility}} 
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <p class="text-start mt-3">Please be advice of your assigned application code {{$application->application_id}}
            which shall be used as you proceed with the next stage of the selection process.
            You may refer to the official issuances of the Personel Unit for the additional announcements
            in this regard. For inquiries, you may communicate with 09095549524/personelUnit@gmail.com
            {{-- <a class=" font-semibold">(you may insert online links of other job portals, if
                necessary)</a>. --}}
        </p>
    </div>

    <div class="text-start my-3">
        <div>
            Thank you
        </div>
        <div class="my-3">Very truly yours,</div>
        <div class="font-semibold">[Insert Name of the HRMO]</div>
        <div>[Insert Position/Designation]</div>

    </div>

    <div class="border-2 w-full border-black"></div>
    <div class="text-left">
        <div>(insert Office Address)</div>
        <div>(Insert Telephone Nos.):(02)0000-0000 Insert Email Address: personnel000@deped.gov.ph
        </div>
    </div>
</body>

</html>
