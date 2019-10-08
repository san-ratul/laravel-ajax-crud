<form action="/order" method="post">
    @csrf
    <input type="text" name="link">
    <input type="text" name="title">
    <input type="submit" value="enter">
</form>