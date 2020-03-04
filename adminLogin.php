<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript">
        function first() {
            var an = document.alogin.aname.value;
            if (an.length < 5) {
                document.alogin.aname.style.color = "red";
                document.getElementById("msg1").innerHTML = "invalid admin name";
            } else {
                document.alogin.aname.style.color = "black";
                document.getElementById("msg1").innerHTML = "valid admin name";
            }
        }
        
        function second() {
            var ap = document.alogin.apass.value;
            if (ap.length < 8) {
                document.alogin.apass.style.color = "red";
                document.getElementById("msg2").innerHTML = "invalid pass";
            } else {
                document.alogin.apass.style.color = "black";
                document.getElementById("msg2").innerHTML = "valid pass";
            }
        }
        
        function validate() {
            var flag = true;
            var unn = document.alogin.aname.value;
            var pas = document.alogin.apass.value;

            var str = "";
            if (unn.length == 0) {
                flag = false;
                str = "must type user name";
            } else if (pas.length < 8) {
                flag = false;
                str = "8 digit pass required";
            }
            document.getElementById("msg").innerHTML = str;
            return flag;
        }
        </script>
    <title>Admin Login</title>
</head>
<body style="margin: 0; padding: 0; text-align: center; background-color: #EFF5FB;">
    <header style="padding-top: 200px; margin-bottom: 15px; font-size: 40px; font-family:  proxima nova ;
    font-weight: bold;">
        Admin Login
    </header>
    <form action="adminsarver.php" method="post" name="alogin" id="alogin">
        Name:
        <input onkeyup="first()" type="text" name="aname" value="" placeholder="Input Admin Name"><br/>
            <span id="msg1"></span>        
            <br />
        Password:
        <input onkeyup="second()" type="password" name="apass" value="" placeholder="Input Password"><br />
         <span id="msg2"></span>    
        <br />
        <span id="msg"></span>
        <br>
        <input onclick="validate()" style="cursor: pointer; font-size: 25px; font-weight: bold; background-color: #FBF8EF; border: none" type="submit" value="Log In" /><br /><br />
        
        <br />
    </form>
</body>

</html>
