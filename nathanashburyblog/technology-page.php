<!--Version 6 File Ethan Longhurst 12:18pm 27th April 2020-->
<!doctype php>
<php lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164406206-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-164406206-1');
    </script>

    <title>Nathan Ashbury: Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Nathan Ashbury">
    <meta name="description" content="I have a passion for technology, I post about latest web trends and even post some of my own work I tinker around with.">
    <meta name="keywords" content="Nathan, Ashbury, Nathan Ashbury, Blog, Script Writer, Family, Photography, Technology">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <!--[if lt IE 9]>
    <script src="lib/html5shiv-master/dist/html5shiv.min.js"></script>
    <script src="lib/respond-master/dest/respond.min.js"></script>
    <!-- <![endif] -->
</head>

<body>
    <header id="fixedhead" class="background border">
        <a href="index-page.php">
            <h1><span class="colored">Nathan</span> Ashbury</h1>
        </a>
        <?php include './includes/navigation.php'; ?>
        <div class="clear"></div>
    </header>

    <article id="blog">
       <div class="blog-content background border">
            <a href="blog-post-leo-tolstoy.php">

                <h2>The start of chapter I of Leo Tolstoy's famous novel War and Peace</h2>

                <img src="img/photography-min.jpg" alt="picture of butterfly">

                <p>Tolstoy was a simply magnificent author and I couldn't resist the temptation to include some of his writing here.</p>

            </a>
        </div>
    
       <div class="blog-content background border">
            <a href="blog-post-cs-lewis.php">

                <h2>C S Lewis quotes</h2>

                <img src="img/ashbury-family-min.jpg" alt="picture of nathan and his family">

                <p>C S Lewis is another author whom I greatly admire. His writings span so many different facets of life.</p>

            </a>
        </div>
    
       <div class="blog-content background border">
            <a href="blog-post-writing-on-writers.php">

                <h2>Writings on writers</h2>

                <img src="img/dusk-braga-portugal-min.jpg" alt="picture of butterfly">

                <p>I haven't been writing much lately because I've rediscovered the writings of so many great people.</p>

            </a>
        </div>

       <div class="blog-content background border">
            <a href="blog-post-friends-romans-countrymen.php">

                <h2>Friends, Romans, countrymen, lend me your ears…</h2>

                <img src="img/house-min.jpg" alt="picture of butterfly">

                <p>If you recognize that line, you're likely a fellow literary enthusiast with a penchant for classics, like me. Maybe Shakespeare is your forte, or maybe you go even further back.</p>

            </a>
        </div>
    </article>
    
    <aside id="side-column" class="background border">
        <div class="side-column-content">

            <h2 class="colored">About Me</h2>

            <img src="img/nathanmini-min.png" alt="picture of author">
            <p>Age: 46</p>
            <p>Current occupation: professional script writer </p>
            <p>Family: married + 3 children (my wife’s name is Angela and our children are Nigella, Oliver and Barron)</p>
            <p>Birth place: England but have lived in Australia since age 11.</p>
            <p>Residence: Lobethal, in the Adelaide Hills, South Australia.</p>
        </div>
        <div class="border-small"></div>
        <div class="social">
            <h2 class="colored">Social Media</h2>
            <nav>
                <ul>
                    <li id="twitter"><a href="https://twitter.com/login?lang=en" target="_blank"><img src="img/tc-min.png" width="150" alt="picture of twitter"></a></li>
                    <li id="linkedin"><a href="https://au.linkedin.com/" target="_blank"><img src="img/ic-min.png" width="150" alt="picture of linkedin"></a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
        <div class="border-small"></div>
        <div class="side-column-content">
            <h2 class="colored">Categories</h2>
            <nav>
                <ul>
                    <li class="arrow"><a href="technology-page.php">Technology<p class="invis">---</p></a></li>
                    <li class="arrow"><a href="family-page.php">Family<p class="invis">----------</p></a></li>
                    <li class="arrow"><a href="photography-page.php">Photography<p class="invis">-</p></a></li>
                    <li class="arrow"><a href="script-writing-page.php">Script Writing<p class="invis"></p></a></li>
                </ul>
            </nav>
        </div>
        <div class="border-small"></div>
        <div class="side-column-content">
            <h2 class="colored">Recent Posts</h2>
            <nav>
                <ul>
                    <li class="arrow"><a href="blog-post-leo-tolstoy.php">The start of chapter I of Leo Tolstoy's famous novel War and Peace</a></li>
                    <li class="arrow"><a href="blog-post-cs-lewis.php">C S Lewis quotes</a></li>
                    <li class="arrow"><a href="blog-post-writing-on-writers.php">Writings on writers</a></li>
                    <li class="arrow"><a href="blog-post-friends-romans-countrymen.php">Friends, Romans, countrymen, lend me your ears…</a></li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="clear"></div>
    <footer class="background border">
        Nathan Ashbury Blog @Copyright 2020
        Email: nathanashbury@nathan.id.au
        Twitter: @nathanashbury
        LinkedIn: NathanAshbury
    </footer>
</body>
</php>