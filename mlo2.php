<?php 
$times = 8;
$info = array(array('title'=>"CST-451 Ride the Time Machine",'link'=>'/mlo/2/ride_the_time.jpg','desc'=>'This website couples PHP, AJAX, JQuery and AWS\'s Polly service to make a website that reads aloud the text as it automatically scrolls. 
All parts of the site are based on when audio plays including navigation. This required developing an algorithm that would match scroll speed with the sound files.', 'type'=>'image'),
array('title'=>"CST-451 City of Marina Website",'link'=>'/mlo/2/marina.jpg','desc'=>'This website was a class project that was coupled with our service learning. We had to go out and meet with the clients to discuss how they wanted the site to function', 'type'=>'image'),
array('title'=>"CST-351 Color & Sound",'link'=>'/mlo/2/color_sound.jpg','desc'=>'Color & Sound mixes audio and sound together in a fun little melody.', 'type'=>'image'));
$cnt = count($info);
$pg = (isset($_GET['id']) ? $_GET['id']-1 : 0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MLO 2: Interaction Design</title>
        <link rel="stylesheet" type="text/css" href="css/swatches.css" />
        <link rel="stylesheet" type="text/css" href="css/site.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <?php include "scripts/homeNav.php"; ?>
        </nav>
        <div class="project-title ti-2">
        <h1>MLO 2: Interaction Design</h1>
        Student will apply user-centered design methodology to create an interactive media project emphasizing an event-driven design philosophy.
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