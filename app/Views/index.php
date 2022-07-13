<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Tiket Pesawat</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
   <div class="container mt-4">
      <h1>Antrian Tiket Pesawat</h1>
      <div class="mt-3">
         <table class="table table-bordered" id="index">
            <thead>
               <tr>
                  <th>Kode Tiket</th>
                  <th>Kelas</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>E</td>
                  <td>EKONOMI</td>
                  <td> <a href="<?php echo ('/antrian/public/users-list/'); ?>" class="btn btn-primary btn-sm">Booking</a></td>
               </tr>
               <tr>
                  <td>B</td>
                  <td>BISNIS</td>
                  <td> <a href="<?php echo ('/antrian/public/users-list1/'); ?>" class="btn btn-primary btn-sm">Booking</a> </td>
               </tr>
            </tbody>
         </table>
      </div>
      <footer>
         <p>Alfiansyah Rambe - 312010338 - TI 20 B2</p>
         <p>&copy; 2022 - Universitas Pelita Bangsa</p>
      </footer>
   </div>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</body>


</html>