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
//   // BAR CHART
// const sunday = "{{$sunday}}";
// const monday = "{{$monday}}";
// const tuesday = "{{$tuesday}}";
// const wednesday = "{{$wednesday}}";
// const thursday = "{{$thursday}}";
// const friday = "{{$friday}}";
// const saturday = "{{$saturday}}";
// const labelsBarChart = [
//     "Sunday",
//     "Monday",
//     "Tuesday",
//     "Wednesday",
//     "Thursday",
//     "Friday",
//     "Saturday"
// ];
// const dataBarChart = {
//     labels: labelsBarChart,
//     datasets: [{
//         label: "Income Daily Report",
//         backgroundColor: "hsl(140, 61.5%, 47.5%)",
//         borderColor: "hsl(140, 61.5%, 47.5%)",
//         data: [sunday, monday, tuesday, wednesday, thursday, friday, saturday],
//     }, ],
// };
// const configBarChart = {
//     type: "bar",
//     data: dataBarChart,
//     options: {},
// };
// var chartBar = new Chart(document.getElementById("incomebarchart"),
//     configBarChart
// );
// const january = "{{$january}}";
// const february = "{{$february}}";
// const march = "{{$march}}";
// const april = "{{$april}}";
// const may = "{{$may}}";
// const june = "{{$june}}";
// const july = "{{$july}}";
// const august = "{{$august}}";
// const september = "{{$september}}";
// const october = "{{$october}}";
// const november = "{{$november}}";
// const december = "{{$december}}";
// const labels = [
//     "January",
//     "February",
//     "March",
//     "April",
//     "May",
//     "June",
//     "July",
//     "August",
//     "September",
//     "October",
//     "November",
//     "December"
// ];
// const data = {
//     labels: labels,
//     datasets: [{
//       label: "Monthly Income Report",
//       backgroundColor: "hsl(140, 61.5%, 47.5%)",
//       borderColor: "hsl(140, 61.5%, 47.5%)",
//       data: [january, february, march, april, may, june, july, august, september, october, november, december],
//     }, ],
// };
// const configLineChart = {
//     type: "line",
//     data,
//     options: {},
// };
// var chartLine = new Chart(
//     document.getElementById("chartLine"),
//     configLineChart
// );
// setTimeout(function() {
//     $('#alert-message').fadeOut('slow');
// }, 6000); 