<?php
include("addbookinghandle.php");
echo "<h3><a href=clienthome>Home Page</a></h3>";

?>
<html>
    <head>
        
        <link rel="stylesheet" href="addbookinghandle.css">
    </head>
    <body>
        <div>
        <table>
            <tr>
                <td>
                    <div id="divform">
                    <fieldset>
                     
                     <h1 id="heading1">Add Booking </h1>
                     <form method="post" action="">
                     <label for="bname" id="lbname">Booking Owner Name: </label>
                     &#160;&#160;&#160;&#160;<input type="text" name="bname" id="bname" placeholder="Booking Owner Name: "><br>
                     <br> 
                     <label for="bnid" id="lbnid">Booking Owner Nid: </label>
                     &#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="text" name="bnid" id="bnid" placeholder="Booking Owner NID"><br>
                     <br>  
                     <label for="bphone" id="lbphone">Booking Owner Phone: </label>
                     <input type="text" name="bphone" id="bphone" placeholder="Booking Owner Phone"><br>
                     <br>  
                     <label for="baddress" id="lbaddress">Booking Owner Address: </label>
                     <input type="text" name="baddress" id="baddress" placeholder="Booking Owner Address"><br>
                     <br> 
           
                     <label for="bemail" id="lbemail">Booking Owner Email: </label>
                     <input type="text" name="bemail" id="bemail" placeholder="Booking Owner Email"><br>
                     <br> 
                  
                     <label for="bcheckin" id="lbcheckin">Check IN: </label>
                     <input type="date" name="bcheckin" id="bcheckin" placeholder="Check-IN"><br>
                     <br> 
                     <label for="bcheckout" id="lbcheckout">Check OUT: </label>
                     <input type="date" name="bcheckout" id="bcheckout" placeholder="Check Out"><br>
                     <br> 
                     <input type="submit" name="add" id="add" value="ADD">  
                     <input type="reset" name="reset" id="reset" value="RESET"><br>
                     </form>     
                    </fieldset>
                    </div>
                    
                </td>

            </tr>
           

        </table>
    </div>
        <!-- JavaScript File -->
        <script src="../JS/addProductHandle.js"></script>
        <?php
        echo $error;
        ?>
        
    </body>
   
</html>
<?php
echo "<h6><a href=../control/logout.php> Log Out</a></h6>";
?>