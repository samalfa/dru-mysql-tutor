<!DOCTYPE html>  
<html>  
    <head>   
        <title>Query Data From Sealsman Table</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> 
    </head>  
    <body>  
        <br/>            
        <div class="container" style="width:700px;" align="center">  
            <h3 class="text-center">แสดงรายชื่อ Salesman ทั้งหมด โดยแสดง Name, City และสามารถ Click Menu City แล้วแสดง City ที่เลือก</h3><br />  
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
                url:"select_tb_salesman.php",  
                method:"POST",
                success:function(data){  
                     $('#show_table').html(data);  
                }  
              });  
        }  
        fetch_data();

        $(document).on('click', '.show_city', function(){  
             var city = $(this).data("city"); 
             $.ajax({  
                url:"fetch_salesman_city.php",  
                method:"POST",
                data:{show_city:city},
                success:function(data){  
                     $('#show_table').html(data);  
                }  
             });  
        });

    });
      
</script> 