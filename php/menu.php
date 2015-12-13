<?php

function createBasicPage($fileHtml, $title)
{
    $content = "
    <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en-GB\">
    <head>
        <title>$title</title>
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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-66282017-2', 'auto');
      ga('send', 'pageview');
    </script>

    <div id=\"header\">
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
        "Switch different RootController",
        "Rename Project in Xcode 6.1",
        "Tries Data Structure",
        "Cycle Array",
        "Binary Tree",
        "Stack and Queue in Binary Tree",
        "Touches Event in iOS",
        "ObjectiveC pass double pointers",
        "Draw Triangle OpenGL IOS",
        "Computer Graphic Matrix",
        "Binary Search One Dimensions",
        "Binary Search Two Dimensions",
        "Longest Increasing Subsequence Recursion",
        "Coin Change Algorithm", 
        "Coin Change Dynamic Programming", 
        "Proof On Some Sequences",
        "Proof Fermat Little Theorem", 
        "Haskell Tutorial",
        "Java Algorithm",
        "Java Data Structure",
        "Merge Sort In Java",
        "Merge Sort In C",
        "Merge Sort In C++",
        "Merge Sort In Haskell",
        "Merge Sort In Scala",
        "Quick Sort In Java",
        "Quick Sort In C",
        "Quick Sort In C++",
        "Quick Sort In Haskell",
        "Quick Sort In Scala",

        "Print n prime number in Java",
        "Print n prime number in C",
        "Print n prime number in C++",
        "Print n prime number in Haskell",
        "Print n prime number in Scala",

        "Rotate 2D array 90 degrees in Java",
        "Rotate 2D array 90 degrees in C",
        "Rotate 2D array 90 degrees in c++",
        "Rotate 2D array 90 degrees in Haskell",
        "Rotate 2D array 90 degrees in Scala",

        "Print all Permutation of String Length in Java",
        "Print all Permutation of String Length in C",
        "Print all Permutation of String Length in C++",
        "Print all Permutation of String Length in Haskell",
        "Print all Permutation of String Length in Scala",

        "Reverse a LinkedList in Java",
        "Reverse a LinkedList in C",
        "Reverse a LinkedList in C++",
        "Reverse a LinkedList in Haskell",
        "Reverse a LinkedList in Scala",

        "Merge two sorted lists in Java",
        "Merge two sorted lists in C",
        "Merge two sorted lists in C++",
        "Merge two sorted lists in Haskell",
        "Merge two sorted lists in Scala",

        "Priority Queue in Java",
        "Priority Queue in C",
        "Priority Queue in C++",
        "Priority Queue in Haskell",
        "Priority Queue in Scala",

        "Generate n prime in Java",
        "Generate n prime in C",
        "Generate n prime in C++",
        "Generate n prime in Haskell",
        "Generate n prime in Scala",

        "Prime Number",
        "Math Definition", 
        "Scala Tutorial", 
        "Square Root of Two is irrational", 
        "Cubic Curve", 
        "Differentiated", 
        "Algebraic Curve", 
        "Projective Geometry", 
        "Merge Two Sorted Array",
        "ObjectiveC String Format Specifiers",
        "ObjectiveC Block",
        "ObjectiveC Static Method",
        "ObjectiveC ARC qualifier",
        "ObjectiveC Double and Triple Pointer",
        "IOS Play Sound",
        "IOS Demo",
        "IOS Simple App Demo",
        "IOS Development", 
        "Draw Circle Rectangle Oval in iOS", 
        "Xcode Screenshots",
        "Xcode Add Resource Bundle",
        "Intellij SetUp",
        "Intellij Add External Library",
        "Intellij Add Maven to proejct",
        "Intellij Add dependency to Maven",
        "Intellij Add Framework Support",
        "Intellij Add Scala SDK",
        "Install Maven in Mac OSX ",
        "Setup The Play Framework",
        "Print All Permutation of an Array",
        "C and C++ Tutorial",
        "Quick Sort in C and C++",
        "Visualize Binomial Theorem",
        "Print all combination of r in a given array of size n",
        "Binomial Identity",
        "Mathematic Note",
        "Allocate 2D array in C",
        "Shuffle algorithm in C++",
        "Permutation Algorithm in C++",
        "Permutation Algorithm in Java",
        "Rotated Sorted Array", 
        "Multiply Array in Dynamic Programming",
        "Multiply Long Integer",
        "Print Sprial in 2D array",
        "Vim Tricks",
        "Command Line Tricks",
        "Daily Note",
    );


    $htmlDir     = "/Library/WebServer/Documents/zsurface/html/";
    $indexHtml   = "";
    $tileArray   = array();
    $fileArray   = array();
    $linkArray   = array();
    $outputArray = array();
    for($i=0; $i<count($pageArray); $i++)
    {
        $fileArray[] = "index" . preg_replace("/\s+/", '', $pageArray[$i]) . ".html";

        $path = $htmlDir . $fileArray[$i];
        if(file_exists($path) === false)
        {
            @file_put_contents($path, createBasicPage($fileArray[$i], $pageArray[$i])); 
        }

        $titleArray[] = "<span style=\"font-size:14px\">" . $pageArray[$i] . "</span>";
        $htmlTitleArray[] = "<h3>" . $titleArray[$i] . "<h3>";
        $linkArray[] = "<h3><a style=\"text-decoration:none;font-size:12px;\" href=\"{$fileArray[$i]}\">{$titleArray[$i]}</a></h3>";

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
