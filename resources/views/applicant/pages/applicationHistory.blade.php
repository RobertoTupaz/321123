@extends('applicant.html.index')
@section('body')
<div class="absolute w-full flex justify-center items-center">
    <div class="w-11/12">
        <div class="mx-auto text-center mt-[1rem] bg-white opacity-90 rounded-2xl p-3 shadow-lg max-w-full mb-28">

            <div class="font-bold text-lg">
                Application History
            </div>
    
            <div class="grid bg-white rounded-xl overflow-y-scroll p-3">
    
                <div class="flex mx-auto grid-cols-2 gap-3">
                    {{-- Application Code --}}
                    <div class="grid mt-1">
                        <table>
                            <thead class="bg-navyblue opacity-90 text-gray-200">
                                <tr>
                                    <th class="border border-white p-3">Name Applicant</th>
                                    <th class="border border-white p-3">Application Code</th>
    
                                </tr>
                            </thead>
    
                            <tbody>
                                @foreach ($application as $item)
                                    <tr class="border-b">
                                        <td class="p-1 border-r">{{Auth::guard('user1')->user()->first_name}}</td>
                                        <td class="p-1 ">{{$item->application_id}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
    
    
                    {{-- Application History Details --}}
    
                    <div class="grid mt-1">
                        <table>
                            <thead class="bg-navyblue opacity-90 text-gray-200 ">
                                <tr>
                                    <th class="border border-white p-3">Position</th>
                                    <th class="border border-white p-3">Category</th>
                                    <th class="border border-white p-3 text-nowrap">Plantilla Item No.</th>
                                    <th class="border border-white p-3 text-nowrap">Date Evaluated (Sort Desc)</th>
                                    <th class="border border-white p-3">Remarks (Qualified/Disqualified)</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @foreach ($application as $item)
                                    @foreach ($jobs as $item2)
                                        @if ($item2->id == $item->job_id)
                                            <tr class="border-b">
                                                <td class="p-1 border-r">{{$item2->position}}</td>
                                                <td class="p-1 border-r">{{$item2->category}}</td>
                                                <td class="p-1 border-r">{{$item2->plantilla_item_no}}</td>
                                                <td class="p-1 border-r">{{$item->date_evaluated}}</td>
                                                <td class="p-1 ">{{$item->remarks}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
