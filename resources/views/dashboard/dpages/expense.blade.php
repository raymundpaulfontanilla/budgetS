@extends('layouts.maindashboard')
@section('content')

<head>
  <link rel="stylesheet" href="{{ asset('expense.css') }}">
  <link rel="stylesheet" href="{{ asset('general.css') }}">
  <link rel="stylesheet" href="{{ asset('sidebar.css') }}">
  @section('title', 'Expense')
</head>

<body onload=display_ct();>

  <div class="flex flex-wrap" id="expensebody">
    @php
    $key = session()->has('update') ? 'update' : (session()->has('expense') ? 'expense' : 'message');
    @endphp
    <div class="w-full md:w-1/2 xl:w-1/3 ml-3.5 expenseparent " data-aos="fade-right">
      <!--Metric Card-->
      <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5 mt-6">
        <div class="flex flex-row items-center">
          <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
          </div>
          <div class="flex-1 text-right md:text-center textred">
            <h5 class="font-bold uppercase text-gray-600">Total Expense</h5>
            <h3 class="font-bold text-3xl"><i class="fa-sharp fa-solid fa-peso-sign"></i>
              {{ number_format($totalexpense, 2, '.', ',') }}</h3>
          </div>
        </div>
      </div>
      <div class="shadow-lg rounded-lg overflow-hidden mt-5">
        <canvas class="" id="chartLine"></canvas>
      </div>
    </div>
    <div class="shadow-lg rounded-lg overflow-hidden mx-auto mt-5 expbarchart" style="
    width: 650px;" data-aos="fade-right">
      <canvas class="" id="expensebarchart"></canvas>
    </div>
    <div class="container w-full md:w-4/5 xl:w-3/5 mt-5 recipientcontainer" style="width:200%">
      <!--Card-->
      <div id='recipients' class="p-5 mt-6 lg:mt-0 rounded shadow bg-white mr-12">
        @if (session()->has($key))
        <div id="alert-message" data-aos="fade-right"
          class="bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-full mr-16"
          role="alert">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
            class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
            </path>
          </svg>
          <strong>{{session()->get($key)}}</strong>
        </div>
        @endif
        <div id="accordionExample">
          <div class="bg-white border border-green-700 mb-5 rounded-t-[15px]" data-aos="fade-left">
            <h2 class="mb-0 " id="headingOne">
              <button class="
              group relative flex w-full items-center rounded-t-[15px] border-0 bg-white py-4 px-5 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-white [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]
              " data-te-collapse-init data-te-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                type="button">
                ADD EXPENSE
              </button>
            </h2>
            <div id="collapseOne" class="!visible" data-te-collapse-item data-te-collapse-show
              aria-labelledby="headingOne" data-te-parent="#accordionExample">
              <div class="py-4 px-5">
                <div class="p-6 mb-6 font-light">
                  <form class="space-y-6" method="POST" action="{{route('createexpense')}}">
                    @csrf
                    <div>
                      <label for="expensename" class="block mb-2 text-base font-medium text-black">Select Expense
                        Category</label>
                      <select id="expensename" name="name"
                        class="bg-gray-200 border border-black text-gray-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-100 dark:border-black dark:placeholder-gray-200 dark:text-black">
                        <option value="Baby">Baby</option>
                        <option value="Beauty">Beauty</option>
                        <option value="Bills">Bills</option>
                        <option value="Car">Car</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Education">Education</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Food">Food</option>
                        <option value="Health">Health</option>
                        <option value="Home">Home</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Shopping">Shopping</option>
                        <option value="Social">Social</option>
                        <option value="Sport">Sport</option>
                        <option value="Tax">Tax</option>
                        <option value="Telephone">Telephone</option>
                        <option value="Transportation">Transportation</option>
                      </select>
                    </div>
                    <div>
                      <label class="block mb-2 text-base font-medium text-black">Description</label>
                      <input name="description" type="text"
                        class="bg-gray-200 border border-black text-gray-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-100 dark:border-black dark:placeholder-gray-200 dark:text-black"
                        required value="{{ old('description') }}" />
                    </div>
                    <div>
                      <label class="block mb-2 text-base font-medium text-black">Amount</label>
                      <input name="amount" type="text"
                        class="bg-gray-200 border border-black text-gray-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-100 dark:border-black dark:placeholder-gray-200 dark:text-black"
                        required />
                    </div>
                    @if ($errors->has('amount'))
                    <h1 class="text-red-500 text-xl mt-2 ">{{ $errors->first('amount') }}
                    </h1>
                    @endif
                    <!-- Modal footer -->
                    <button data-modal-hide="" type="submit"
                      class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Submit</button>
                    <button type="button" data-te-collapse-init data-te-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne"
                      class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <table id="example" class="stripe hover  md:w-4/5 xl:w-3/5">
          <thead>
            <tr>
              <th data-priority="1">Name</th>
              <th data-priority="2">Description</th>
              <th data-priority="3">Amount</th>
              <th data-priority="5">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($expenses as $expense)
            <tr>
              <td>{{$expense->name}}</td>
              <td>{{$expense->description}}</td>
              <td><i class="fa-sharp fa-solid fa-peso-sign"></i>{{$expense->amount}}</td>
              <td>
                <button data-modal-target="editmodal{{ $expense->id }}" data-modal-toggle="editmodal{{ $expense->id }}"
                  type="button">??????
                  Edit</button>
                <button data-modal-target="deletemodal{{ $expense->id }}"
                  data-modal-toggle="deletemodal{{ $expense->id }}" type="button">
                  ??????? Delete</button>
              </td>
              {{-- Delete Modal --}}
              <div id="deletemodal{{ $expense->id }}" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                <div class="relative w-full h-full max-w-md md:h-auto">
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                      class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                      data-modal-hide="deletemodal{{ $expense->id }}">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                      <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>
                      <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        remove
                        this
                        record?</h3>
                      <a href="{{route('deleteexpense',$expense->id)}}"><button data-modal-hide="popup-modal"
                          type="button"
                          class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                          Yes, I'm sure
                        </button></a>
                      <button data-modal-hide="deletemodal{{ $expense->id }}" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                        cancel</button>
                    </div>
                  </div>
                </div>
              </div>
              {{-- Edit Modal --}}
              <div id="editmodal{{ $expense->id }}" data-modal-backdrop="static" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                <div class="relative w-full h-full max-w-lg md:h-auto">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class=" flex items-center justify-between p-5 border-b rounded-t border-white">
                      <h3 class="text-xl font-medium text-black">
                        Edit Form
                      </h3>
                      <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="editmodal{{ $expense->id }}">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 mb-6">
                      <form class="space-y-6" method="POST" action="{{route('editexpense',$expense->id)}}">
                        @csrf
                        <div class="pb-6">
                          <label for="editexpensename" class="block mb-2 text-base font-medium text-black">Select
                            Income
                            Category</label>
                          <select id="editexpensename" name="name" value="{{$expense->name}}"
                            class="bg-gray-200 border border-black text-gray-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-100 dark:border-black dark:placeholder-gray-200 dark:text-black">
                            <option value="Baby">Baby</option>
                            <option value="Beauty">Beauty</option>
                            <option value="Bills">Bills</option>
                            <option value="Car">Car</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Education">Education</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Food">Food</option>
                            <option value="Health">Health</option>
                            <option value="Home">Home</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Shopping">Shopping</option>
                            <option value="Social">Social</option>
                            <option value="Sport">Sport</option>
                            <option value="Tax">Tax</option>
                            <option value="Telephone">Telephone</option>
                            <option value="Transportation">Transportation</option>
                          </select>
                        </div>
                        <div class="pb-6">
                          <label class="block mb-2 text-base font-medium text-black">Description</label>
                          <input type="text" name="description" id="description" value="{{$expense->description}}"
                            class="bg-gray-200 border border-black text-gray-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-100 dark:border-black dark:placeholder-gray-200 dark:text-black"
                            required />
                        </div>
                        <div>
                          <label class="block text-base font-medium text-black">Amount</label>
                          <input type="text" name="amount" id="amount" value="{{$expense->amount}}"
                            class="bg-gray-200 border border-black text-gray-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-100 dark:border-black dark:placeholder-gray-200 dark:text-black"
                            required />
                        </div>
                        @if ($errors->has('expenseedit'))
                        <h1 class="text-red-500 text-xl mt-2 ">{{ $errors->first('expenseedit') }}
                        </h1>
                        @endif
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b border-white">
                      <button data-modal-hide="" type="submit" href="{{route('editexpense',$expense->id)}}"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>
                      <button data-modal-hide="editmodal{{ $expense->id }}" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!--/Card-->
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


  // Bar Chart

  const sunday = "{{$sunday}}";
  const monday = "{{$monday}}";
  const tuesday = "{{$tuesday}}";
  const wednesday = "{{$wednesday}}";
  const thursday = "{{$thursday}}";
  const friday = "{{$friday}}";
  const saturday = "{{$saturday}}";

  const labelsBarChart = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ];
  const dataBarChart = {
    labels: labelsBarChart,
    datasets: [{
      label: "Expense Daily Report",
      backgroundColor: "hsl(348, 83%, 47%)",
      borderColor: "hsl(348, 83%, 47%)",
      data: [sunday, monday, tuesday, wednesday, thursday, friday, saturday],
    }, ],
  };

  const configBarChart = {
    type: "bar",
    data: dataBarChart,
    options: {},
  };

  var chartBar = new Chart(
    document.getElementById("expensebarchart"),
    configBarChart
  );

  const january = "{{$january}}";
  const february = "{{$february}}";
  const march = "{{$march}}";
  const april = "{{$april}}";
  const may = "{{$may}}";
  const june = "{{$june}}";
  const july = "{{$july}}";
  const august = "{{$august}}";
  const september = "{{$september}}";
  const october = "{{$october}}";
  const november = "{{$november}}";
  const december = "{{$december}}";


  const labels = [
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

  
  const data = {
    labels: labels,
    datasets: [{
      label: "Expense Monthly Report",
      backgroundColor: "hsl(348, 83%, 47%)",
      borderColor: "hsl(348, 83%, 47%)",
      data: [january, february, march, april, may, june, july, august, september, october, november, december],
    }, ],
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
  }, 6000);
</script>


@endsection