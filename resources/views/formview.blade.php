<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Feedback</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Feedback</th>
                    <th>Action</th> <!-- Added Action column for buttons -->
                </tr>
            </thead>
            <tbody>
                @foreach($feedback as $feedbacks)
                <tr>
                    <td>{{ $feedbacks->name }}</td>
                    <td>{{ $feedbacks->title }}</td>
                    <td>{{ $feedbacks->feedback }}</td>
                    <td>
                        <a href="{{ url('feedback/edit/') }}/{{$feedbacks->ID}}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('feedback/delete/') }}/{{$feedbacks->ID}}" class="btn btn-danger">Delete</a>

                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>


