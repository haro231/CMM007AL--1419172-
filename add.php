<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="Assets/unsemantic-grid-responsive-tablet.css"><link href='https://fonts.googleapis.com/css?family=Montserrat|Passion+One' rel='stylesheet' type='text/css'>
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
    <div  id="form1">
        <form>
            <label>Enter Title:</label>
            <input type="text" name="title" required placeholder="Enter Title"><br><br><br>
            <label>Enter Summary:</label>
            <textarea name="summary" rows="2" cols="50" required placeholder="Enter Summary...."></textarea><br><br><br>
            <label>Enter Category:</label>
            <select name="category" size="2" required>
                <option>Work</option>
                <option>University</option>
                <option>Family</option>
            </select>
            <br><br><br>
            <label>Submitted By:</label><input type="text" name="writer" required placeholder="Full Name"><br><br><br>
            <input type="submit" value="submit">
        </form>
    </div>
</main>
<footer>
    <p>Designed by Asin Harry Uche, 2016</p>
</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="Assets/unsemantic-grid-responsive-tablet.css"><link href='https://fonts.googleapis.com/css?family=Montserrat|Passion+One' rel='stylesheet' type='text/css'>
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
    <div  id="form1">
        <form>
            <label>Enter Title:</label>
            <input type="text" name="title" required placeholder="Enter Title"><br><br><br>
            <label>Enter Summary:</label>
            <textarea name="summary" rows="2" cols="50" required placeholder="Enter Summary...."></textarea><br><br><br>
            <label>Enter Category:</label>
            <select name="category" size="2" required>
                <option>Work</option>
                <option>University</option>
                <option>Family</option>
            </select>
            <br><br><br>
            <label>Submitted By:</label><input type="text" name="writer" required placeholder="Full Name"><br><br><br>
            <input type="submit" value="submit">
        </form>
    </div>
</main>
<footer>
    <p>Designed by Asin Harry Uche, 2016</p>
</footer>
</body>
</html>

<?php
include ("dbconnection.php");
if (empty($_POST['title']) || empty($_POST['summary']) || empty($_POST['category']) || empty($_POST['writer'])){
    echo "Fill all feilds";
}
else{
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $category = $_POST['category'];
    $writer = $_POST['writer'];
    $getblogs = "INSERT INTO blogview(entryTitle, entrySummary, category, submitter) VALUES ('$title', '$summary', '$category', '$writer')";
    $result = mysqli_query($db, $getblogs);
    header("Location: blog.php")
}
?>