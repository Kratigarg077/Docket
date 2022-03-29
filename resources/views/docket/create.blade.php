<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docket|Create</title>
</head>
<body style="text-align:center; background-color:powderblue;">
    <br><br>
    <h1> Create your Docket :)</h1>
    <h3> 
        <x-alert/>
    </h3>
    <form action="/upload" method="post">
        @csrf
        <input type="text" name="title" placeholder="Add new task"/>
        <input type="submit" value="create"/>
    </form> 
    <br>
    <a href="/index">Back</a>
    <br><br>
    <a href="/display">View</a>
</body>
</html>
