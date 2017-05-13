<?php  
$connect = mysqli_connect('localhost', 'root', 'root', 'db_sheet1');
//include "configDB.php";

$output = '';  
//$city = $_POST["city"]; 
$sql = "SELECT customer_id, cust_name, Customer.city, grade, Customer.salesman_id, name, Salesman.city, commission FROM Customer, Salesman WHERE Customer.salesman_id=Salesman.salesman_id AND Customer.city=Salesman.city ORDER BY Customer.city";
$result = mysqli_query($connect, $sql); 

$output .= '<h3 align="center">ตารางข้อมูลรายการลูกค้าและพนักงานขายอยู่ในเมืองเดียวกัน</h3>';  
$output .= '  
  <div class="table-responsive">  
      <table class="table table-bordered">
          <tr>  
              <th width="5%"><div align="center">CustID</div></th> 
              <th width="25%"><div align="center">CustName</div></th>
              <th width="15%"><div align="center">City</div></th>
              <th width="5%"><div align="center">Grade</div></th>
              <th width="5%"><div align="center">SalesID</div></th>
              <th width="25%"><div align="center">SalesName</div></th>
              <th width="15%"><div align="center">City</div></th>
              <th width="5%"><div align="center">Comm</div></th>
          </tr>'; 
if(mysqli_num_rows($result) > 0) {  
  while($row = mysqli_fetch_array($result)) {  
    $output .= '  
        <tr>  
            <td><div align="center">' . $row["customer_id"] . '</div></td>
            <td><div align="left">' . $row["cust_name"] . '</div></td> 
            <td><div align="center">' . $row["city"] . '</div></td>
            <td><div align="center">' . $row["grade"] . '</div></td>
            <td><div align="center">' . $row["salesman_id"] . '</div></td>
            <td><div align="left">' . $row["name"] . '</div></td>
            <td><div align="center">' . $row["city"] . '</div></td>
            <td><div align="center">' . $row["commission"] . '</div></td> 
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
