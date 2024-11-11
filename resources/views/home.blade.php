<div>
    <h1>My Students</h1>
    <a href="{{url('add')}}" target="_blank" rel="noopener noreferrer">Enroll New Student</a>
    <br><br>
     <table border="1">
        <tr>
        <th>First Name</th>
        <th>Second Name</th>
        <th>Email Address</th>
        <th>Delete</th>
        <th>Update</th>
        </tr>
        @foreach($my_list as $student)
        <tr>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->email}}</td>
        <td><a href="{{'delete/'.$student->id}}">Delete</a></td>
        <!-- <td><a href="{{'update/'.$student->id}}">Delete</a></td> -->
        </tr>
        @endforeach
     </table>
     {{$my_list->links()}}
</div>
<style>
    .w-5.h-5{
        width:10px
    }
</style>
