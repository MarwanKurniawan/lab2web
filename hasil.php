<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Karyawan</title>
</head>
<body>


<?php

?>
   <table border="1">
      
           <td>Nama</td>
           <td><?php echo $_POST['nama']; ?></td>
        </tr>
       <tr>
           <td>tanggal lahir</td>
           <td><?php echo $_POST['tgllahir']; ?></td>
        </tr>
        <tr>
           <td>Usia</td>
           <td><?php $birthDate = "09/13/2000";
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  echo " " . $age;
  ?></td>
        </tr>
       <tr>
           <td>pekerjaan</td>
           <td><?php echo $_POST['pekerjaan']; ?></td>
        </tr>
        
       
   </table> 
</body>
</html>
