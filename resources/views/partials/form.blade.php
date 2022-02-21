<section class="container">
    <h1>Add Pokemon</h1>
    <form action="/store" method="POST">
        @csrf
        <label for="">Name:</label><br>
        <input name="name" type="text"><br>
        <label for="">Type:</label><br>
        <input name="type" type="text"><br>
        <label for="">Level:</label><br>
        <input name="level" type="number"><br>
        <button class="mt-2" type="submit">ADD</button>
    </form>


</section>