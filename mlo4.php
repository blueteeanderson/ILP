<?php 
$times = 8;
$info = array(array('title'=>"CST-338 Android Library Book Reservation System",'link'=>'/mlo/4/otter_library_system.jpg','desc'=>'Utilizing Java, Android Studio, and SQlite create a library regerstration system.', 'type'=>'image'),
array('title'=>"CST-352 Map of the Underground",'link'=>'/mlo/4/map_of_underground.gif','desc'=>'Design and implement a database schema, use PHP as server side code, and integrate AJAX and JQuery to make a dynamic website.', 'type'=>'image'));
$cnt = count($info);
$pg = (isset($_GET['id']) ? $_GET['id']-1 : 0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MLO 4: Programming</title>
        <link rel="stylesheet" type="text/css" href="css/swatches.css" />
        <link rel="stylesheet" type="text/css" href="css/site.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <?php include "scripts/homeNav.php"; ?>
        </nav>
        <div class="project-title ti-4">
        <h1>MLO 4: Programming</h1>
        Student will use computer programming concepts and skills to solve communication design problems.
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