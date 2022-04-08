<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text PHP</title>
</head>
<body>
    <?php
        $bad_word = $_GET["bad_word"];
        $song= "Watch me, take a good thing and fuck it all up in one night
            Catch me, I'm the one on the run away from the headlights
            No sleep, up all week wasting time with people I don't like
            I think something's fucking wrong with me
            Drown myself in alcohol, that shit never helps at all
            I might say some stupid things tonight when you pick up this call
            I've been hearing silence on the other side for way too long";

        $song_bad= "Watch me, take a good thing and fuck it all up in one night
            Catch me, I'm the one on the run away from the headlights
            No sleep, up all week wasting time with people I don't like
            I think something's fucking wrong with me
            Drown myself in alcohol, that shit never helps at all
            I might say some stupid things tonight when you pick up this call
            I've been hearing silence on the other side for way too long";
        $text_change= str_replace($bad_word, '***', $song_bad);
    ?>

    <h1>Song Machine Gun Kelly- I Think I'm Okay</h1>
    <h3>Text: <?php echo $song ?></h3>
    <p>Text length: <?php echo strlen($song) ?></p>
    <h3>Text Censurate: <?php echo $text_change ?></h3>
    <p>Text Censurate length: <?php echo strlen($text_change) ?></p>

</body>
</html>