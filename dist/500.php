<?php
    // Change this to develop locally
    $local = ($_SERVER['HTTP_HOST'] == 'error-500.wayne.dev') ? true : false;

    // If we aren't locally
    $path_images = ($local == true) ? '' : '/_resources/images/';
    $path_css = ($local == true) ? '' : '/_resources/css/';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>500 Internal Server Error  - Wayne State University</title>
        <meta name="keywords" content="Wayne State University, wayne.edu, Wayne, State, University, Detroit, Michigan, MI, 48202, urban, research, education, college" />
        <meta name="description" content="Michigan's only urban public research university. With more than 400 degree programs and a location in the heart of Detroit's cultural center, Wayne State offers a distinctive educational experience to students from around the world." />
        <meta name="language" content="en" />
        <meta name="author" content="Wayne State University" />
        <meta name="DC.title" content="Wayne State University" />
        <meta name="DC.publisher" content="Wayne State University" />
        <meta name="DC.description" content="Michigan's only urban public research university. With more than 400 degree programs and a location in the heart of Detroit's cultural center, Wayne State offers a distinctive educational experience to students from around the world." />
        <meta name="DC.format" content="text/html" />
        <link href="<?php echo $path_css; ?>500.css" rel="stylesheet" type="text/css"  media="all" />
        <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="header">
            <div class="row">
                <div class="xlarge-12 large-12 medium-12 small-12 columns">
                    <a href="http://wayne.edu/"><img alt="Wayne State University" src="<?php echo $path_images; ?>waynestate-wordmark.png" width="350" height="34"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="content center-site">
                <div class="xlarge-offset-1 xlarge-5 large-6 medium-12 small-12 columns">
                    <h1>500</h1>
                    <h2>Oops! Looks like<br /> something went wrong!</h2>
                    <p>We track these errors automatically, but if the<br /> problem persists feel free to <a href="mailto:web@wayne.edu">contact us</a>.<br /> In the meantime, try <a href="<?php echo $_SERVER['PHP_SELF']; ?>">refreshing</a>.</p>
                </div>

                <div class="xlarge-6 large-6 medium-12 small-12 columns">
                    <img src="<?php echo $full_path; ?>500.png" title="Sad Connectors" />
                </div>
            </div>
        </div>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-35684592-1', 'wayne.edu', {'name': 'allWayneState'});
            ga('allWayneState.send', 'pageview');
            ga('allWayneState.send', 'event', 'Error', '500', 'page: //<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?> ref: <?php echo $_SERVER['HTTP_REFERER']; ?>');
        </script>
    </body>
</html>