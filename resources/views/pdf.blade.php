<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>
<body>
    <form action="{{route('pdfshare')}}" enctype="multipart/form-data">
        @csrf
        <input type="file" placeholder="" name="file">
        <button type="submit">share</button>
    </form>
</body>
</html>