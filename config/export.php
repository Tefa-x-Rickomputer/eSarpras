<?php

  require 'connect.php';

  $db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');
$output = '';

if(isset($_POST["export"])){

   $query = "SELECT * FROM tbarang";

   $result = mysqli_query($db, $query);

   if(mysqli_num_rows($result) > 0){

      $output .= '<table class="table" bordered="1"> 

                <tr>
                    <th class="text-md-center align-middle">No</th>
                    <th class=" align-middle">Nama Sarpras</th>
                    <th class=" align-middle">Merk Sarpras</th>
                    <th class=" align-middle">Jenis Sarpras</th>
                    <th class=" align-middle">Nomor Register</th>
                    <th class=" align-middle">Kondisi</th>

                </tr>';

      while($row = mysqli_fetch_array($result)){

         $output .= '<tr>
                        <td class="text-md-center"><?= $i ?></td>
                        <td class=""><?= $result["namaBarang"]; ?></td>
                        <td class=""><?= $result["merkBarang"]; ?></td>
                        <td class=""><?= $result["tipeBarang"]; ?></td>
                        <td class=""><?= $result["nomorRegister"]; ?></td>
                        <td class=""><?= $result["kondisiBarang"]; ?></td>

                    </tr>';

         }

      $output .= '</table>';

      header('Content-Type: application/xls');

      header('Content-Disposition: attachment; filename=data.xls');

      echo $output;

   }

}

?>