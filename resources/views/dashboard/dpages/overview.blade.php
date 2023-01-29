@extends('layouts.maindashboard')

@section('content')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!-- EXTERNAL CSS -->
  <link rel="stylesheet" href="{{ asset('homeblade.css') }}">

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
  <!--Regular Datatables CSS-->
  <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <!--Responsive Extension Datatables CSS-->
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>

<body onload=display_ct();>

  <h1 class="text-2xl ml-6">Hello $USERNAME</h1>
  <p class="ml-6"><span id='ct'></span></p>
  <div class="flex flex-wrap">

    <div class="w-full md:w-1/2 xl:w-1/3 p-6">

      <!--Metric Card-->
      <div class=" bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl
      p-5">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
          </div>
          <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">Total Income</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalincome}}</h3>
          </div>
        </div>
      </div>
    </div>
    <!--/Metric Card-->
    <!--Metric Card-->
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
      <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
          </div>
          <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">Total Expense</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalexpense}}</h3>
          </div>
        </div>
      </div>
    </div>
    <!--/Metric Card-->
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
      <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i>
            </div>
          </div>
          <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">Total Budget</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalbudget}} <span
                class="text-green-500"></span>
              {{-- <i class="fas fa-caret-up"></i> --}}
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3">
      {{-- Chart --}}
      <div class="shadow-lg rounded-lg ml-5">
        <h1 class="py-3 px-5 ">DATA REPORT
        </h1>
        <canvas class="p-10 " id="chartPie"></canvas>
      </div>
      <script>
        const dataPie = {
          // labels: ["Total Income", "Total Expenses", "Total Budget"],
          datasets: [{

            data: [300, 50, 100],
            backgroundColor: [
              "rgb(0,0,255)",
              "rgb(255, 0, 0)",
              "rgb(0, 255, 0)",
            ],
            hoverOffset: 4,
          }, ],
        };

        const configPie = {
          type: "pie",
          data: dataPie,
          options: {},
        };

        var chartBar = new Chart(document.getElementById("chartPie"), configPie);
      </script>
      {{-- End of Chart --}}
    </div>


    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
      <!--Card-->
      <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow-lg bg-white">
        <table id="example" class="stripe hover " style="width:100%">
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
            <tr>
              <td>Gas</td>
              <td>Expenses</td>
              <td>12000</td>
              <td>12000</td>
            </tr>
            <tr>
              <td>Gas</td>
              <td>Expenses</td>
              <td>12000</td>
              <td>12000</td>
            </tr>
            <tr>
              <td>Computer</td>
              <td>Expenses</td>
              <td>15000</td>
              <td>15000</td>
            </tr>
            <tr>
              <td>Computer</td>
              <td>Expenses</td>
              <td>15000</td>
              <td>15000</td>
            </tr>
            <tr>
              <td>Computer</td>
              <td>Expenses</td>
              <td>15000</td>
              <td>15000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--/Card-->

      {{-- Disabled FOR DESIGN PURPOSES --}}
      {{-- <button class="bg-teal-400 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-full mt-2" id="button">
        Add Income
      </button><span><button class="bg-teal-400 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-full mt-2 ml-2"
          id="button">
          Add Expense
        </button></button></span> --}}
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        var table = $('#example').DataTable({
          responsive: true,
          lengthChange: false,
          pageLength: 4
        });

        $('#entriesPerPage').on('change', function() {
          table.page.len(this.value).draw();
        });
      });
    </script>

    <script>
      function display_c() {
        var refresh = 1000;
        mytime = setTimeout('display_ct()', refresh)
      }

      function display_ct() {
        var x = new Date()
        document.getElementById('ct').innerHTML = x;
        display_c();
      }
    </script>


</body>

</html>
@endsection