<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">

    <h1 class="mt-5 mb-4">Edit Your Feedback</h1>
    <form action="{{ url('/updatedata/' . $feedbacks->ID) }}" method="post" class="mb-4">


        @method('PUT')
        @csrf
      
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name"  value="{{$feedbacks->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{$feedbacks->title}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="feedback">Feedback</label>
            {{-- <textarea name="feedback" value="{{$feedbacks->feedback}}" class="form-control"></textarea> --}}
            <input type="text" name="feedback" value="{{$feedbacks->title}}" class="form-control">
        </div>
        <button type="Update" class="btn btn-primary">Update</button>
    </form>

   
    
</body>
</html>