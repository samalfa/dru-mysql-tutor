<?php  
$connect = mysqli_connect('localhost', 'root', 'root', 'db_sheet1');
//include "configDB.php";

$output = '';  
$sql = "SELECT * FROM Customer WHERE salesman_id='".$_POST["show_salesman_id"]."'";  
$result = mysqli_query($connect, $sql);  
if(mysqli_num_rows($result) > 0) {  
  $output .= '<h4 align="center">รายการลูกค้า จากพนักงานรหัส : '.$_POST["show_salesman_id"].' </h4>'; 
  $output .= '
    <div class="table-responsive">  
      <table class="table table-bordered">  
          <tr>  
              <th width="10%"><div align="center">Customer_ID</div></th>
              <th width="50%"><div align="center">Customer_Name</div></th>
              <th width="25%"><div align="center">City</div></th>
              <th width="5%"><div align="center">Grade</div></th>
              <th width="10%"><div align="center">Salesman_ID</div></th>
          </tr>
  ';  
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
              <td colspan="5">ไม่พบข้อมูล</td>  
          </tr>';  
}

$output .= '
          <tr>
              <td colspan="5"><div align="center"><a href="index2.php"><< BACK </a></div></td>
          </tr>
      </table>  
  </div>';  

echo $output;  

?>
