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

    <title>Nathan Ashbury: Contact Me</title>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nathan Ashbury">
    <meta name="description" content="Here are ways to contact me below, otherwise use the form.">
    <meta name="keywords" content="Nathan, Ashbury, Nathan Ashbury, Blog, Contact, Social Media, Twitter, LinkedIn, Email">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <!--[if lt IE 9]>
    <script src="lib/html5shiv-master/dist/html5shiv.min.js"></script>
    <script src="lib/respond-master/dest/respond.min.js"></script>
    <!-- <![endif] -->
</head>

<body>
    <header id="fixedhead" class="background border">
        <a href="index.php">
            <h1><span class="colored">Nathan</span> Ashbury</h1>
        </a>
        <?php include './includes/navigation.php'; ?>
        <div class="clear"></div>
    </header>


    <article id="picture">
        <img src="img/na-large-min.png" alt="Picture of site Logo">
    </article>

    <aside id="email" class="background border">
        <h2>Contact Me</h2>
        <section id="email-list">
            <p>Here are ways to contact me below, otherwise use the form.</p>
            <p>Twitter: @nathanashbury</p>
            <p>LinkedIn: NathanAshbury</p>
            <p>Email – nathanashbury@nathan.id.au</p>

            <form>
                <input type="email" placeholder="Enter Name:">
                <input type="email" placeholder="Enter Email:">
                <input type="message" placeholder="Enter Message:">
                <button type="submit" class="email-button">Send Message</button>
            </form>
            <div class="clear"></div>
        </section>

        <div class="border-small"></div>
        <div class="social background">
            <h2 class="colored">Social Media</h2>
            <nav>
                <ul>

                    <li id="twitter"><a href="https://twitter.com/login?lang=en" target="_blank"><img src="img/tc-min.png" width="150" alt="picture of twitter"></a></li>
                    <li id="linkedin"><a href="https://au.linkedin.com/" target="_blank"><img src="img/ic-min.png" width="150" alt="picture of linkedin"></a></li>

                </ul>
            </nav>
            <div class="clear"></div>

        </div>



    </aside>

    <div class="clear"></div>
    <div id="extra-space"></div>
    <footer class="background border">Nathan Ashbury Blog @Copyright 2019
        Email: nathanashbury@nathan.id.au
        Twitter: @nathanashbury
        LinkedIn: NathanAshbury</footer>
</body>

</php>
