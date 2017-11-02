<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/DBConn.php");
$con = new DBConn();
    $numRows = 10;
    $swCols = 18;
    $sc = 1;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tee Anderson ILP</title>
        <link rel="stylesheet" type="text/css" href="css/swatches.css" />
        <link rel="stylesheet" type="text/css" href="css/site.css" />
    </head>
    <body class="home-container">
        <div class="wrapper">
            <div class="home-logo"></div>
            <div class="home-bio">
                <div class="home-bio-img">
                <img src="/img/tee2.jpg" alt="tee anderson" />
                </div>
                <div class="home-bio-text">
                <p><span class="major">Major:</span><br />Communication Design</p>
                <p><span class="emphasis">Emphasis:</span><br />Web Design</p>
                <p><span class="minor">Minor:</span><br />Computer Science</p>
                </div>
            </div>
        <?php 
            for($i=0;$i<$numRows;$i++) { 
        ?>
        <div class="hFlex-container">
            <?php for($j=0;$j<$swCols; $j++) { 
                switch($sc) {
                    case 20:
                        echo '<div class="flex-item l-1">
                                <a href="mlo1.php">MLO 1</a>
                              </div>';
                         $sc+=2;
                         $j +=1;
                        break;
                     case 52:
                        echo '<div class="flex-item l-1">
                                <a href="mlo4.php">MLO 4</a>
                              </div>';
                         $sc+=2;
                         $j +=1;
                        break;
                    case 96:
                        echo '<div class="flex-item l-1">
                                <a href="mlo3.php">MLO 3</a>
                              </div>';
                         $sc+=2;
                         $j +=1;
                        break;
                    case 57:
                        $sc+=2;
                        $j+=1;
                        echo '<div class="flex-item l-2">
                                <a href="mlo2.php">MLO 2</a>
                              </div>';
                        break;
                    case 86:
                        $sc+=2;
                        $j+=1;
                        echo '<div class="flex-item l-3">
                                <a href="mlo5.php">MLO 5</a>
                              </div>';
                        break;
                    case 121:
                        $sc+=2;
                        $j+=1;
                        echo '<div class="flex-item l-3">
                                <a href="mlo6.php">MLO 6</a>
                              </div>';
                        break;
                    case 160:
                        $sc+=2;
                        $j+=1;
                        echo '<div class="flex-item l-3">
                                <a href="mlo7.php">MLO 7</a>
                              </div>';
                        break;
                    default:
                        echo '<div class="flex-item swatch s-'.$sc.'"></div>';
                        ++$sc;
                        break;
                }//ends switch
            }//ends $j col loop
            ?>
        </div>
        <?php }//ends $i row loop ?>
        </div>
    </body>
</html>