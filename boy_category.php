<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boys Category</title>
</head>

<body>





    <table width=100% bgcolor="#EDEEF0">
        <tr>
            <td align="center"><a href="home.php"><img src="logo.jpg" alt="AVAKEN LOGO"></a></td>
            <td><input type="text" name="search" value="search for product"> <button type="button">search</button> </td>
            <td><a href="login.html">
                    <font family="proxima nova" color="black">LOGIN & SIGNUP</font>
                </a></td>
            <td>
                <font family="proxima nova" color="black">MORE</font>
            </td>
            <td><img src="images\icons\cart.png" alt="Cart" height="90" width="90"></td>

        </tr>

    </table>


    <table width=100% height="8% " bgcolor="#29224E">
        <tr>
            <th width="18%"><a href="boy_category.html">
                    <font fanily="lato bold" color="White">BOYS</font>
                </a></th>
            <th width="18%"><a href="girls.html">
                    <font fanily="lato bold" color="White">GIRLS</font>
                </a></th>
            <th width="18%"><a href="kid.html">
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










    <font fanily="lato bold" color="#29224E">
        <h2>T-Shirt</h2>
    </font><br>
    <hr>


    <table width="100% " bgcolor="white">



        <tr>
            <!--
                <th> <img src="images\boyes\t_shirt\artcell.jpg" alt="t-shirt"  width="75%" ></th>
                <th> <img src="images\boyes\t_shirt\arvo.jpg" alt="t-shirt" width="75%"  ></th>
                <th> <img src="images\boyes\t_shirt\pubg.jpg" alt="t-shirt" width="75%" ></th>
                <th> <img src="images\boyes\t_shirt\hv2.jpg" alt="t-shirt" width="75%" ></th>
                <th> <img src="images\boyes\t_shirt\hv3.jpg" alt="t-shirt" width="75%" ></th>
                <th> <img src="images\boyes\t_shirt\warface.jpg" alt="t-shirt" width="75%" ></th>
-->
            <?php
    $dir_path="uploads/";
 if(is_dir($dir_path))
 {
     $files=scandir($dir_path);
     
     for($i=0;$i<count($files);$i++)
     {
         echo "<img src='$dir_path$files[$i]'width='10%' hight='20%'>";
     }
 }
?>

        </tr>


    </table>

    <font fanily="lato bold" color="#29224E">
        <h2>Shirt</h2>
    </font><br>
    <hr>


    <table width="100% " bgcolor="white">



        <tr>
            <th> <img src="images\boyes\shirt\fullShirt.png" alt="t-shirt" width="75%"></th>
            <th> <img src="images\boyes\shirt\fullShirt2.png" alt="t-shirt" width="75%"></th>
            <th> <img src="images\boyes\shirt\fullShirt3.png" alt="t-shirt" width="75%"></th>
            <th> <img src="images\boyes\shirt\fullShirt4.png" alt="t-shirt" width="75%"></th>
            <th> <img src="images\boyes\shirt\fullShirt5.png" alt="t-shirt" width="75%"></th>


        </tr>

    </table>


</body>

</html>
