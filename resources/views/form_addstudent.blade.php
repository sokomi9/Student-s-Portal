<div>
    <h1>Add Student Form</h1>
    <form action="add" method="post">
        <label for="first_name">First Name</label>
        @csrf
        <input type="text" name="first_name" id="first_name">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name">
        <label for="email">Student's Email Address</label>
        <input type="text" name="email" id="email">
        <button type="submit">Enroll</button>
    </form>
</div>
