<?php
    
    $company;
    if (isset($_GET['company'])) {
        $company = $_GET['company'];
    }
    else {
        // Fallback behaviour goes here
        echo "<h1>Please go back and select a restaurant to donate to!</h1>";
    }
    $returnString;
    
    switch($company) {
        case "companyA":
            $returnString .= "<div class='tyty'>";
            $returnString .= "<h1>Thank you for choosing to order from Restaurant A!</h1>";
            $returnString .= "</div>";
            $returnString .= "<div class='options'>";
            $returnString .= "<div class='row'>";
            $returnString .= "<div class='col-lg'>";
            $returnString .= "</div>";
            $returnString .= "<div class='col-lg'>";
            $returnString .= "<div class='don'>";
            $returnString .= "<h6>How do you want to order?</h6>";
            $returnString .= "<hr>";
            $returnString .= "<h3 style='text-align: center'><strong>PLEASE LEAVE A NOTE IN THE DONATION BOX OF WHICH FOUNDATION YOU WOULD LIKE TO SUPPORT</strong></h3>";
            $returnString .= "<h3 style='text-align: center'><strong>YOU CAN DONATE TO: FOUNDATION A, FOUNDATION B, or FOUNDATION C</strong></h3>";
            $returnString .= "<br>";
            $returnString .= "<h2>Donate Through Paypal</h2>";
            $returnString .= "<br>";
            $returnString .= "<br><br><br><br></div></div></div></div></div>";
            break;
        case "companyB":
            $returnString .= "<div class='tyty'>";
            $returnString .= "<h1>Thank you for choosing to order from Restaurant A!</h1>";
            $returnString .= "</div>";
            $returnString .= "<div class='options'>";
            $returnString .= "<div class='row'>";
            $returnString .= "<div class='col-lg'>";
            $returnString .= "</div>";
            $returnString .= "<div class='col-lg'>";
            $returnString .= "<div class='don'>";
            $returnString .= "<h6>How do you want to order?</h6>";
            $returnString .= "<hr>";
            $returnString .= "<h3 style='text-align: center'><strong>PLEASE LEAVE A NOTE IN THE DONATION BOX OF WHICH FOUNDATION YOU WOULD LIKE TO SUPPORT</strong></h3>";
            $returnString .= "<h3 style='text-align: center'><strong>YOU CAN DONATE TO: FOUNDATION A, FOUNDATION B, or FOUNDATION C</strong></h3>";
            $returnString .= "<br>";
            $returnString .= "<h2>Donate Through Paypal</h2>";
            $returnString .= "<br>";
            $returnString .= "<br><br><br><br></div></div></div></div></div>";
            break;
        case "companyC":
            $returnString .= "<div class='tyty'>";
            $returnString .= "<h1>Thank you for choosing to order from Restaurant A!</h1>";
            $returnString .= "</div>";
            $returnString .= "<div class='options'>";
            $returnString .= "<div class='row'>";
            $returnString .= "<div class='col-lg'>";
            $returnString .= "</div>";
            $returnString .= "<div class='col-lg'>";
            $returnString .= "<div class='don'>";
            $returnString .= "<h6>How do you want to order?</h6>";
            $returnString .= "<hr>";
            $returnString .= "<h3 style='text-align: center'><strong>PLEASE LEAVE A NOTE IN THE DONATION BOX OF WHICH FOUNDATION YOU WOULD LIKE TO SUPPORT</strong></h3>";
            $returnString .= "<h3 style='text-align: center'><strong>YOU CAN DONATE TO: FOUNDATION A, FOUNDATION B, or FOUNDATION C</strong></h3>";
            $returnString .= "<br>";
            $returnString .= "<h2>Donate Through Paypal</h2>";
            $returnString .= "<br>";
            $returnString .= "<br><br><br><br></div></div></div></div></div>";
        break;
    }
    echo $returnString;
    
?>