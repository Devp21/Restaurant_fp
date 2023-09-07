<html>  
<head>  
    <title>PHP login system</title>  
     
    <link rel = "stylesheet" type = "text/css" href = "style1.css">   
</head>  
<body>  

<style>



body {
  background-image: url('image/2.jpg');
background-repeat: no-repeat;
  background-size: cover;
  /* background-position:center; */
  position:relative;
}
</style>


<img src="data:image/jpeg;base64,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" alt="Workplace" usemap="#workmap" width="130" height="120">

    <div id = "frm">  
        <!-- <h1>STAFF LOGIN</h1>   -->
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <!-- <label> UserName: </label>   -->
                <input type = "text" id ="user" name  = "user"  placeholder="USERNAME"/>  
            </p>  
            <p>  
                <!-- <label> Password: </label>   -->
                <input type = "password" id ="pass" name  = "pass" placeholder="PASSWORD" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  

    <style>
        #frm{
            width: 30% !important;
            background-color : transparent;
            border:none;
            margin:0;
            padding:0;
            border-radius:0;
            margin-left:15% !important;
            margin-top:15% !important;
            position: absolute;
        }
        #frm input{
            background-color:#60493f;
            width:100%;
            padding:20px;
            color:white;
        }
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: white;
        opacity: 1; /* Firefox */
        text-align:center;
        }

        #btn{
            margin-left:0;
            border:none;
            cursor:pointer;
        }
    </style>


    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  