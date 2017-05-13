<!DOCTYPE html>  
<html>  
    <head>   
        <title>Query Data From Table Sealsman and Customer</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> 
    </head>  
    <body>  
        <br/>            
        <div class="container" style="width:700px;" align="center">  
            <h3 class="text-center">แสดงรายการที่ลูกค้า และพนักงานขายอยู่ในเมืองเดียวกัน โดยใช้ตารางข้อ 1 และข้อ 2</h3><br />  
            <div id="show_table"></div> 
        </div>  
        <br/>
        <div align="center"><a href="index.html"><h3>กลับหน้าหลัก</h3></a></div>
        <script src="assets/js/jquery.min.js"></script> 
        <script src="assets/js/bootstrap.min.js"></script> 
    </body>  
</html>  

<script>

    $(document).ready(function(){  

        function fetch_data() {  
              $.ajax({  
                url:"select_tb_sales-cust.php",  
                method:"POST",
                success:function(data){  
                     $('#show_table').html(data);  
                }  
              });  
        }  
        fetch_data();
    });
      
</script> 