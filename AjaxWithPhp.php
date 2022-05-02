<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajax With PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <table id="main" border="0" cellspacing="0">
       <tr>
         <td id="header">
           <h1>PHP With Ajax</h1>
         </td>
       </tr>
       <tr>
         <td id="table-load">
           <input type="button" id="load-button" value="Load-Data">
         </td>
       </tr>
       <tr>
         <td id="table-data">
           <table border="1" width="100%" cellspacing="0" cellpadding="10px">
             <tr>
               <th>ID</th>
               <th>Name</th>
             </tr>
             <tr>
               <td align="center">1</td>
               <td>Text</td>
             </tr>
           </table>
         </td>
       </tr>
    </table>
    <script type="text/javascript">
    $(document).ready(function() {
      $("#load-button").on("click",function(e) {
        $.ajax({
          url : "ajaxLoad.php",
          type : "POST",
          success :function(data) {
            $("#table-data").html(data);
          }
        });
      });
    });
    </script>
  </body>
</html>
