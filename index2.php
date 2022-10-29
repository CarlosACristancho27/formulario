<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/main2.css">
	<title>Iniciar sesion</title>
</head>
<body>

	<div id="form">  
        <h1>Iniciar sesion</h1>  
        <form name="f1" action="autenticacion.php" onsubmit="return validation()" method="POST">  
            <p>  
                <label>Username: </label>  
                <input type="text" id="username" name="username"/>  
            </p>  
            <p>  
                <label>Password: </label>  
                <input type="password" id="password" name="password"/>  
            </p>  
            <p>     
                <input type="submit" id="btn" value="Ingresar"/>  
            </p>  
            <a href="index.php">Registrar</a>

        </form>  
    </div>  

    <!---validation for empty field-->   
    <script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Username is empty");  
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