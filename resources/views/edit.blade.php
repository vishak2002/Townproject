<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Edit Details</h1>

    <form action="" method="post" enctype="multipart/form-data">
        @csrf 
        <input type="text" name="title" value="{{$details[0]['title']}}">
        <input type="text" name="description" value="{{$details[0]['description']}}">
        <input type="text" name="status" value="{{$details[0]['status']}}">
        <input type="date" name="date" value="{{$details[0]['date']}}">
        
        
        <button>submit</button>

    </form>
    </center>
</body>
</html>