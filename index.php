<html>
<head>
<title>Asset Form</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
</head>
<body>

    <div class="container">
        <div class="row">
         <div class="col-md-12">  
             <h2 class="text-primary">
                 Search Asset Form
             </h2>
         </div>

        <div class="row">
            <div class="col-md-12">  
                <form class="form">
                    <div class="form-group">
                        <label>Search an Assest</label>
                        <input type="text" name="asset" class="form-control" id="asset" onkeyup="getMeData();">
                    </div>
                </form>

                <div id="getData"></div>


            </div>
        </div>
    </div>

    <script type="text/javascript">
      function getMeData(){
          var check=new XMLHttpRequest();
          check.onreadystatechange=function(){
              if(check.readyState==4){
                  document.getElementById('getData').innerHTML=check.responseText;
              }
          }
          var a=document.getElementById('asset').value;
          check.open("GET","response.php?serialnumber="+a,true);
          check.send(null);
      }
  </script>

</body>
</html>
