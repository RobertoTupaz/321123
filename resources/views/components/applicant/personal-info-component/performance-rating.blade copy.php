<div id="performanceRating" class="relative bg-green-500 text-center">
    <form action="/applicant/addPerformanceRating" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Performance Rating</label>
        <br>
        <label for="">Company</label>
        <input type="text" name="company" class="border-2">
        <br>
        <label for="">Year</label>
        <input type="text" name="year" class="border-2">
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
                <th class="border">Employer/Company</th>
                <th class="border">Year</th>
                <th class="border">Rating</th>
                <th class="border">Upload Document</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($performanceRating as $item)
                <tr>
                    <td class="text-center">{{$item->employer_or_company}}</td>
                    <td class="text-center">{{$item->year}}</td>
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