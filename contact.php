<?php

include "DB.php";

error_reporting(0);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message =$_POST['message'];

    $sql = "INSERT INTO comments (name, message) VALUES ('$name', '$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";
    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <!--navigation-->
        <nav>
            <div class="nav-menu">
                <h1>Portfolio</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="galery.html">Galery</a></li>
                <li><a href="#" class="active">Contact Me</a></li>
            </ul>
            </div>
        </nav>

        <div id="comments">
            <div class="wrapper">
                <form action="" method="POST" class="form">
                    <div class="input-form">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your Name">
                    </div>
                    <div class="input-form textarea">
                        <label for="comment">Comment</label>
                        <textarea id="message" name="message" placeholder="Enter your Comment"></textarea>
                    </div>
                    <div class="input-form">
                        <button type="submit" name="submit">Post Comment</button>
                    </div>
                </form>
                <div class="prev-comments">
                    <?php

                    $sql = "SELECT * FROM comments";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <div class="single-item">
                        <?php $d = new DateTime($row['time']); ?>
                        <span class="time"><?=$d->format('d.m.Y. H:i'); ?></span>
                        <h4><?php echo $row['name']; ?></h4>
                        <pre><?php echo $row['message']; ?></pre>
                    </div>
                    <?php

                        }
                    }

                    ?>

                </div>
            </div>
        </div>
          
    </section>
    
</body>
</html>