@extends('applicant.html.index')
@section('body')
    <div class="h-screen">
        {{-- Rounded with Border --}}
        <div class="mx-auto  text-center   border mt-[5rem] bg-white opacity-90 rounded-xl p-3 shadow-lg w-fit max-w-7xl ">

            <div class="grid">

                <table>

                    {{-- Table head --}}
                    <thead class=" bg-navyblue text-white text-lg">
                        <tr>
                            <th class="border border-white p-3">Position</th>
                            <th class="border border-white p-3">Category</th>
                            <th class="border border-white p-3">Education</th>
                            <th class="border border-white p-3">Experience</th>
                            <th class="border border-white p-3">Plantilla item no.</th>
                            <th class="border border-white p-3">Training</th>
                            <th class="border border-white p-3">Eligibility</th>
                            <th class="border border-white p-3">Salary Grade</th>
                            <th class="border border-white p-3">Posting Date</th>
                            <th class="border border-white p-3">Closing Date</th>
                            <th class="border border-white p-3">Action</th>
                        </tr>

                    </thead>

                    {{-- Table body --}}

                    <tbody class="border-b text-center text-lg">
                        @foreach ($jobs as $item)
                            <tr>
                                {{-- Position --}}
                                <td class="p-1 border-r">{{$item->position}}</td>
                                {{-- Category --}}
                                <td class="p-1 border-r">{{$item->category}}</td>
                                {{-- Education --}}
                                <td class="p-1 border-r">{{$item->education}}</td>
                                {{-- Experience --}}
                                <td class="p-1 border-r">{{$item->experience}}</td>
                                {{-- Plantilla item no. --}}
                                <td class="p-1 border-r">{{$item->plantilla_item_no}}</td>
                                {{-- Training --}}
                                <td class="p-1 border-r">{{$item->training}}</td>
                                {{-- Eligibility --}}
                                <td class="p-1 border-r">{{$item->eligibility}}</td>
                                {{-- Salary Grade --}}
                                <td class="p-1 border-r">{{$item->salary_grade}}</td>
                                {{-- Posting Date --}}
                                <td class="p-1 border-r">{{$item->posting_date}}</td>
                                {{-- Closing  date --}}
                                <td class="p-1 border-r">{{$item->closing_date}}</td>
                                {{-- Action --}}
                                <td class="p-1 ">
                                    @if (Auth::guard('user1')->user())
                                        @if (Auth::guard('user1')->user()->personal_info_updated == true)
                                            <button onclick="ApplyModalFunction('{{$item->type}}', {{$item->id}}, '{{$item->category}}')" class="border rounded-lg p-1 bg-navyblue text-white">Apply</button>
                                        @else
                                            <a href="/applicant/personalInfo">
                                                <button class="border rounded-lg p-1 bg-navyblue text-white">Apply</button>
                                            </a>
                                        @endif
                                    @else
                                        <a href="/applicant/login">
                                            <button class="border rounded-lg p-1 bg-navyblue text-white">Apply</button>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <x-applicant.apply_modal />
    <x-applicant.application_code_notification />
@endsection

{{-- 
    Restrictions sa applicant:
        1. Dili sila makaapply if dili makafillout ug submit sa personnal info
        2. Dili na makaedit sa personnal info if close na ang position giaplyan
 --}}