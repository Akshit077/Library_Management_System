<?php
 session_start();
 require '../connection/connection.php';
 $name=$_SESSION['user'];
 $admin=$name;
?>
<?php
    $sql="select * from book where count=1";
           
    $res=$con->query($sql);
    $total=$res->num_rows; 
    
    ?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../css/homepage.css">
        <link rel="stylesheet" type="text/css" href="../css/welcome.css">
        <link rel="stylesheet" type="text/css" href="../css/adminhome.css">
        
        <link rel="stylesheet" type="text/css" href="../css/userhome.css">
        <link rel="stylesheet" type="text/css" href="../css/commonforuser.css">
        <link rel="stylesheet" type="text/css" href="../css/table.css">

        <style>
            #notice1L001
            {
                position: absolute;
                background: yellow;
                color: red;
                font-family: Courier;
                font-size: 18px;
                width: 100%;
                border-bottom: 1px solid #D4F3F7;
            }
            
        </style>
    </head>
    <body>
        <div class="header">
            <div class="headereleent" style="left: 0px; background: rgba(4,33,40,0.4);">
                <label id="h0001">Library</label> 
                
            </div>
            <div class="headereleent" style="left:15%">
                
                <a href="userhomepage.php" id="h0002"><img src="../icons/home-solid.svg" width="25px" height="25px" style=""></a>
                
            </div>
            <!--
            <div class="headereleent" style="right:0%">
                <a href="" id="h0003">
                    <img src="../icons/power-off-solid.svg" width="20px" height="20px" style="margin: 5px">
                </a>
                
                
                
            </div>
            -->
        </div>
        <div class="center">
            <div id="c10001" style="height:100%; width: 95%;">
                <div class="codd" style="border-bottom: 1px solid #D4F3F7;">
                    <img src="../images/My-Seven-Books-1.ico" height="50px" width="50px" style="  ">
                    <label id="c0002" style="">LIBRARY MANAGEMENT SYSTEM</label> 
                    
                 </div>
                <div class="notice1" >
                    <label id="notice1L001">
                        Note: Central Library will open:
                        Monday - Saturday : 8 AM to 8 PM 
                        Sunday: 10 AM to 5 PM
                        
                    </label>
                    
                    
                </div>
                <div class="label001">
                    <label style="position:absolute;top :15% ;left:2px; border-bottom: 1px solid #D4F3F7;">
                        Total Available Books <?php echo $total?>
                        
                    </label>
                    <label style="position:absolute;top :25%; left:25px"> Select Book to Issue</label>
                 
                    
                </div>
                <div class="availbook">
                    <form method="post" action="confirmissue.php">
        <table class="table0001" border=1px cellpadding = "15" cellspacing = "0">
            <tr style="color:#224B46">
                 <th>Select</th><th>BOOK ID</th>  <th>TITLE</th>  <th>AUTHOR</th>  <th>Branch</th>  <th>Category</th>  <th>Rating</th>
                
                
            </tr>
            
                
            <?php
            
            while($row=$res->fetch_assoc())
            {
                
                //echo "<input id=\"rad001\" type=\"radio\" name=\"book\" value=".$row['id'].">";
                echo "<tr class=\"tr001\"> <td class=\"td001\"><input id=\"rad001\" "
                . "type=\"radio\" name=\"book\" value=".$row['id']."></td>"
                . "<td class=\"td001\">". $row['id']."</td>"
                        . " <td class=\"td001\">". $row['title']."</td>"
                         . "<td class=\"td001\">". $row['author']."</td>"
                        . "<td class=\"td001\">". $row['branch']."</td>"
                        
                        . "<td class=\"td001\">". $row['category']."</td>"
                        . "<td class=\"td001\">". $row['rating']."</td>"
                        ."</tr>";
                
                
            }
            ?>
            
        </table>
                           <br><input type="submit" value="Issue" style="color:D4F3F7; background: #071C1A; 
                                      font-family:Helvetica;font-size:20px; height: 35px">
        </form >
    
                    
                    
                    
                </div>
            </div>
            
            
        </div>
        
        
        
        
     
        <div class="left" style="background: rgba(4,33,40,0.9);">
            <div id="L001" style="margin-left:0;background: rgba(4,33,40,0.9);position: absolute; height: 75px; width:100%   ">
                                 <?php echo "<img src=\"../upload/".$admin.".jpeg\" width=\"50px\" height=\"50px\"  style=\" border-radius: 50%;\" alt=\"Upload pofile pic\"> ";?>

                <label style="position: absolute; top:12px; font-family: Helvetica; font-size: 15px; color:#EEFDFC;left:75px" ><?php
                       
                        echo 'WELCOME<br>'.$_SESSION['user'];

                        ?>
                </label>
                
            </div>
            <div class="leftElement" style="background: rgba(15,43,41,0.8); left:0; top:11.9%; height: 30px">
                <label style="position: absolute; top:4px; left: 25%">Menu Bar</label>
                
                
            </div>
            <div class="leftElement" style="top:20%;" >
                <img src="../icons/user-solid.svg" width="20px" height="20px" style="margin: 5px ">
                <a href="userprofile.php">profile</a>
            </div>
            <div class="leftElement" style="top:27%; ">
                <img src="../icons/home-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="userhomepage.php">HOME</a>
            </div>
            <div class="leftElement" style="top:34%;" >
                <img src="../icons/book-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="books.php">Books</a>
            </div>
            <div class="leftElement" style="top:41%; ">
                <img src="../icons/bars-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="usercategory.php">Category</a>
            </div>
            <div class="leftElement" style="top:48%;">
                <img src="../icons/address-book-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="bookissue.php">Books Issue</a>
            </div>
            <div class="leftElement" style="top:55%; ">
                <img src="../icons/about.svg" width="20px" height="20px" style="margin: 5px">
                <a href="about.php">About</a>
            </div>
            <div class="leftElement" style="top:62%; ">
                <img src="../icons/sign-out-alt-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="userlogout.php">Logout</a>
            </div>
            
                
        </div>
        
    </body>
    
</html>