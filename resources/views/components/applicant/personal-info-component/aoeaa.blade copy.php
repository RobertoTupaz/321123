<div id="aoeaa" class="relative bg-green-500 text-center">
    <form action="/applicant/addAOEAA" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Application of Education accuired after the last promotion</label>
        <br>
        <label for="">Title</label>
        <input type="text" name="title" class="border-2">
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
                <th class="border">Upload Document</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aoeaa as $item)
                <tr>
                    <td class="text-center">{{$item->title}}</td>
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