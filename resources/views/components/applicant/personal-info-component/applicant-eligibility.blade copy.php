<div id="eligibility" class="relative bg-green-500 text-center">
    <form action="/applicant/addEligibility" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Eligibility</label>
        <br>
        <label for="">Title</label>
        <input type="text" name="title" class="border-2">
        <br>
        <label for="">Rating</label>
        <input type="text" name="rating" class="border-2">
        <br>
        <label for="">Upload Document</label>
        <input type="file" name="document" class="border-2">
        <br>
        <button type="submit">Add</button>
    </form>
    <table>
        <thead>
            <tr>
                <th class="border">Title</th>
                <th class="border">Rating</th>
                <th class="border">Upload Document</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eligibility as $item)
                <tr>
                    <td class="text-center">{{$item->title}}</td>
                    <td class="text-center">{{$item->rating}}</td>
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