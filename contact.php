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
                <li><a href="#" class="active">Contact</a></li>
            </ul>
            </div>
        </nav>

        <div id="comments">
            <div class="wrapper">
                <form action="" class="form">
                    <div class="input-form">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Enter your Name">
                    </div>
                    <div class="input-form textarea">
                        <label for="comment">Comment</label>
                        <textarea id="comment" placeholder="Enter your Comment"></textarea>
                    </div>
                </form>
                <div class="prev-comments">
                    <div class="single-item">
                        <span class="time"><?=date('d.m.Y. H:i'); ?></span>
                        <h4>Maris Ginters</h4>
                        <pre>If necessary you can contact me by email also</pre>
                    </div>
                </div>
            </div>
        </div>
          
    </section>
    
</body>
</html>