@extends('layouts.maindashboard')

@section('content')

<head>
  <link rel="stylesheet" href="{{ asset('homeblade.css') }}">
  <link rel="stylesheet" href="{{ asset('sidebar.css') }}">
  @section('title', 'Dashboard')

</head>

<body onload=display_ct();>

  <div class="grid grid-cols-3 gap-4 header max-[1024px]:grid-cols-2 max-[1024px]:grid-flow-row-dense"
    data-aos="fade-left">
    <div class="col-span-2 ml-6">
      <h1 class="text-2xl font-medium" id="username">WELCOME BACK! </h1>
      <h1 class="text-4xl font-medium"><strong>{{ ucfirst(Auth::user()->name) }}</strong></h1>
    </div>
    <div class="mr-6 max-[1024px]:ml-6">
      <h1
        class="text-4xl font-medium font-bold text-end max-[414px]:text-xl max-[1024px]:text-4xl max-[1024px]:block max-[1024px]:text-start"
        id="time"></h1>
      <h1
        class="text-2xl font-medium text-end max-[640px]:block max-[412px]:text-base max-[1024px]:text-xl max-[1024px]:block max-[1024px]:text-start"
        id="date"></h1>
    </div>
  </div>


  <div class="flex flex-wrap" id="bodyoverview" data-aos="fade-down">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6 green">
      <!--Metric Card-->
      <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
          </div>
          <div class="flex-1 text-right md:text-center greentext">
            <h5 class="font-bold uppercase text-gray-600">Total Income</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalincome_formatted}}</h3>
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
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalexpense_formatted}}
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!--/Metric Card-->
    <div class="w-full md:w-1/2 xl:w-1/3 p-6 blue">
      <div class=" bg-gradient-to-b from-purple-200 to-purple-100 border-b-4 border-purple-500 rounded-lg shadow-xl
      p-5">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-purple-600">
              <i class="fas fa-tasks fa-2x fa-inverse"></i>
            </div>
          </div>
          <div class="flex-1 text-right md:text-center bluetext">
            <h5 class="font-bold uppercase text-gray-600">Total Budget</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalbudget_formatted}}
              <span class="text-green-500"></span>
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 piegraph p-3">
      {{-- Chart --}}
      <div class="shadow-lg rounded-lg text-center">
        <canvas class="p-10 " id="chartPie"></canvas>
      </div>
      <script>
        let income = "{{$totalincome}}";
        let expense = "{{$totalexpense}}";
        let percentageincome = "{{$percentageincome}}"
        let percentageexpense = "{{$percentageexpense}}"

        const dataPie = {
          labels: ["Total Income" + " -  " + percentageincome + "%", "Total Expense"+ " -  " + percentageexpense + "%"],
          datasets: [{

            data: [income, expense, ],
            backgroundColor: [
              "rgb(24, 161, 77)",
              "rgb(255, 0, 0)",
             
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
        <button class="mb-5"><a href="{{route('income')}}" target="_blank"
            class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full"><span>Income
            </span><i class="fa-solid fa-plus"></i></a></button>
        <button class="mb-5">
          <a href="{{route('expense')}}" target="_blank"
            class=" bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full"><span>Expense
            </span><i class="fa-solid fa-plus"></i></a>
        </button>
        <table id="example" class="stripe hover " style="width:100%">
          <thead>
            <tr>
              <th data-priority="1">Category</th>
              <th data-priority="2">Name</th>
              <th data-priority="3">Description</th>
              <th data-priority="3">Amount</th>
            </tr>
          </thead>
          <tbody>
            @foreach($merges as $merge)
            <tr>
              <td>{{$merge->category}}</td>
              <td>{{$merge->name}}</td>
              <td>{{$merge->description}}</td>
              <td>{{$merge->amount}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
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