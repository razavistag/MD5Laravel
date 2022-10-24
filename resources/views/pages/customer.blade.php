<x-app-layout>
    <!--Section: Cards-->
    <section class="py-5">
        <div class="card  shadow-none">
            <div class="card-header">
                <h3 class="card-title">MANAGE CUSTOMERS</h3>
            </div>
            <div class="card-body  p-0">
                <div class="table-responsive ">
                    <table id="table_id" class="table table-sm table-striped table-bordered table-hover w-100">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Action</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>created at</th>
                                <th>updated at</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            <tr>
                                <td>1</td>
                                <td> </td>
                                <td>{{ strtoupper(bin2hex(random_bytes(5))) }}</td>
                                <td>{{ strtoupper(bin2hex(random_bytes(5))) }}</td>
                                <td>{{ strtoupper(bin2hex(random_bytes(5))) }} </td>
                                <td>{{ strtoupper(bin2hex(random_bytes(5))) }} </td>
                            </tr>
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script type="module">
         $(function() {
            console.log('load datatable')

            $('#table_id').DataTable({
                // dom:'',
                processing: true,
                serverSide: true,
                ajax: '/customer/datatable',
                columns: [
                    { data:'id' },
                    { data: null },
                    { data:'name' },
                    { data:'email' }, 
                    { data:'created_at' },
                    { data:'updated_at' },
                ]
            });
        });

    </script>
</x-app-layout>
