<x-app-layout>
    <!--Section: Cards-->
    <section class="py-5">
        <div class="card  shadow-none">
            <div class="card-header">
                <h3 class="card-title">MANAGE CUSTOMERS</h3>
            </div>
            <div class="card-body  p-0">
                <div class="table-responsive ">
                    <table id="table_id" class="table display compact table-sm table-striped table-bordered table-hove">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Action</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>#</th>
                                <th>Action</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>created at</th>
                                <th>updated at</th>
                            </tr>
                        </thead> 
                    </table>
                </div>
            </div> 
        </div>
    </section>

    <script type="module">
         $(function() {
            console.log('load datatable')

           var  table  = $('#table_id').DataTable({
                dom: '<"d-flex justify-content-between align-items-center"<"d-flex"lB><f>>rtip',
                lengthChange: true,
                search: {
                    return: true,
                },
                pagingType: "full_numbers",
                lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                // fixedColumns:   {
                //     left: 1,
                //     right: 1
                // },
                scrollCollapse: true,
                select:true,
                deferRender:    false,
                autoWidth: false,
                scrollY : '400px',
                scrollX : true,
                scrollCollapse: true,
                fixedHeader: true,
                processing: true,
                serverSide: true,
                ajax: '/customer/datatable',
                columns: [
                    { data:'id' },
                    { data: null ,  width:'400px'},
                    { data:'name', width:'400px' },
                    { data:'email' }, 
                    { data:'created_at' },
                    { data:'updated_at' },   
                    { data:'id' },
                    { data: null ,  width:'400px'},
                    { data:'name', width:'400px' },
                    { data:'email' }, 
                    { data:'created_at' },
                    { data:'updated_at' },                     
                ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
                ],
                columnDefs: [{
                    targets: 1,
                    className: "text-center",
                    data: null,
                    orderable: false,
                    render: function(data, type, row, meta) {
                        var editBtn = '<i class="fas fa-pen"></i>'
                        var deleteBtn = '<i class="fas fa-trash"></i>'
 

                        return `
                        ` + editBtn + `
                        ` + deleteBtn + `
                        `
                    }
                }]
            });

            $("#table_id").css("font-size", 12);
        });

    </script>
</x-app-layout>
