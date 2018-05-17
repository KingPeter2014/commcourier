<script type="text/javascript">
    $(document).ready(function(){
        $('#newjourney').on("click",function(){
        $('#centralcontainer').load("listjourney.php");//listjourney.php
        //alert('List your new journey!');
       }); 

        $('#newitem').on("click",function(){
        $('#centralcontainer').load("submit-item.php");//submit-item.php
        //alert('List your new Item!');
       }); 
      
     });
  </script>