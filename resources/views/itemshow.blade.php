<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itemshow</title>
    <style>
        
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<center>
    <table border=1 align=center>
    <h1>Details</h1>
        <thead>
        <tr>
            <td><h2>title</h2></td>
            <td><h2>description</h2></td>
            <td><h2>status</h2></td>
            <td><h2>date</h2></td>
            <td><h2>action</h2></td>
        </tr>
    </thead>
    <tbody>

        @foreach($items as $i)

        <tr>
            <td>{{$i->title}}</td>
            <td>{{$i->description}}</td>
            <td>{{$i->status}}</td>
            <td>{{$i->date}}</td>
         


    
            
        <td>
        <a href="/edititem/{{$i->id}}"><button>edit</button></a>
        <a href="/delete/{{$i->id}}"><button>delete</button></a></td>
        </tr>
        @endforeach
        
    </tbody>
    
    </table>
</center>
    
</body>
</html>