<!DOCTYPE html>  
<html>  
    <head>   
        <title>Query Data From Sealsman Table</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> 
    </head>  
    <body>  
        <br/>            
        <div class="container" style="width:700px;" align="center">  
            <h4 class="text-center">แสดงรายการทั้งหมดของลูกค้า โดยแสดงเรียงตามลำดับของรหัสกลุ่มงาน (salesman_id) และสามารถแสดงรายการทั้งหมดเฉพาะรหัสกลุมงานที่เลือกจาก Menu salesman_id</h4><br/>  
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
                url:"select_tb_customer.php",  
                method:"POST",
                success:function(data){  
                     $('#show_table').html(data);  
                }  
              });  
        }  
        fetch_data();

        $(document).on('click', '.show_salesman_id', function(){  
             var salesman_id = $(this).data("salesman_id"); 
             $.ajax({  
                url:"fetch_cust_by_salesid.php",  
                method:"POST",
                data:{show_salesman_id:salesman_id},
                success:function(data){  
                     $('#show_table').html(data);  
                }  
             });  
        });

    });
      
</script> 