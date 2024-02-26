@extends('personel.html.index')
@section('body')
    {{-- Rounded with Border --}}

    <div class="mx-auto text-center mt-[1rem] bg-white opacity-90 rounded-2xl p-3  shadow-lg  max-w-6xl  mb-28">

        <div class="font-bold text-lg">
            Signatories Page
        </div>
        <div>
            (Personel Page)
        </div>

        <div class="grid bg-white rounded-xl overflow-y-scroll p-3">

            <form action="/personel/addSignatories" method="POST">
                @csrf
                <div class="flex gap-1">
                    <div class="flex my-auto">Name:</div>
                    <input class="border input-default border-navyblue" name="name" type="text" placeholder="Input">
                </div>
                {{-- Position --}}
                <div class="flex gap-1">
                    <div class="flex my-auto">Position:</div>
                    <input class="border input-default border-navyblue" name="position" type="text" placeholder="Input">
                </div>


                <div class="gap-1">
                    <div class="flex my-auto">Documments:</div>
                    <div class="flex gap-1 ml-5">
                        <input class="accent-navyblue" type="checkbox" name="annex" value="annex">
                        <div>Annex E & Annex F</div>
                    </div>
                    <div class="flex gap-1 ml-5">
                        <input class="accent-navyblue" type="checkbox" name="ier" value="ier">
                        <div>Initial Evaluation Result</div>
                    </div>
                    <div class="flex gap-1 ml-5">
                        <input class="accent-navyblue" type="checkbox" name="hrmpasbChair" value="hrmpasbChair">
                        <div>HRMPSB Chair</div>
                    </div>
                    <div class="flex gap-1 ml-5">
                        <input class="accent-navyblue" type="checkbox" name="hrmpasbMember" value="hrmpasbMember">
                        <div>HRMPSB Member</div>
                    </div>
                    <div class="flex gap-1 ml-5">
                        <input class="accent-navyblue" type="checkbox" name="hrmpasbSecretariat" value="hrmpasbSecretariat">
                        <div>HRMPSB Secretariat</div>
                    </div>

                    <button type="submit"
                        class="input-default bg-emerald-500 hover:bg-emerald-600 cursor-pointer text-white font-semibold w-fit">Submit</button>
                </div>
            </form>



            <div class="grid mt-1">
                <table>
                    <thead class="bg-navyblue opacity-90 text-gray-200">
                        <tr>
                            <th class="border border-white p-3">Name</th>
                            <th class="border border-white p-3">Position</th>
                            <th class="border border-white p-3">Documents</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($signatory as $item)
                            <tr class="border-b">
                                <td class="p-1 border-r">{{ $item->name }}</td>
                                <td class="p-1 border-r">{{ $item->position }}</td>
                                <td class="p-1 border-r">
                                    @if ($item->annex_e_and_annex_f)
                                        Annex E and Annex F <br>
                                    @endif
                                    @if ($item->initial_evaluation_result)
                                        Innitial Evaluation Result <br>
                                    @endif
                                    @if ($item->hrmpsb_chair)
                                        HRMPSB CHAIR <br>
                                    @endif
                                    @if ($item->hrmpsb_member)
                                        HRMPSB MEMBER <br>
                                    @endif
                                    @if ($item->hrmpsb_secretariat)
                                        HRMPSB SECRETARIAT <br>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>
    </div>
@endsection
