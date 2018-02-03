        <script type="text/javascript" src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/datatables/buttons.flash.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/datatables/jszip.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/datatables/pdfmake.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/datatables/buttons.html5.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/datatables/buttons.print.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/datatables/lang/' .app()->getLocale(). '.js')}}"></script>
        <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        language: lang,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'        ]
    });
    </script>