@extends('layouts.maindashboard')

@section('content')

<head>
  <link rel="stylesheet" href="{{ asset('homeblade.css') }}">
  <link rel="stylesheet" href="{{ asset('sidebar.css') }}">
</head>

<body onload=display_ct();>



  <div class="header">
    {{-- <h1 class="text-2xl ml-6" id="username">Hello,$USERNAME</h1> --}}
    <h1 class="text-2xl ml-6" id="username">Hello, {{ Auth::user()->name }}</h1>
    <p class="ml-6 text-lg" id='ct'></p>
  </div>
  <div class="flex flex-wrap" id="bodyoverview">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6 green">
      <!--Metric Card-->
      <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
          </div>
          <div class="flex-1 text-right md:text-center greentext">
            <h5 class="font-bold uppercase text-gray-600">Total Income</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalincome}}</h3>
          </div>
        </div>
      </div>
    </div>
    <!--/Metric Card-->
    <!--Metric Card-->
    <div class="w-full md:w-1/2 xl:w-1/3 p-6 red">
      <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
          </div>
          <div class="flex-1 text-right md:text-center redtext">
            <h5 class="font-bold uppercase text-gray-600">Total Expense</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalexpense}}</h3>
          </div>
        </div>
      </div>
    </div>
    <!--/Metric Card-->
    <div class="w-full md:w-1/2 xl:w-1/3 p-6 blue">
      <div class=" bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl
      p-5">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-indigo-600">
              <i class="fas fa-tasks fa-2x fa-inverse"></i>
            </div>
          </div>
          <div class="flex-1 text-right md:text-center bluetext">
            <h5 class="font-bold uppercase text-gray-600">Total Budget</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalbudget}} <span
                class="text-green-500"></span>
              {{-- <i class="fas fa-caret-up"></i> --}}
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 piegraph">
      {{-- Chart --}}
      <div class="shadow-lg rounded-lg ml-5">
        <h1 class="py-3 px-5 ">DATA REPORT
        </h1>
        <canvas class="p-10 " id="chartPie"></canvas>
      </div>
      <script>
        let income = "{{$totalincome}}";
        let expense = "{{$totalexpense}}";
        let percentageincome = "{{$percentageincome}}"
        let percentageexpense = "{{$percentageexpense}}"

        const dataPie = {
          labels: ["Total Income" + percentageincome + "%", "Total Expense" + percentageexpense + "%"],
          datasets: [{

            data: [income, expense, ],
            backgroundColor: [
              "rgb(0,255,127)",
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


    <div class="container w-full md:w-4/5 xl:w-3/5 mx-auto px-2 tableview">
      <!--Card-->
      <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow-lg bg-white">
        <table id="example" class="stripe hover " style="width:100%">
          <thead>
            <tr>
              <th data-priority="1">Category</th>
              <th data-priority="2">Name</th>
              <th data-priority="3">Amount</th>
            </tr>
          </thead>
          <tbody>
            @foreach($merges as $merge)
            <tr>
              <td>{{$merge->category}}</td>
              <td>{{$merge->name}}</td>
              <td>{{$merge->amount}}</td>
            </tr>
            @endforeach
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
          pageLength: 5
        });

        $('#entriesPerPage').on('change', function() {
          table.page.len(this.value).draw();
        });
      });
  </script>
</body>

</html>
@endsection