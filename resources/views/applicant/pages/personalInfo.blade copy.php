@extends('applicant.html.index')
@section('body')
    <div class="absolute left-60 bg-green-500 text-center">
        <div class="relative">
            <form action="/applicant/saveInfo" method="POST">
                @csrf
                <label for="">first name :</label>
                <input type="text" name="first_name" value="{{$user->first_name}}" class="border-2">
                <br>
                <label for="">middle name :</label>
                <input type="text" name="middle_name" value="{{$user->middle_name}}" class="border-2">
                <br>
                <label for="">last name :</label>
                <input type="text" name="last_name" value="{{$user->last_name}}" class="border-2">
                <br>
                <label for="">suffix name :</label>
                <input type="text" name="suffix_name" value="{{$user->suffix_name}}" class="border-2">
                <br>
                <label for="">Address</label>
                <br>
                <label for="">street :</label>
                <input type="text" name="street" value="{{$user->street}}" class="border-2">
                <br>
                <label for="">barangay :</label>
                <input type="text" name="barangay" value="{{$user->barangay}}" class="border-2">
                <br>
                <label for="">city/municipality :</label>
                <input type="text" name="city_municipality" value="{{$user->city_municipality}}" class="border-2">
                <br>
                <label for="">province :</label>
                <input type="text" name="province" value="{{$user->province}}" class="border-2">
                <br>
                <label for="">civil status :</label>
                <input type="text" name="civil_status" value="{{$user->civil_status}}" class="border-2">
                <br>
                <label for="">religion :</label>
                <input type="text" name="religion" value="{{$user->religion}}" class="border-2">
                <br>
                <label for="">contact number :</label>
                <input type="text" name="contact_number" value="{{$user->contact_number}}" class="border-2">
                <br>
                <label for="">ethnic group :</label>
                <input type="text" name="ethnic_group" value="{{$user->ethnic_group}}" class="border-2">
                <br>
                <label for="">disability :</label>
                <input type="text" name="disability" value="{{$user->disability}}" class="border-2">
                <br>
                <button type="submit">submit</button>
            </form>
            <br><br><br><br><br><br>
            <x-applicant.personal-info-component.education :educationalAttainment="$educationalAttainment" />
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <x-applicant.personal-info-component.experience :experience="$experience" />
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <x-applicant.personal-info-component.training :training="$training" />
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <x-applicant.personal-info-component.applicantEligibility :eligibility="$eligibility" />
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <x-applicant.personal-info-component.performance-rating :performanceRating="$performanceRating" />
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            {{-- Outstanding --}}
            <div class="relative bg-green-500 text-center">
                <form action="/applicant/addOutstandingAccomplishment" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Outstanding Accomplishment</label>
                    <br>
                    <label for="">Title</label>
                    <input type="text" name="title" class="border-2">
                    <br>
                    <label for="type">Type</label>
                    <select name="type" id="type">
                        @foreach ($outstandingAccomplishmentType as $item)
                            <option value="{{$item->id}}">{{$item->type." ".$item->title}}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="">Upload Document</label>
                    <input type="file" accept="application/pdf" name="document" class="border-2">
                    <br>
                    <button type="submit">Add</button>
                </form>
                <table>
                    <thead>
                        <tr>
                            <th class="border">Title</th>
                            <th class="border">Type</th>
                            <th class="border">Upload Document</th>
                            <th class="border">Action</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($outstandingAccomplishment as $item)
                            <tr>
                                <td class="text-center">{{$item->title}}</td>
                                <td class="text-center">{{$item->type}}</td>
                                <td class="text-center">{{$item->document}}</td>
                                <td class="text-center">
                                    <form action="#" class="p-0 m-0">
                                        <button class="p-0 m-0">Edit</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <x-applicant.personal-info-component.aoeaa :aoeaa="$aoeaa"/>

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <x-applicant.personal-info-component.ld :ld="$ld"/>
        </div>
    </div>


    {{-- <x-applicant.personal-info-component.outstanding-accomplishment :outstandingAccomplishmentType="$outstandingAccomplishmentType" /> --}}

@endsection