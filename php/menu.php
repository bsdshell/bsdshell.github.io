<?php

function createBasicPage($fileHtml)
{
    $content = "
    <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en-GB\">
    <head>
        <title>Surface, Curve, Algorithm, Geometry, Algebra</title>
        <meta http-equiv=\"Content-Type\" content=\"application/xhtml+xml; charset=utf-8\" />
        <meta name=\"description\" content=\"Surface, Curve, Algorithm, Geometry, Algebra\" />
        <meta name=\"keywords\" content=\"Surface, Curve, Algorithm, Geometry, Algebra\" />
        <meta name=\"robots\" content=\"index, follow\" />
        <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../screen.css\" media=\"screen\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../highlight.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../style.css\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <script type=\"text/x-mathjax-config\">
              MathJax.Hub.Config({
                extensions: [\"tex2jax.js\",\"TeX/AMSmath.js\",\"TeX/AMSsymbols.js\"],
                jax: [\"input/TeX\",\"output/HTML-CSS\"],
                tex2jax: {inlineMath: [[\"$\",\"$\"],[\"\\(\",\"\\)\"]]}
              });
            </script>
        <script type=\"text/javascript\" src=\"../MathJax-2.4-latest/MathJax.js\"></script>
    </head>
    <body>
    <div id=\"header\">
        <h1>Surface, Curve, Algorithm, Geometry, Algebra</h1>
        <p id=\"layoutdims\">Info:<a href=\"../index.html\">Home</a> | <a href=\"\">About</a> | $\Lambda$</p>
    </div>
    <div class=\"colmask rightmenu\">
        <div class=\"colleft\">
            <div class=\"col1\">
                <!-- Column 1 start -->
                <div class=\"mytextbox highlight\">
                    <p>
                    Put your stuff here  
                    </p>
                </div>
            <!-- Column 1 end -->
            </div>
            <div class=\"col2\">
            <!-- Column 2 start -->
                <div>
                    <h3>
                        <?php 
                        \$fileName = \"$fileHtml\";
                        include(\"../php/menu.php\"); 
                        ?>
                    </h3>
                </div>
            <!-- Column 2 end -->
            </div>
        </div>
    </div>

    <div id=\"disqus_thread\"></div>
    <script type=\"text/javascript\">
        /* * * CONFIGURATION VARIABLES * * */
        var disqus_shortname = 'zsurfacecom';
        
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>

    <div id=\"footer\">
        <p>This page uses the <a href=\"\">Put More Stuff Here</a> by <a href=\"\">ZSurface</a>. View more <a href=\"\">ZSurface</a> and <a href=\"\">ZSurface</a>.</p>
    </div>

    </body>
    </html>
    ";
return $content;
}

    $pageArray = array(
        0=>"Binary Search One Dimensions",
        1=>"Binary Search Two Dimensions",
        2=>"Longest Increasing Subsequence Recursion",
        3=>"Mini Coin Change Algorithm", 
        4=>"Proof On Some Sequences",
        5=>"Proof Fermat Little Theorem", 
        6=>"Haskell Tutorial",
        7=>"Java Algorithm",
        8=>"Prime Number",
        9=>"Math Definition", 
        10=>"Scala Tutorial", 
        11=>"Square Root of Two is irrational", 
        12=>"Cubic Curve", 
        13=>"Differentiated", 
        14=>"Algebraic Curve", 
        15=>"IOS Development", 
        16=>"Projective Geometry", 
        17=>"Rotated Sorted Array", 
        18=>"Print Sprial in 2D array", 
        19=>"Draw Circle Rectangle Oval in iOS", 
        20=>"Merge Two Sorted Array",
        21=>"ObjectiveC String Format Specifiers",
        22=>"ObjectiveC Block",
        23=>"ObjectiveC Static Method",
        24=>"ObjectiveC ARC qualifier",
        25=>"ObjectiveC Double and Triple Pointer",
        26=>"Add Image Resource to Xcode",
        27=>"Print All Permutation of an Array",
        28=>"Command Line Trick", 
        29=>"C and C++ Tutorial",
        30=>"Quick Sort in C and C++",
        31=>"Visualize Binomial Theorem",
        32=>"Print all combination of r in a given array of size n",
        33=>"Binomial Identity",
        34=>"IOS Simple App Demo",
        35=>"Vim Tricks",
        36=>"Mathematic Note",
        37=>"Daily Note",
        38=>"Allocate 2D array in C"
    );


    $htmlDir = "/Library/WebServer/Documents/zsurface/html/";
    $indexHtml = "";
    $tileArray = array();
    $fileArray = array();
    $linkArray = array();
    $outputArray = array();
    for($i=0; $i<count($pageArray); $i++)
    {
        $fileArray[] = "index" . preg_replace("/\s+/", '', $pageArray[$i]) . ".html";

        $path = $htmlDir . $fileArray[$i];
        if(file_exists($path) === false)
        {
            @file_put_contents($path, createBasicPage($fileArray[$i])); 
        }

        $titleArray[] = "<span style=\"font-size:16px\">" . $pageArray[$i] . "</span>";
        $htmlTitleArray[] = "<h3>" . $titleArray[$i] . "<h3>";
        $linkArray[] = "<h3><a style=\"text-decoration:none;font-size:16px;\" href=\"{$fileArray[$i]}\">{$titleArray[$i]}</a></h3>";

        $indexHtml .= "
                <h3><a style=\"text-decoration:none;\" href=\"html/{$fileArray[$i]}\">{$titleArray[$i]}</a></h3>
                ";
    }
    for($m=0; $m<count($pageArray); $m++)
    {
        $menuBar = "";
        for($i=0; $i<count($pageArray); $i++)
        {
            if($m === $i)
            {
                $menuBar.= $titleArray[$i];
            }
            else
            {
                $menuBar.= $linkArray[$i];
            }
        }
        $outputArray[$fileArray[$m]] = $menuBar;
    }
    
    if($fileName === "index.html")
    {
        $output = $indexHtml;
        print($output);
    }
    else
    {
        print($outputArray[$fileName]);
    }
?>
