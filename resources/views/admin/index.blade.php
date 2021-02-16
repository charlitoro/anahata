<!DOCTYPE html>
<html>
<head>
    <title>Admin Schedules</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
    <form name="adminAction" method="POST">
        {{ csrf_field() }}
        <h2 class="mb-4">Admin Schedules</h2>
        <table class="table table-bordered yajra-datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Telefono</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Estado</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </form>
</div>
   
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {
                data: 'name', 
                name: 'name', 
                searchable: true
            },
            {data: 'phone', name: 'phone'},
            {
                data: 'start_time', 
                name: 'start_time',
                orderable: true, 
            },
            {
                data: 'end_time', 
                name: 'end_time',
                orderable: true, 
            },
            {
                data: 'state', 
                name: 'state',
                searchable: true,
                orderable: true, 
            },
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
</html>