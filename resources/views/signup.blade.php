<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
 
</head>
<body>
    <div class="container-fluid col-sm-12 signbar navbar-fixed-top">
      <h1 style="margin-left: 25px;margin-top: 11px;font-family: fantasy;">Krida</h1>
    </div>
    <div class="col-sm-7 col-sm-offset-3 container-fluid" style="height:60px;border-radius:8px 8px 0px 0px;background-color: #000033; color:#FFFFFF;margin-top:100px;">
      <h2 style="margin-left:11px;">Enter Details To Sign-Up</h2>
    </div>
    <div class="col-sm-7 col-sm-offset-3 container-fluid">

    <form class="form-horizontal myform " method="get" enctype="multipart/form-data" style="  height:400px;"  action="/inputusers">
      {{ csrf_field() }}
      <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Username</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="name" id="name">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Email</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="email" id="email">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Password</h4>
          </div>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="password" id="password">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Re Enter Password</h4>
          </div>
          <div class="col-sm-7">
            <input type="password" class="form-control" id="repass">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-2" style="margin-left: 345px;">
            <button  name="submit" class=" btn-lg btn-block" onclick="func1()" style="background-color: #000033;border:1px solid #000033; color:#FFFFFF;" >Sign Up
            </button>
          </div>
        </div>



    </form>

    <script>
    function func1()
    {
      var username = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var repass = document.getElementById("repass").value;
      if(username.length<1)
      {
        alert("Name Required")
      }
      else if(email == '' || email.indexOf('@') == -1 || email.indexOf('.') == -1)
      {
        alert("Invalid Email ID")
      }
      else if(password.length<6)
      {
        alert("Password Should Be Of Atlest 6 Charcter");
      }
      else if(password != repass)
      {
        alert("Password Did Not Match")
      }
      else
      {
        
      }
    }
    
  </script>
</body>
</html>