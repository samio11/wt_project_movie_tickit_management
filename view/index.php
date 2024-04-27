<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/loadData.css">
    <title>Home-Movie</title>
</head>

<body>
    <header>
        <div class="head_01">
            <img src="./picture/logo1.jpg" alt="" id="logo">
        </div>
        <div class="head_02">
            <div class="head_nav">

                <a class="nav" href="./index.php">Home</a>
                <a class="nav" href="./movie_page.php">Movie</a>
                <a class="nav" href="#">Contact</a>

            </div>
            <div class="head_search">
                <input type="search" name="movie_search" id="movie_search">
                <button class="btn_src">Search</button>
                <button onclick="register_login()" class="btn_src">Log In</button>
            </div>
        </div>
    </header>
    <main>
        <!-- banner part -->
        <div class="parent_banner">
            <div class="child_banner">
                <div class="banner_txt">
                    <h2 class="large_txt">"Lights, camera, action! Secure your seat to cinematic magic! 🎬</h2>
                    <p class="small_txt">Book your movie tickets online now and dive into a world of unforgettable stories.</p>
                    <div class="s1">
                        <button class="common_btn">Book Ticket</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- top movie section  -->
        <div>
            <h2 class="s2">Top Movie to watch</h2>
        </div>
        <!-- 1st movie  -->
        <div class="ff_1">
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/73_1biulkYk?si=WsfcjoKVhRIoxKe7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="ff_1">
                <div>
                    <h2 class="movie_name">Deadpool</h2>
                    <p class="common_for_txt">Wade Wilson, a former Special Forces operative turned mercenary, undergoes an experimental procedure <br> to cure his cancer but ends up acquiring accelerated healing powers and adopting the alter ego Deadpool. <br> With his dark humor and penchant for breaking the fourth wall, Deadpool hunts <br> down the man who nearly destroyed his life. This irreverent and action-packed superhero film subverts <br> the genre's conventions, delivering a hilarious and adrenaline-fueled ride that <br> delights audiences with its wit and irreverence. <br></p>
                    <div class="ff_1">
                        <button class="common_btn">Book Ticket</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2nd movie  -->
        <div class="ff_1">
            <div>
                <h2 class="movie_name">Spider-Man: No Way Home (2021)</h2>
                <p class="common_for_txt">n this thrilling installment of the Spider-Man franchise, Peter Parker's life is upended <br> when his identity as Spider-Man is revealed to the world, bringing chaos and danger to his doorstep. <br>br Seeking help from Doctor Strange, Peter attempts to undo the spell but inadvertently unleashes villains <br> from alternate universes. Now, facing formidable foes from his past, Peter must confront his greatest <br> challenge yet and protect both his loved ones and the multiverse itself. <br> "Spider-Man: No Way Home" is a spectacular blend of action, emotion, and nostalgia <br> that leaves audiences on the edge of their seats.</p>
                <div class="ff_1">
                    <button class="common_btn">Book Ticket</button>
                </div>
            </div>
            <div class="ff_1">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JfVOs4VSpmA?si=fB4FQsTFppIumrdV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Top Movie Category -->
        <div>
            <h2 class="s3">Top Movie Category You may Like</h2>
        </div>
        <div id="movieContainer" class="card-container">
            <!-- This is where movie cards will be inserted -->
        </div>
    </main>

    <div class="foot">
        <p>&copy; 2023-2024 </p>
        <p>www.movie.com</p>
    </div>
    <script src="../controller/JS/work_btn.js"></script>
    <script src="../controller/JS/load_data.js"></script>
</body>

</html>