<html>
<form action="picture" enctype="multipart/form-data" method="post">
{{csrf_field()}}
<input type="file" name="picture">
<input type="submit" value="upload" name="Upload">
</form>
</html>