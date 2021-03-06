<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/unsemantic-grid-responsive.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="grid-container">
    <header class="grid-80">
        <h1>myBlog</h1>
        <p id="subheading">because the internet needs to know what I think</p>

        <nav>
            <ul id="horizontal-style">
                <li><a href="blog.php?category=all">All Blog Items</a></li>
                <li><a href="blog.php?category=Work">Work Items</a></li>
                <li><a href="blog.php?category=University">University Items</a></li>
                <li><a href="blog.php?category=Family">Family Items</a></li>
                <li><a href="add.php">Insert a Blog Item</a></li>
            </ul>
        </nav>
    </header>

    <main class="grid-80">
        <?
            if ($_SERVER['REQUEST_METHOD'] === 'GET')
            {
        ?>
                <form action="<? {$_SERVER['PHP_SELF'];} ?>" method="post" id="center-align">
                    <table>
                        <tr>
                            <td><label for="title">Entry Title:</label></td>
                            <td><input type="text" name="title" id="title" size="40" required></td>
                        </tr>
                        <tr>
                            <td><label for="summary">Entry Summary:</label></td>
                            <td><textarea rows="5" cols="40" name="summary" id="summary" required></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="category">Category:</label></td>
                            <td>
                                <select name="category" id="category" required>
                                    <option value="Work">Work</option>
                                    <option value="University">University</option>
                                    <option value="Family">Family</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="submitted">Submitted By:</label></td>
                            <td><input type="text" name="submitted" id="submitted" size="40"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td id="btnRight"><input type="submit" value="Submit" class="button"></td>
                        </tr>
                    </table>
                </form>
                <?
            }
            elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    include_once('connection.php');

                    $title = $_POST['title'];
                    $summary = $_POST['summary'];
                    $category = $_POST['category'];
                    $submitted = $_POST['submitted'];

                    if ($submitted == NULL)
                    {
                        $submitted = "Anonymous";
                    }

                    $sql = "INSERT INTO blogView VALUES (NULL,'$title','$summary','$category','$submitted')";

                    mysqli_query($conn,$sql);
                    mysqli_close($conn);
                    header('Location: blog.php?category=all');
                }
                else
                {
                    header('Location: index.php');
                }
                ?>
    </main>

    <footer class="grid-80">
        Designed by Shiva Persad, 2016
    </footer>
</div>

</body>
</html>
