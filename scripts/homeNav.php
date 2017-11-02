<div class="nav-logo"></div>
<?php
    $numRows =2;
    $swCols = 18;
    $sc = 1;
?>
<?php 
for($i=0;$i<$numRows;$i++) { 
?>
    <div class="hFlex-container">
    <?php for($j=0;$j<$swCols; $j++) { 
        switch($sc) {
            case 1:
                echo '<div class="flex-item l-4">
                      </div>';
                 $sc+=3;
                 $j +=2;
                break;
            case 7:
                $sc+=2;
                $j+=1;
                echo '<div class="flex-item l-1">
                        <a href="mlo1.php">MLO 1</a>
                      </div>';
                break;
            case 10:
                $sc+=2;
                $j+=1;
                echo '<div class="flex-item l-2">
                        <a href="mlo2.php">MLO 2</a>
                      </div>';
                break;
            case 29:
                $sc+=2;
                $j+=1;
                echo '<div class="flex-item l-1">
                        <a href="mlo6.php">MLO 6</a>
                      </div>';
                break;
            case 13:
                $sc+=2;
                $j+=1;
                echo '<div class="flex-item l-2">
                        <a href="mlo3.php">MLO 3</a>
                      </div>';
                break;
            case 32:
                $sc+=2;
                $j+=1;
                echo '<div class="flex-item l-1">
                        <a href="mlo7.php">MLO 7</a>
                      </div>';
                break;
            case 16:
                $sc+=2;
                $j+=1;
                echo '<div class="flex-item l-2">
                        <a href="mlo4.php">MLO 4</a>
                      </div>';
                break;
            case 19:
                $sc+=5;
                $j+=4;
                echo '<div class="flex-item l-5">
                        <a href="index.php">ANDERSON</a>
                      </div>';
                break;
            case 26:
                $sc+=2;
                $j+=1;
                echo '<div class="flex-item l-3">
                        <a href="mlo5.php">MLO 5</a>
                      </div>';
                break;
            default:
                echo '<div class="flex-item swatch s-'.$sc.'"></div>';
                ++$sc;
                break;
        }//ends switch
    }//ends $j col loop
    ?>
    </div><!--end row div -->
<?php }//ends $i row loop ?>