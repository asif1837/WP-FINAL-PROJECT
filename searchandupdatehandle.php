<?php
include("searchandupdatecheck.php");

echo "<h6><a href=client_home.php> Home Page</a></h6>";
?>


<html>
    <head>
        <link rel="stylesheet" href="searchandupdate.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                <div>
                    <fieldset>
                     <legend></legend>  
                     <h1> Search Booking </h1>
                     <form method="post" action="" >
                     <label for="bnid" id="lnid">Booking Owner NID: </label>
                     <input type="text" name="bnid" id="bnid" placeholder="Owner NID"><br>
                     <br>
                     <input type="submit" id="submit" name="search" onclick = "handleFunctionAjax()" value="search">  
                     <input type="reset" id="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                </div>
                 </td> 
            </tr>
                <tr>
                    <td>
                    <div id="Update Booking">
                    <fieldset>
                     <legend> </legend>  
                     <h1> Update Product </h1>
                     <form method="post" action="">
                     <br>
                     <label for="bname" id="lbname">Product Name: </label>
                     <input type="text" id="banme" name="bname" value="<?php echo $bname ?>"><br>
                     <br> 
                     <input type="text" id="bnid" name="bnid" hidden value="<?php echo $bnid ?>"><br>
                     <br>
                     <label for="bphone" id="lbphone">Booking Owner Phone: </label>
                     <input type="text" id="bphone" name="bphone" value="<?php echo $bphone ?>"><br>
                     <br> 
                     <label for="baddress" id="lbaddress">Booking Owner Address: </label>
                     <input type="text" id="pprice" name="pprice" value="<?php echo $baddress ?>"><br>
                     <br>  
                     <label for="bemail" id="lbemail">Owner Email: </label>
                     <input type="text" id="baddress" name="bemail" value="<?php echo $bemail ?>"><br>
                     <br>  
        
                     <label for="bcheckin" id="lbcheckin">Check IN: </label>
                     <input type="datetime" id="bcheckin" name="bcheckin" value="<?php echo $bcheckin ?>"><br>
                     <br>
                     <br>  
                     <label for="bcheckout" id="lbcheckout">Check Out: </label>
                     <input type="datetime" id="bcheckout" name="bcheckout" value="<?php echo $bcheckout ?>"><br>
                     <br>
                     <input type="submit" id="update" name="update" value="UPDATE">
                     <input type="reset" id="reset" name="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                </div>
                    </td>

                </tr>
        </table>
        <p id="demo"></p>
         <!-- Java Script File -->
         <script src="searchBooking.js"></script>
    </body>
    <?php echo $error; ?>
</html>
<?php  
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";
?>