<title>Transaction History</title>
@extends('layouts.maindashboard')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('general.css') }}">
    <link rel="stylesheet" href="{{ asset('transaction.css') }}">
    <link rel="stylesheet" href="{{ asset('sidebar.css') }}">
</head>

<body onload=display_ct();>

    @if (session()->has('success'))
    <div id="alert-message"
        class="bg-blue-100 rounded-lg py-5 px-6 mb-3 text-base text-blue-700 inline-flex items-center w-full mr-16"
        role="alert">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
            class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor"
                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
            </path>
        </svg>
        <strong>{{ session()->get('success') }}</strong>
    </div>
    @endif
    <div class="container w-full md:w-4/5 xl:w-3/5 mt-5 tableviews" style="width:95%">
        <!--Card-->
        <div id='recipients' class="p-2 mt-6 lg:mt-0 rounded shadow bg-white mr-6">
            <a href={{route('generatepdf')}} target="_blank"
                class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full"><span>Download
                </span><i class="fa-solid fa-file-pdf fa-xl"></i></a>
            <a href={{route('sendemail')}}
                class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full">Send
                Email <i class="fa-regular fa-envelope fa-xl"></i></a>
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

    setTimeout(function() {
    $('#alert-message').fadeOut('slow');
  }, 6000); 

</script>
@endsection