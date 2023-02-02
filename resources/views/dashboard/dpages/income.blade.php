@extends('layouts.maindashboard')
@section('content')

<head>
  <link rel="stylesheet" href="{{ asset('income.css') }}">
</head>

<body onload=display_ct();>
  <h1 class="text-2xl mb-2 ml-3.5" id='ct'>Income Page</h1>
  <div class="flex flex-wrap" id="incomebody">
    @php
    $key = session()->has('income') ? 'income' : 'message';
    @endphp
    @if (session()->has($key))
    <div id="alert-message"
      class="bg-blue-100 rounded-lg py-5 px-6 mb-3 text-base text-blue-700 inline-flex items-center w-full mr-16"
      role="alert" id="alert-message">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
        class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor"
          d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
        </path>
      </svg>
      <strong>{{session()->get($key)}}</strong>
    </div>
    @endif
    <div class="w-full md:w-1/2 xl:w-1/3 ml-3.5">
      <!--Metric Card-->
      <div
        class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5 mt-6">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-green-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
          </div>
          <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">Total Income</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$totalincome}}</h3>
          </div>
        </div>
      </div>
      <div class="shadow-lg rounded-lg overflow-hidden mt-5">
        <canvas class="" id="incomebarchart"></canvas>
      </div>
    </div>
    <div class="shadow-lg rounded-lg overflow-hidden mx-auto mt-5" style="
    width: 650px;">
      <canvas class="" id="chartLine"></canvas>
    </div>

    <div class="container w-full md:w-4/5 xl:w-3/5 mt-5" style="width:200%">
      <!--Card-->
      <div id='recipients' class="p-5 lg:mt-0 rounded shadow bg-white mr-12">
        <button data-modal-target="staticModal" data-modal-toggle="staticModal"
          class="bg-teal-400 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-full">Add Income</button>
        <table id="example" class="stripe hover md:w-4/5 xl:w-3/5">
          <thead>
            <tr>
              <th data-priority="1">Name</th>
              <th data-priority="2">Description</th>
              <th data-priority="3">Amount</th>
              <th data-priority="5">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($incomes as $income)
            <tr>
              <td>{{$income->name}}</td>
              <td>{{$income->description}}</td>
              <td><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$income->amount}}</td>
              <td>
                <a href="" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">⚙️ Edit</a>
                <a href="{{route('deleteincome',$income->id)}}"
                  class="flex items-center focus:outline-none focus:ring-2 focus:ring-white"
                  onclick="return confirm('Are you sure you want to delete this record?');">🗑️ Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!--/Card-->
    </div>
  </div>
  {{-- INCOME MODAL --}}
  <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            INCOME FORM
          </h3>
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="staticModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="px-6 py-6 lg:px-8">
          <form class="space-y-6" method="POST" action=/createincome>
            @csrf
            <div>
              <label class="block mb-2 text-base font-medium text-white">Name</label>
              <input name="name" type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required />
            </div>
            <div>
              <label class="block mb-2 text-base font-medium text-white">Description</label>
              <input name="description" type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required />
            </div>
            <div>
              <label class="block text-base font-medium text-white">Amount</label>
              <input name="amount" type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required />
            </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
          <button data-modal-hide="staticModal" type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          <button data-modal-hide="staticModal" type="button"
            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
        </div>
      </div>
    </div>
  </div>
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
            pageLength: 5
          });

          $('#entriesPerPage').on('change', function() {
            table.page.len(this.value).draw();
          });
        });

        // BAR CHART
const sunday = "{{$sunday}}";        
const monday = "{{$monday}}";
const tuesday = "{{$tuesday}}";
const wednesday = "{{$wednesday}}";
const thursday = "{{$thursday}}";
const friday = "{{$friday}}";
const saturday = "{{$saturday}}";


        const labelsBarChart = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];
  const dataBarChart = {
    labels: labelsBarChart,
    datasets: [
      {
        label: "Monthly Income Report",
        backgroundColor: "hsl(140, 61.5%, 47.5%)",
        borderColor: "hsl(140, 61.5%, 47.5%)",
        data: [sunday, monday, tuesday, wednesday, thursday, friday, saturday],
      },
    ],
  };

  const configBarChart = {
    type: "bar",
    data: dataBarChart,
    options: {},
  };

  var chartBar = new Chart(
    document.getElementById("incomebarchart"),
    configBarChart
  );

  // Line Chart

  const labels = [  "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"];
  const data = {
    labels: labels,
    datasets: [
      {
        label: "Income Daily Report",
        backgroundColor: "hsl(140, 61.5%, 47.5%)",
        borderColor: "hsl(140, 61.5%, 47.5%)",
        data: [sunday, monday, tuesday, wednesday, thursday, friday, saturday],
      },
    ],
  };

  const configLineChart = {
    type: "line",
    data,
    options: {},
  };

  var chartLine = new Chart(
    document.getElementById("chartLine"),
    configLineChart
  );


  setTimeout(function() {
    $('#alert-message').fadeOut('slow');
  }, 10000); // 10 seconds
</script>


@endsection