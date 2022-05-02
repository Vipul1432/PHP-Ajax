<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AJAX</title>
  </head>
  <body>
    <p id="demo">Here We Load The Data</p>
    <button onclick="loadData()">Click</button>
    <script type="text/javascript">
      function loadData() {
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById('demo').innerHTML = this.response;
          }
        };
        obj.open('GET', 'abc.txt', true);
        obj.send();
      }
    </script>
  </body>
</html>
