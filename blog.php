<?php

    include_once('connection.php');

    if ($conn -> connect_errno)
    {
        die ('Connect failed: ' . $conn->connect_errno);
    }

    $sql = "SELECT * from blogView";

    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/unsemantic-grid-responsive.css">
</head>
<body>

<div class="grid-container">
    <header class="grid-80">
        <h1>myBlog</h1>
        <p>because the internet needs to know what I think</p>

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

    <main class="grid-80">
        <div>

            <?php

                while ($row = $result->fetch_array())
                {
                    echo "<p>" . $row['entryTitle'] . " by " . $row['submitter'] . "</p>";
                    echo "<p>" . $row['category'] . "</p>";
                    echo "<p> " . $row['entrySummary'] . "</p>";
                    echo "<hr>";
                }

            ?>

        </div>
    </main>

    <footer class="grid-80">
        Designed by Shiva Persad, 2016
    </footer>
</div>

</body>
</html>

<?php

    mysqli_close($conn);

?>