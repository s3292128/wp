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
        <section>


            <div class="gallery">


                <img src="media/sink.jpg" alt="sink" width="300" height="200">

                <div class="desc">Free Floating Square Sink

                    <form name="product" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php
" method="post">
                        <br>Unit Price<input type="text" value="$150.00" disabled>
                        <input type="hidden" name="id" value="SC123"> Qantity Required
                        <input type="number" name="qty" min="0" max="5">
                        <select name="option">                      
                              <option value="White">White</option>
                              <option value="Black">Black</option>
                            </select>
                        <input class="contact" type="submit" value="Add" onclick="validateForm()">
                    </form>

                    <script>
                        function validateForm() {
                            var x;
                            x = document.getElementByIdName("qty");
                            if (isNaN(x) || x < 1 || x > 5) {
                                alert("Invalid quantity please try again");
                                return false;
                            }
                        }

                    </script>


                </div>
            </div>

            <div class="gallery">

                <img src="media/bath.jpeg" alt="Forest" width="300" height="200">

                <div class="desc">Wide Bath with Feet<br><b>$650.00</b> </div>
            </div>

            <div class="gallery">

                <img src="media/cabinet.jpeg" alt="Cabinet" width="300" height="200">

                <div class="desc">Rounded Corner Sink<br><b>$400</b> </div>
            </div>



        </section>

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

</html>
