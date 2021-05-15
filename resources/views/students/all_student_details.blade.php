<!DOCTYPE html>
 
<html lang="en">
<head>
<title>Add Web Project</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container">
               <h2>Students Details Table</h2>
            <table class="table table-bordered" id="laravel_datatable">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                      <th>Grade</th>
                     <th>Date of Birth</th>
                      <th>Address</th>
                     <th>City</th>
                     <th>Country</th>
                  </tr>
               </thead>
            </table>
         </div>
   <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('users-list') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'student_name', name: 'student_name' },
                    { data: 'student_name', name: 'student_name' },
                    { data: 'grade', name: 'grade' },
                    { data: 'address', name: 'address' },
                    { data: 'city', name: 'city' },
                    { data: 'country', name: 'country' },
                 ]
        });
     });
  </script>
   </body>
</html>