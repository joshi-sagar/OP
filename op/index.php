

    <!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body>
	
    <?php if(isset($_GET['msz'])){
		echo	$_GET['msz']; 
		}
		?>
	
    <form action="insert_data.php" method="post">

        <p>

            <label for="firstName">First Name:</label>

            <input type="text" name="first_name" id="firstName">

        </p>

        <p>

            <label for="lastName">Last Name:</label>

            <input type="text" name="last_name" id="lastName">

        </p>

        <p>

            <label for="emailAddress">Email Address:</label>

            <input type="text" name="email" id="emailAddress">

        </p>

        <input type="submit" value="Submit">

    </form>

    </body>

    </html>

