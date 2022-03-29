<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dockets|Items</title>
</head>
<body style="text-align:center; background-color:powderblue;">
    <br><br><br>
    <h1 > All your TODOsss..</h1>
    <h3>
        <x-alert/>
    </h3>
    @foreach($dockets as $docket)
    <li>
        @if($docket->completed)
        <span style="text-decoration:line-through">{{$docket->title}}</span>
        @else
        {{$docket->title}}
        @endif
        <a href="{{asset('/' . $docket->id . '/edit')}}">  Edit  </a>
        <a href="{{asset('/' . $docket->id . '/delete')}}"> Delete </a>
        <a href="{{asset('/' . $docket->id . '/completed')}}"> Completed </a>

    </li>
    @endforeach
    <br><br>
    @if(count($dockets))
        <div class="card-footer">
            You have {{count($dockets)}} tasks !!
        </div>
    @else
        <p class="text-center mt-3">No pending tasks !!</p>
    @endif
    <h3>
        <a href="/create" > ADD </a>
    </h3>

</body>
</html>
