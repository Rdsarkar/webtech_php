<?php
session_start();

if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	?>
	
<html>
<title>AVAKEN</title>

<head>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

    </style>
</head>

<body bgcolor="#F7F8F9">
    <table width=100% bgcolor="#EDEEF0">
        <tr>
            <td align="center"><a href="home.html"><img src="logo.jpg" alt="AVAKEN LOGO"></a></td>
            <td><input type="text" name="search" placeholder="search for product" style=" width:450px; hight:45px;">
			
                <input type="button" value=" search " style="width:70px; hight:45px;background-color: green; color: white;"> </td>
            <td>
			<form action='logout(user).php' method='POST'>
			
			<input type="submit" value="logout">
                    
             </td>
				
            <td>
			</form>
                <font family="proxima nova" color="black">MORE</font>
            </td>
            <td><a href="card.html"><img src="images\icons\cart.png" alt="Cart" height="90" width="90"></a></td>

        </tr>

    </table>
    <table width="100%" height="8% " bgcolor="#29224E">
        <tr>



            <th width="18%">
                <div class="dropdown">
                    <span>
                        <font color="white">BOYS</font>
                    </span>
                    <div class="dropdown-content">
                        <a href="boy_category.php"><p>SHIRT</p></a>
                        <p>T-SHIRT</p>
                        <p>SHOE</p>


                    </div>
                </div>
            </th>
            <th width="18%">
                <div class="dropdown">
                    <span>
                        <font fanily="lato bold" color="White"><a href="girls.html">GIRLS</a></font>
                    </span>
                    <div class="dropdown-content">
                        <p>Sharee</p>
                        <p>tops</p>
                        <p>SHOE</p>
                    </div>
                </div>
            </th>
            <th width="18%"><a href="kids.html">
                    <font fanily="lato bold" color="White">KIDS ZONE</font>
                </a></th>
            <th width="18%"><a href="winter">
                    <font fanily="lato bold" color="White">WINTER</font>
                </a></th>
            <th width="18%"><a href="offer.html">
                    <font fanily="lato bold" color="White">OFFER ZONE</font>
            </th>

        </tr>
    </table>
    <br>
    <hr>

    <table border="0" color="white">
        <tr width="100%">
            <td>
                <font fanily="lato bold" color="#29224E">
                    <h2>T-Shirt</h2>
                </font>


            </td>
        </tr>
        <br>
        <hr>
        <tr>
            <th> <img src="images\boyes\t_shirt\artcell.jpg" alt="t-shirt" width="75%"> </th>
            <th> <img src="images\boyes\t_shirt\arvo.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\boyes\t_shirt\pubg.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\boyes\t_shirt\hv2.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\boyes\t_shirt\hv3.jpg" alt="t-shirt" width="75%"></th>


        </tr>
        <tr>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
        </tr>
        <th><a href="details.html"><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></a></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
    </table>

    <table border="0" color="white">
        <tr width="100%">
            <td>
                <font fanily="lato bold" color="#29224E">
                    <h2>Tops</h2>
                </font>


            </td>
        </tr>
        <br>
        <hr>
        <tr>
            <th> <img src="images\girls\tops\top1.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\girls\tops\top2.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\girls\tops\top3.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\girls\tops\top4.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\girls\tops\top5.jpg" alt="t-shirt" width="75%"></th>
        </tr>
        <tr>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
        </tr>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
    </table>
    <table border="0" color="white">
        <tr width="100%">
            <td>
                <font fanily="lato bold" color="#29224E">
                    <h2>shoe</h2>
                </font>


            </td>
        </tr>
        <br>
        <hr>
        <tr>
            <th> <img src="images\shoe\shoe1.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\shoe\shoe2.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\shoe\shoe3.jpeg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\shoe\shoe4.jpg" alt="t-shirt" width="75%"></th>
            <th> <img src="images\shoe\shoe5.jpg" alt="t-shirt" width="75%"></th>


        </tr>
        <tr>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
            <th>
                <font color="green">Price:500</font>
            </th>
        </tr>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
        <th><input type="button" value="Details" styel=" width:150px; height:35px; background-color:blue;color:white;"></th>
    </table>
</body>

</html>

	
	<?php
}
else{
	$_SESSION["msg"]="Suspicious login attempt";
	header("Location:logout.php");
}
?>
<br/>

