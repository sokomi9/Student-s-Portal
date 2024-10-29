<div>
    <h1>Students' Grades</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Maths</th>
            <th>English</th>
            <th>Swahili</th>
            <th>Biology</th>
            <th>Chemistry</th>
        </tr>
        @foreach($grademe as $my_grades)
        <tr>
            <td>{{$my_grades->id}}</td>
            <td>{{$my_grades->first_name}}</td>
            <td>{{$my_grades->last_name}}</td>
            <td>{{$my_grades->mathematics}}</td>
            <td>{{$my_grades->english}}</td>
            <td>{{$my_grades->swahili}}</td>
            <td>{{$my_grades->biology}}</td>
            <td>{{$my_grades->chemistry}}</td>
        </tr>
        @endforeach
    </table>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
