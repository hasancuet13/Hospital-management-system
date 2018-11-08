<html>
<head>

<script type="text/javascript" src="jquery-1.8.0.min.js"></script>

          <script type="text/javascript">
          function validate() 
          {
            var fnameval=document.getElementById("fname").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0)
               {
                  document.getElementById("fname_msg").innerHTML="this is invalid name ";
                }
            }
          </script>
          </head>
          <body>
          <form name="myform">
          First_Name
          <input type=text id=fname name=fname onblur="validate()"> </input>
           <span id=fname_msg></span>
          <br> <br>
          Last_Name
          <input type=text id=lname name=lname onblur="validate()"> </input>

          <br>
          <input type=button value=check> 

          </form>
          </body>
        </html>