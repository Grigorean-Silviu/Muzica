<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">

    <meta name="description" content="Contact magazin de instrumente pentru fanfara">





</head>
<body>
<ul>
    <li><a href="home.html">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a class="active" href="contact.php">Contact</a></li>
</ul>

<img src="assets/images/Logo.png" alt="Trumpet">




<div class="header">
    <h1>Contact</h1>
</div>

<address>
    Mail <a href="mailto:silviu.grigorean01@e-uvt.ro">Grigorean Silviu</a><br>
    Visit us at:<br>
    Example.com<br>

</address>
<div class="container">
    <form action="/action_page.php">
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