<?php function topModule($pageTitle, $onLoad=' '){
    $output = <<<"FRAMEWORK"
    
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <!-- meta http-equiv="X-Frame-Options" content="deny" -->
    <title>$title</title>


    <link id='wireframecss' type="text/css" rel="stylesheet" href="wireframe.css" />
    <link id='wireframecss' type="text/css" rel="stylesheet" href="forms.css" />
    <link id='wireframecss' type="text/css" rel="stylesheet" href="nav.css" />
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css" disabled>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>
 
<body onload='$onload'>
<header>

        <img src='media/logoSmWhite.png' alt='Bathroom Renovate Taree' />


    </header>
 <nav>

        <!-- link locations: relative to current directory -->
        <ul>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="login.php">Login</a></li>

            <li><a href="product.php">Product</a></li>
            <li><a href="Contact.php">Contact</a></li>

            <li><a href="index.php" t>Main</a></li>
        </ul> |

    </nav>
    <main>
    
    FRAMEWORK;
    echo $output;
}
