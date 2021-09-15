<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties Location</title>
</head>
<body>

    <?php
        session_start();
        if($_SESSION['user_type']=="land owner"){

            include "include/property_manager_navbar.php"; 
        
        }elseif($_SESSION['user_type']=="customer"){
            
            include "include/customer_navbar.php"; 
        
        }elseif($_SESSION['user_type']=="admin"){
            
            include "include/admin_navbar.php"; 
        
        }

        $address= $_GET["address"];
        ?>
        <section class=" section-t4">
            <div class="container">
                    <div class="title-box-d">
                        <h3 class="title-d">Location</h3>
                    </div>  
            </div> 
            <div class="container">
                <!-- https://www.google.com/maps/dir/Madan+Bhandari+Memorial+College,+Rudmatti+Marg,+Kathmandu/Jorpati/@27.7131374,85.3365023,14z/ -->
                <!-- <iframe width="100%" height="500" src="https://www.google.com/maps/dir/Madan+Bhandari+Memorial+College,+Rudmatti+Marg,+Kathmandu/Jorpati/@27.7131374,85.3365023,14z/">
                </iframe> -->
                <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed">
                </iframe>
            </div>
        </section>
        <?php

    ?> 
</body>
</html>

