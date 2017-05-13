<?php  
$connect = mysqli_connect('localhost', 'root', 'root', 'db_sheet1');
//include "configDB.php";

$output = '';  
//$city = $_POST["city"]; 
$sql = "SELECT * FROM Customer ORDER BY salesman_id ASC";  
$result = mysqli_query($connect, $sql); 

$output .= '<h2 align="center">ตารางข้อมูลลูกค้า</h2>';  
$output .= '  
  <div class="table-responsive">  
      <table class="table table-bordered">
          <tr>  
              <th width="10%"><div align="center">Customer_ID</div></th>
              <th width="50%"><div align="center">Customer_Name</div></th>
              <th width="25%"><div align="center">City</div></th>
              <th width="5%"><div align="center">Grade</div></th>
              <th width="10%"><div align="center">Salesman_ID</div></th>
          </tr>'; 
if(mysqli_num_rows($result) > 0) {  
  while($row = mysqli_fetch_array($result)) {  
    $output .= '  
        <tr>  
            <td><div align="center">' . $row["customer_id"] . '</div></td>
            <td><div align="center">' . $row["cust_name"] . '</div></td>
            <td><div align="center">' . $row["city"] . '</div></td>
            <td><div align="center">' . $row["grade"] . '</div></td>
            <td><div align="center"><a class="show_salesman_id" id="salesman_id" data-salesman_id="'. $row["salesman_id"] . '" href="#">' . $row["salesman_id"] . '</a></div></td> 

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
