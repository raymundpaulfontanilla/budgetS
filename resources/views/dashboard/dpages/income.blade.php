@extends('layouts.maindashboard')

@section('content')



<head>
  <link rel="stylesheet" href="{{ asset('table.css') }}">
  <link rel="stylesheet" href="{{ asset('income.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
  <!--Regular Datatables CSS-->
  <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <!--Responsive Extension Datatables CSS-->
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>

<div class="pb-5">
  <p>Daily Report- January 23, 2023 11:00:56</p>
  <button class="bg-teal-400 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-full mt-5" id="button">
    Add Income
  </button>
</div>
<div class="container w-full md:w-4/5 xl:w-3/5" style="width:100%">
  <!--Card-->
  <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
    <table id="example" class="stripe hover  md:w-4/5 xl:w-3/5">
      <thead>
        <tr>
          <th data-priority="1">Name</th>
          <th data-priority="2">Description</th>
          <th data-priority="3">Amount</th>
          <th data-priority="4">Total</th>
          <th data-priority="5">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Computer</td>
          <td>Income</td>
          <td>140</td>
          <td>15000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>

        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
        <tr>
          <td>Gas</td>
          <td>Expenses</td>
          <td>30</td>
          <td>12000</td>
          <td> <a href="{{route('history')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">🗑️ Delete</a>
            <a href="{{route('overview')}}"
              class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--/Card-->
</div>

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    var table = $('#example').DataTable({
        responsive: true,
        lengthChange: false,
        pageLength: 5
    });

    $('#entriesPerPage').on('change', function() {
        table.page.len(this.value).draw();
    });
});
</script>


@endsection