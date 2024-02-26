<div id="training" class="relative bg-green-500 text-center">
    <form action="/applicant/addTraining" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Training</label>
        <br>
        <label for="">Title of Training</label>
        <input type="text" name="title" class="border-2">
        <br>
        <label for="">No. of Hours</label>
        <input type="text" name="hours" class="border-2">
        <br>
        <label for="">Year Attended</label>
        <input type="text" name="year_attended" class="border-2">
        <br>
        <label for="">Upload Document</label>
        <input type="file" name="document" class="border-2">
        <br>
        <button type="submit">Add</button>
    </form>
    <table>
        <thead>
            <tr>
                <th class="border">Title of Training</th>
                <th class="border">No. of Hours</th>
                <th class="border">Year Attended</th>
                <th class="border">Upload Document</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($training as $item)
                    <tr>
                        <td class="text-center">{{$item->title}}</td>
                        <td class="text-center">{{$item->training_hours_no}}</td>
                        <td class="text-center">{{$item->year_attended}}</td>
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