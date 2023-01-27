@extends('layouts.maindashboard')

@section('content')



<head>
  <link rel="stylesheet" href="{{ asset('table.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
  <!--Regular Datatables CSS-->
  <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <!--Responsive Extension Datatables CSS-->
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>

<div>
  <p>Daily Report- January 23, 2023 11:00:56</p>
  <button class="bg-teal-400 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-full mt-5" id="button">
    Add Income
  </button>

  <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
    <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
      <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
          <tr>
            <th data-priority="1">Name</th>
            <th data-priority="2">Description</th>
            <th data-priority="3">Amount</th>
            <th data-priority="4">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Computer</td>
            <td>Expenses</td>
            <td>15000</td>
            <td>15000</td>
          </tr>
          <tr>
            <td>Gas</td>
            <td>Expenses</td>
            <td>12000</td>
            <td>12000</td>
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
        responsive: true
      })
      .columns.adjust()
      .responsive.recalc();
  });
  </script>


  @endsection