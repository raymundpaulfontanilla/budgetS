<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Transaction History<h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Date Created</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>

            @foreach($merges as $merge)
            <tr>
                <td>{{$merge->name}}</td>
                <td>{{$merge->description}}</td>
                <td>{{$merge->created_at}}</td>
                <td>{{$merge->amount}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>