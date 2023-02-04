@extends('layouts.maindashboard')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('general.css') }}">
</head>

<body onload=display_ct();>
    <h1 class="text-2xl w-full" id='ct'>Transaction History</h1>
    <div class="container w-full md:w-4/5 xl:w-3/5 mt-5" style="width:100%">
        <!--Card-->
        <div id='recipients' class="p-2 mt-6 lg:mt-0 rounded shadow bg-white mr-6">
            <a href={{route('generatepdf')}} target="_blank"
                class="bg-teal-400 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-full">PDF
                BUTTON</a>
            <a href={{route('sendemail')}}
                class="bg-teal-400 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-full">Send
                Email</a>
            <table id="example" class="stripe hover  md:w-4/5 xl:w-3/5">
                <thead>
                    <tr>
                        <th data-priority="1">Category</th>
                        <th data-priority="2">Name</th>
                        <th data-priority="3">Description</th>
                        <th data-priority="3">Date Created</th>
                        <th data-priority="3">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($merges as $merge)
                    <tr>
                        <td>{{$merge->category}}</td>
                        <td>{{$merge->name}}</td>
                        <td>{{$merge->description}}</td>
                        <td>{{$merge->created_at->format('F d, Y') }}</td>
                        <td>{{$merge->amount}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--/Card-->
    </div>
</body>

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<script>
    // Table JS
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: true,
            lengthChange: false,
            pageLength: 10
        });

        $('#entriesPerPage').on('change', function() {
            table.page.len(this.value).draw();
        });
    });
</script>
@endsection