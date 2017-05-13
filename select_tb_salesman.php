<?php  
$connect = mysqli_connect('localhost', 'root', 'root', 'db_sheet1');
//include "configDB.php";

$output = '';  
//$city = $_POST["city"]; 
$sql = "SELECT name, city FROM Salesman";  
$result = mysqli_query($connect, $sql); 

$output .= '<h2 align="center">ตารางข้อมูลพนักงานขาย</h2>';  
$output .= '  
  <div class="table-responsive">  
      <table class="table table-bordered">
          <tr>  
              <th width="20%"><div align="center">Name</div></th>
              <th width="80%"><div align="center">City</div></th>
          </tr>'; 
if(mysqli_num_rows($result) > 0) {  
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
      </table>  
  </div>';  

echo $output;

?>
