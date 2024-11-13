<div>
    <h1>Student Update Form</h1>
    <form action="/update-student/{{$data->id}}" method="post">
        <input type="hidden" name="_method" value="put">
        <label for="first_name">First Name</label>
        @csrf
        <input type="text" name="first_name" value="{{$data->first_name}}">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="{{$data->last_name}}">
        <label for="email">Last Name</label>
        <input type="text" name="email" value="{{$data->email}}">
        <button type="submit">Update</button>
        <a href="/">Cancel</a>
    </form>
</div>
