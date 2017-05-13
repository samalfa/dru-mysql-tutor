<?php  
$connect = mysqli_connect('localhost', 'root', 'root', 'db_sheet1');
//include "configDB.php";

$output = '';  
$sql = "SELECT name, city FROM Salesman WHERE city='".$_POST["show_city"]."'";  
$result = mysqli_query($connect, $sql);  
if(mysqli_num_rows($result) > 0) {  
  $output .= '<h4 align="center">รายชื่อพนักงานขาย (Salesman) จากเมือง : '.$_POST["show_city"].' </h4>'; 
  $output .= '
    <div class="table-responsive">  
      <table class="table table-bordered">  
          <tr>  
              <th width="20%"><div align="center">Name</div></th> 
              <th width="80%"><div align="center">City</div></th>
          </tr>
  ';  
  while($row = mysqli_fetch_array($result)) {  
    $output .= '  
          <tr>  
              <td><div align="center">' . $row["name"] . '</div></td>  
              <td><div align="center"><a class="show_city" id="city" data-city="'. $row["city"] . '" href="#">' . $row["city"] . '</a></div></td>  
          </tr> 
    ';  
  }  
} else {  
    $output .= '
          <tr>  
              <td colspan="4">ไม่พบข้อมูล</td>  
          </tr>';  
}

$output .= '
          <tr>
              <td colspan="4"><div align="center"><a href="index1.php"><< BACK </a></div></td>
          </tr>
      </table>  
  </div>';  

echo $output;  

?>
