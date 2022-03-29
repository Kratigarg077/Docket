<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">

    <title>Menu</title>
</head>
<body style="text-align:center; background-color:#CDADF8;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/create')}}">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/display')}}">Display</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron">
  <h1><center>Docket..</center></h1>
  <p><center>Docket is a list of tasks that need to be completed, typically organized in order of priority..<br>
  Here you can make your own dockets so that all your tasks are completed on time :) </center>.</p>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card-body m-4">
        <h5 class="card-title">Add new task</h5>
          <h6 class="card-subtitle mb-2 text-muted">You can add new items/tasks in your docket.</h6>
          <a href="{{url('/create')}}" class="card-link">Add</a>
      </div>
    </div> 
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card-body m-4">
        <h5 class="card-title">Display docket</h5>
        <h6 class="card-subtitle mb-2 text-muted">You can view your docket in which different tasks are added.</h6>
        <a href="{{url('/display')}}" class="card-link">Display docket</a >
      </div>
   </div>
   <div class="col-lg-4 col-md-4 col-12">
      <div class="card-body m-4">
        <h5 class="card-title">Edit docket</h5>
        <h6 class="card-subtitle mb-2 text-muted">You can edit your docket, can delete the tasks and can mark them as completed.</h6>
        <a href="{{url('/display')}}" class="card-link">Edit docket</a >
      </div>
   </div>
  </div>
</div>
  

</body>
</html>