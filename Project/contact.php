<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">

    <meta name="description" content="Contact magazin de instrumente pentru fanfara">
    <meta name="keywords" content="fanfara, instrumente pentru incepatori, teorie, practica, instrumente de suflat,magazin de instrumente, magazin pentru fanfara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<nav>
    <ul>
        <li><img class="imagine" src="assets/images/Logo.png" alt="Trumpet"></li>
        <li style="float:right"><a class="active" href="contact.php">Contact</a></li>
        <li style="float:right"><a href="about.php">Despre</a></li>
        <li style="float:right"><a href="index.php">Acasa</a></li>
    </ul>

</nav>



<header class="header">
    <h1>Contact</h1>
</header>


<address>
    Mail <a href="mailto:silviu.grigorean01@e-uvt.ro">Grigorean Silviu</a><br>
    Visit us at:<br>
    Example.com<br>

</address>
<div class="container">
    <form action="">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>

<div class="footer">
    <p>Footer</p>
</div>


</body>
</html>