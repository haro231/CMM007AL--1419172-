<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Passion+One' rel='stylesheet' type='text/css'>
    <meta name="viewpoint"
          content="width=device-width,
          initial-scale=1,
          minimum-scale=1,
          maximum-scale=1"/>
</head>
<body>
<header>
    <div id="top">
        <h1>myBlog</h1>
        <h2>because the internet needs to know what i think</h2>
    </div>
    <nav>
        <ul>
            <li><a href="blog.html">All Blog Items</a></li>
            <li><a href="blog.html">Work Items</a></li>
            <li><a href="blog.html">University Items</a></li>
            <li><a href="blog.html">Family Items</a></li>
            <li><a href="add.html">Insert a Blog Item</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="grid-70">
        <div id = "blogdisplay">
            <?php
            include("dbconnection.php");
            $getblog = "SELECT * FROM blogview";
            $result = mysqli_query($db, $getbugs);

            while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
                echo "{$row['entryTitle']}" . "by" ."{$row['submitter']} <br><br><br>";
                echo "{$row['category']}<br><br><br>";
                echo "{$row['entrySummary']}<br><br><br>";
            }
            ?>
        </div>
    </section>

</main>

<footer>
    <p>Designed by Asin Harry Uche, 2016</p>
</footer>
</body>
</html>