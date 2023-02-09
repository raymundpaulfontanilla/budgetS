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