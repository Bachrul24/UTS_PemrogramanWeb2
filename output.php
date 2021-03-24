<!DOCTYPE HTML>
<html>
  <head>
    <title>Data Covid-19 </title>
  </head>
  
  <body>
  <div style="text-align:center;">
  <?php
  $txt_file    = file_get_contents('data.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);
  $i=1;
  foreach($rows as $row => $data)
  {
        $row_data = explode('|', $data);
        $info[$row]['wilayah']           = $row_data[0];
        $info[$row]['positif']         = $row_data[1];
        $info[$row]['dirawat']          = $row_data[2];
        $info[$row]['sembuh']      = $row_data[3];
        $info[$row]['meninggal']       = $row_data[4];
        $info[$row]['operator']       = $row_data[5];
        $info[$row]['nim']       = $row_data[6];
        echo "<br><br>";
        echo "Data pemantauan Covid-19 Wilayah ";
        echo $info[$row]['wilayah'];
        echo "<br>Per ";
        echo date('d-F-Y')." ";
        echo date('H:i:s');
        echo "<br>".$info[$row]['operator'];
        echo "/".$info[$row]['nim']."<br>";
        echo "<br><br>";
        echo "<td><b>" . $info[$row]['wilayah'] . '</b><br/>';
        echo "<table bgcolor=#FFFFFF border =2 align=center>";
        echo "</tr>";
        echo "<td>Positif</td>";
        echo "<td>Dirawat</td>";
        echo "<td>Sembuh</td>";
        echo "<td>Meninggal</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><b>".$info[$row]['positif']."</b></td>";
        echo "<td><b>".$info[$row]['dirawat']."</b></td>";
        echo "<td><b>".$info[$row]['sembuh']."</b></td>";
        echo "<td><b>".$info[$row]['meninggal']."</b></td>";
        echo "</tr></table>"; 


  }
  ?>
  </div>
</body>
</html>