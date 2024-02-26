@extends('personel.html.index')
@section('body')
    <div class="mx-auto text-center mt-[1rem] bg-white opacity-90 rounded-2xl p-3  shadow-lg  max-w-6xl  mb-28">


        <div class="grid bg-white rounded-xl p-3">

            <div>

                <h1 class="font-bold text-center py-q">PERSONEL PAGE</h1>
                <h1 class="font-semibold text-center py-1">Individual Evaluation Result</h1>
                <div class="flex ">
                    <div>
                        <input class="input-default border border-navyblue" type="text" placeholder="Search"
                            oninput="handleSearch(this.value)">
                        <div id="suggestions" class="mt-2"></div>

                    </div>

                </div>

                {{-- Table --}}
                <div>

                    <div class="grid mt-3">
                        <table>
                            <thead class="bg-navyblue opacity-90 text-gray-200">
                                <tr>
                                    <th class="border border-white p-3">No.</th>
                                    <th class="border border-white p-3">Position</th>
                                    {{-- <th class="border border-white p-3">Category</th> --}}
                                    <th class="border border-white p-3">Plantilla Item No.</th>
                                    <th class="border border-white p-3">Salary Grade</th>
                                    <th class="border border-white p-3">Posting Date</th>
                                    <th class="border border-white p-3">Closing Date</th>
                                    <th class="border border-white p-3">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($jobs as $item)
                                    <tr class="border-b">
                                        <td class="p-1 border-r text-center">{{$i + 1}}</td>
                                        <td class="p-1 border-r text-center">{{$item->position}}</td>
                                        {{-- <td class="p-1 border-r text-center">Category</td> --}}
                                        <td class="p-1 border-r text-center">{{$item->plantilla_item_no}}</td>
                                        <td class="p-1 border-r text-center">{{$item->salary_grade}}</td>
                                        <td class="p-1 border-r text-center">{{$item->posting_date}}</td>
                                        <td class="p-1 border-r text-center">{{$item->closing_date}}</td>
                                        <td class="p-1 text-center">
                                            <form action="/personel/viewApplicants" method="POST">
                                                @csrf
                                                <input type="text" name="jobID" value="{{$item->id}}" hidden>
                                                <button type="submit" class="border m-1 px-3 py-1 rounded-lg p-1 bg-navyblue text-white">
                                                    View
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
