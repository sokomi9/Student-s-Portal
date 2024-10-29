<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
     <table border="1">
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Second Name</th>
        <th>Email Address</th>
        </tr>
        @foreach($my_list as $student)
        <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->email}}</td>
        </tr>
        @endforeach
     </table>
</div>
