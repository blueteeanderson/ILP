<?php 
$times = 8;
$info = array(array('title'=>"CST-227 Book Cover",'link'=>'/mlo/3/mind.jpg','desc'=>'Use color in a unique way while organizing type in an appealing way for a book cover.', 'type'=>'image'),
array('title'=>"CST-227 Book Cover",'link'=>'/mlo/3/together_w_love.jpg','desc'=>'Together with Love is a fundraiser walk or run event held by the Monterey County Rape Crisis Center. These logos are concepts for the event', 'type'=>'image'));
$cnt = count($info);
$pg = (isset($_GET['id']) ? $_GET['id']-1 : 0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MLO 3: Design Principles</title>
        <link rel="stylesheet" type="text/css" href="css/swatches.css" />
        <link rel="stylesheet" type="text/css" href="css/site.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <?php include "scripts/homeNav.php"; ?>
        </nav>
        <div class="project-title ti-3">
        <h1>MLO 3: Design Principles</h1>
        Student demonstrates the systematic application of aesthetic and design principles to solve a communication design problem.
        </div>
        
        <main class="exercise">
            <div class="ex-nav">
                <?php include "scripts/ex_nav.php";?>
            </div>
             <div class="ex-content">
                <h1 class="exercise-title"><?=$info[$pg]['title']?></h1>
                <p><?=$info[$pg]['desc']?></p>
                <?php if($info[$pg]['type']!='image') { ?>
                    <a href="<?=$info[$pg]['link']?>"><?=$info[$pg]['type']?></a>
                <?php } else { ?>
                    <img src="<?=$info[$pg]['link']?>" />
                <?php } ?>
            </div>
        </main>
        <footer></footer>
    </body>
</html>