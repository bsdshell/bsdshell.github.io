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
        <script src=\"../js/prism.js\"> </script>
    <div id=\"header\">
        <h1>Surface, Curve, Algorithm, Geometry, Algebra</h1>
        <p id=\"layoutdims\">Measure columns in: <a href=\"../index.html\">Home</a> | <a href=\"\">About</a> | $\Lambda$</p>
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


    
    /*
    $indexHtml = "
                <h3><a style=\"text-decoration:none;\" href=\"html/$BinarySearch1D_File\">$BinarySearch1D_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$BinarySearch2D_File\">$BinarySearch2D_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$LongestIncreasingSubsequence_File\">$LongestIncreasingSubsequence_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$MiniCoinCount_File\">$MiniCoinCount_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$Sequence_File\">$Sequence_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$FermatLittleTheorem_File\">$FermatLittleTheorem_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$HaskellTutorial_File\">$HaskellTutorial_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$JavaAlgorithm_File\">$JavaAlgorithm_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$PrimeNumber_File\">$PrimeNumber_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$MathDefinition_File\">$MathDefinition_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$ScalaTutorial_File\">$ScalaTutorial_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$SquareRoot_File\">$SquareRoot_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$CubicCurve_File\">$CubicCurve_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$Differentiated_File\">$Differentiated_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$AlgebraicCurve_File\">$AlgebraicCurve_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$IOSDev_File\">$IOSDev_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$Projective_File\">$Projective_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$RotatedArray_File\">$RotatedArray_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$SprialArray_File\">$SprialArray_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$IOSDrawShape_File\">$IOSDrawShape_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$CommandLineTrick_File\">$CommandLineTrick_Title</a></h3>
                <h3><a style=\"text-decoration:none;\" href=\"html/$VimTrick_File\">$VimTrick_Title</a></h3>
                ";
    */

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
        20=>"Command Line Trick", 
        21=>"Vim Tricks",
        22=>"My Test2",
        23=>"My Test3" 
    );

    $htmlDir = "../html/";
    $indexHtml = "";
    $tileArray = array();
    $fileArray = array();
    $linkArray = array();
    $outputArray = array();
    //print("curr=" . getcwd() . "\n");
    for($i=0; $i<count($pageArray); $i++)
    {
        //print($pageArray[$i] . "\n");
        $fileArray[] = "index" . preg_replace("/\s+/", '', $pageArray[$i]) . ".html";

        $path = $htmlDir . $fileArray[$i];
        //print("path=" . $path . "\n");
        if(file_exists($path) === false)
        {
            @file_put_contents($path, createBasicPage($fileArray[$i])); 
        }

        $titleArray[] = "<span style=\"font-size:16px\">" . $pageArray[$i] . "</span>";
        $htmlTitleArray[] = "<h3>" . $titleArray[$i] . "<h3>";
        $linkArray[] = "<h3><a style=\"text-decoration:none;font-size:16px;\" href=\"{$fileArray[$i]}\">{$titleArray[$i]}</a></h3>";

        //print("titleArray[" . $i . "]=". $titleArray[$i] . "\n");
        //print("fileArray[" . $i . "]=". $fileArray[$i] . "\n");
        //print("htmlTitleArray[" . $i . "]=". $htmlTitleArray[$i] . "\n");
        //print("linkArray[" . $i . "]=". $linkArray[$i] . "\n");
        $indexHtml .= "
                <h3><a style=\"text-decoration:none;\" href=\"html/{$fileArray[$i]}\">{$titleArray[$i]}</a></h3>
                ";
    }
    for($m=0; $m<count($pageArray); $m++)
    {
        $menuBar = "";
        //print('count=' . count($pageArray) . "\n");
        for($i=0; $i<count($pageArray); $i++)
        {
            //print("m=". $m . "  i=". $i . "\n");
            if($m === $i)
            {
                //print("equal============" . "\n");
                $menuBar.= $titleArray[$i];
            }
            else
            {
                $menuBar.= $linkArray[$i];
            }
        }
        $outputArray[$fileArray[$m]] = $menuBar;
    }
    //print("indexHtml=". $indexHtml);
    //print("==========================================\n");

    
    for($m=0; $m<count($pageArray); $m++)
    {
        //print("fileArray[" . $m . "]=" . $fileArray[$m]. "\n    ". $outputArray[$fileArray[$m]]);
        //print("\n");
    }

    if($fileName == "index.html")
    {
        $output = $indexHtml;
        print($output);
    }
    else
    {

        /*
        for($m=0; $m<count($pageArray); $m++)
        {
            print("fileArray[" . $m . "]=" . $fileArray[$m]. "\n    ". $outputArray[$fileArray[$m]]);
            print("\n");
        }
         */
        print($outputArray[$fileName]);
    }

?>
