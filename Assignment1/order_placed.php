<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8" />
	    <title>Georgian Pizza | Assingment 1</title>
        <link rel="stylesheet" href="css/styles.css" />
        <meta name="author" content="Lucas Coutinho" />
		<meta name="description" content="Order your pizza from Georgian Pizza">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <!-- Page-level header -->
        <header>
            <h1>Georgian Pizza | Assingment 1</h1>
        </header>
        <figure>
            <img src="images/pizza-from-top.jpg" height="175" width = "300" alt="Pizza perspective from top on a table - Source https://en.wikipedia.org/wiki/Pizza">
            <figcaption>Deliciously baked</figcaption>
        </figure>
        <!-- Page-level main content -->
        <main>
            <section>
				<h1>Order placed!</h1>
                <?php
                    $amountPizzas = $_GET['amountPizzas'];
                    $sizeOfPizza = $_GET['sizeOfPizza'];
                    $firstName = $_GET['firstName'];
                    $lastName = $_GET['lasttName'];
                    $phoneNumber = $_GET['phoneNumber'];
                    $address = $_GET['address'];
                    $comments = $_GET['comments'];

                    echo "Thanks for ordering $firstName $lastName. Your $amountPizzas $sizeOfPizza pizzas will be ready soon. We might call you on your phone number ($phoneNumber)."
                ?>
			</section>
        </main>
        <!-- Page Level Footer -->
        <footer>
            <p><small>© Lucas @ Georgian Inc.</small></p>
        </footer>
    </body>
</html>