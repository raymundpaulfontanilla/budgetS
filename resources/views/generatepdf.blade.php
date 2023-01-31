<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <table id="example" class="stripe hover  md:w-4/5 xl:w-3/5 target=blank ">
        <thead>
            <tr>
                <th data-priority="1">Name</th>
                <th data-priority="2">Description</th>
                <th data-priority="3">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($merges as $merge)
            <tr>
                <td>{{$merge->name}}</td>
                <td>{{$merge->description}}</td>
                <td>{{$merge->amount}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>