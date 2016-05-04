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
            <li><a href="blog.php">All Blog Items</a></li>
            <li><a href="blog.php">Work Items</a></li>
            <li><a href="blog.php">University Items</a></li>
            <li><a href="blog.php">Family Items</a></li>
            <li><a href="add.php">Insert a Blog Item</a></li>
        </ul>
    </nav>
</header>
<main>
    <section>
        <div id="blogitem">
            <?php
            include ("db_connection.php");
            if($_GET['category']=="university"){
                $getblogs = "SELECT * FROM blogview where category like '%university'";
                $result = mysqli_query($db, $getblogs);
                while ($row = mysqli_fetch_array($result)) { 1
                         echo "<h2>". $row['entryTitle'] . "by". $row['submitter'] ."</h2>";
                         echo "<h6>". $row['category'] . "</h6>";
                         echo "<p>". $row['entrySummary'] . "</p>";
                     }
            }elseif($_GET['category']=="work"){
                $getblogs = "SELECT * FROM blogview where category like '%work'";
                $result = mysqli_query($db, $getblogs);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<h2>". $row['entryTitle'] . " by ". $row['submitter'] ."</h2>";
                    echo "<h6>". $row['category'] . "</h6>";
                    echo "<p>". $row['entrySummary'] . "</p>";
                }
            }elseif($_GET['category']=="family"){
                $getblogs = "SELECT * FROM blogview where category like '%family'";
                $result = mysqli_query($db, $getblogs);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<h2>". $row['entryTitle'] . " by ". $row['submitter'] ."</h2>";
                    echo "<h6>". $row['category'] . "</h6>";
                    echo "<p>". $row['entrySummary'] . "</p>";
                }
            }else{
                $getblogs = "SELECT * FROM blogview";
                $result = mysqli_query($db, $getblogs);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<h2>". $row['entryTitle'] . " by ". $row['submitter'] ."</h2>";
                    echo "<h4>". $row['category'] . "</h4>";
                    echo "<p>". $row['entrySummary'] . "</p>";
                }
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