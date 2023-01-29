@extends('layouts.maindashboard')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- EXTERNAL CSS -->


    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!--Regular Datatables CSS-->
    <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-2xl">Transaction History</h1>
    <p>Daily Report- January 23, 2023 11:00:56</p>
    <div class="container w-full md:w-4/5 xl:w-3/5 mt-5 shadow-xl" style="width:100%">
        <!--Card-->
        <div id='recipients' class="p-2 mt-6 lg:mt-0 rounded shadow bg-white">
            <button class="bg-teal-400 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-full" onclick="">PDF
                BUTTON</button>
            <table id="example" class="stripe hover  md:w-4/5 xl:w-3/5">
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
                        <td>Income</td>
                        <td>140</td>
                        <td>15000</td>

                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>

                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>

                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>Expenses</td>
                        <td>30</td>
                        <td>12000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--/Card-->
    </div>

    {{-- Delete Modal --}}
    <div class="fixed z-10 overflow-y-auto top-0 w-full  hidden" id="deletemodal">
        <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-900 opacity-75">
                    <button
                        class="bg-white hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-full absolute top-0 right-0 m-4"
                        onclick="toggleDeleteModal()">X</button>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h1 class="pb-5">WARNING</h1>
                    </div>
                    <div class="bg-gray-200 px-4 py-3 text-right">
                        <button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2"
                            onclick="toggleDeleteModal()"><i class="fas fa-times"></i> Cancel</button>
                        <button type="button" class="py-2 px-4 bg-red-500 text-white rounded hover:bg-red-700 mr-2"><i
                                class="fas fa-plus"></i>Sumbit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- EDIT MODAL --}}
    <div class="fixed z-10 overflow-y-auto top-0 w-full  hidden" id="editmodal">
        <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-900 opacity-75">
                    <button
                        class="bg-white hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-full absolute top-0 right-0 m-4"
                        onclick="toggleEditModal()">X</button>
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h1 class="pb-5">RECORD</h1>
                        <label>Name</label>
                        <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" placeholder="KUNWARI MAY RECORD" />
                        <label>Description</label>
                        <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" placeholder="KUNWARI MAY RECORD" />
                        <label>Amount</label>
                        <input type="text" class="w-full bg-gray-100 p-2 mt-2 mb-3" placeholder="KUNWARI MAY RECORD" />
                    </div>
                    <div class="bg-gray-200 px-4 py-3 text-right">
                        <button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2"
                            onclick="toggleEditModal()"><i class="fas fa-times"></i> Cancel</button>
                        <button type="button" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700 mr-2"><i
                                class="fas fa-plus"></i> Submit</button>
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
              pageLength: 10
            });
  
            $('#entriesPerPage').on('change', function() {
              table.page.len(this.value).draw();
            });
          });
          let currentModal = "expense";

function toggleExpenseModal() {
  document.getElementById('expensemodal').classList.toggle('hidden')
  currentModal = "expense";
}

function toggleEditModal() {
  document.getElementById('editmodal').classList.toggle('hidden')
  currentModal = "edit";
}

function toggleDeleteModal() {
  document.getElementById('deletemodal').classList.toggle('hidden');
  currentModal = "delete";
}
document.addEventListener("keydown", function(event) {
  if (event.key === "Escape") {
    if (currentModal === "expense") {
      toggleExpenseModal();
    } else if (currentModal === "edit") {
      toggleEditModal();
    } else if (currentModal === "delete") {
      toggleDeleteModal();
    }
  }
});
</script>
@endsection



{{-- Incase if it's needed --}}
{{-- 
<td> <button class="flex items-center focus:outline-none focus:ring-2 focus:ring-white"
    onclick="toggleEditModal()">⚙️
    Edit</button>
<button class="flex items-center focus:outline-none focus:ring-2 focus:ring-white"
    onclick="toggleDeleteModal()">🗑️ Delete</button>
</td> --}}