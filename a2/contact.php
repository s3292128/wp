<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <!-- meta http-equiv="X-Frame-Options" content="deny" -->
    <title>Always Renovating</title>


    <link id='wireframecss' type="text/css" rel="stylesheet" href="wireframe.css" />
    <link id='wireframecss' type="text/css" rel="stylesheet" href="forms.css" />
    <link id='wireframecss' type="text/css" rel="stylesheet" href="nav.css" />
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css" disabled>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>

<body>

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
        <h1>Request a Quote</h1>




        <form class="contact" action="contact.php" autocomplete="off">
            <fieldset>
                <br>
                <input type="text" name="firstname" placeholder="Put your first name here" autofocus>
                <br>
                <br> Phone 1<br>
                <input type="text" name="PhoneNumber1" placeholder="best contact phone number here" required="required"><br>

                <br>
                <i class="far fa-envelope"></i>

                <input type="email" name="email" placeholder="put email address here"><br>
                <br> suburb:


                <br>
                <input type="text" name="suburb" placeholder="&#xf0e0; Search" style="font-family:Arial, FontAwesome" <br> <br> Description of work required:<br>
                <textarea cols="30" rows="4" name="Address">Description</textarea>
                <br> <br>

            </fieldset>

            <fieldset>
                <p> Preferred Method of Contact
                    <br>
                    <input type="checkbox" name="Phone" Value="name" /> Phone
                    <br>
                    <input type="checkbox" name="email" Value="email" /> Email
                </p>
                <br>


                <p> Best Contact time
                    <br>
                    <input type="checkbox" name="BusinesHours" Value="Businesshours" /> Inside Business Hours
                    <br>
                    <input type="checkbox" name="Afterhours" Value="afterhours" /> Outside Business hours
                </p>





            </fieldset>

            <fieldset>
                <p> Upload any Photos or supporting documents (optional)
                    <br>
                    <input type="file" name="documents" />
                    <input type="submit" value="upload" />
                    <br>
                    <br>


                    <input class="contact" type="submit" value="Submit">



            </fieldset>








        </form>
    </main>
        <footer>
        <img class="darkLogo" src='media/logoDark.png' alt='Always Renovating Logo' />
        <span><i class="large material-icons icon-teal">done</i> Professional Building Company</span>
        <span><i class="large material-icons icon-teal">done</i> Fully Licensed & Insured</span>
        <br>
        <span><i class="large material-icons icon-teal">done</i> Free No Obligation Quote</span>
        <span><i class="large material-icons icon-teal">done</i> Trustworthy, Prompt & Reliable</span>
        <br>
        <span><i class="large material-icons icon-teal">done</i> Wealth of Experience</span>

<p>&copy; Angela Cook <script>
      
        document.write(new Date().getFullYear());
      </script></p>
<br> all images and wording in this site are for enducational purposes only and is not used for business purposes
      

    </footer>
</body>
