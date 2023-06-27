<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<body>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Compnay</th>
                <th>Organization</th>
                <th>Services</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach($detail as $detail)
            <tr>
                <td>{{$detail->firstname}}</td>
                <td>{{$detail->lastname}}</td>
                <td>{{$detail->email}}</td>
                <td>{{$detail->phone}}</td>
                <td>{{$detail->company}}</td>
                <td>{{$detail->title}}</td>
                <td>{{$detail->consulting}}</td>
                <td>{{$detail->message}}</td>
                
            </tr>
           @endforeach
        </tfoot>
    </table>

    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
</body>
</html>