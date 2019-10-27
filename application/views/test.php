<!DOCTYPE HTML
<html lang = "en">

    <head>
        <meta charset = "utf-8">
        <title>Test View</title>
    </head>

    <body>
        <h2>Badminton Times:</h2>
        <?php foreach($bad_times as $time) : ?>
            <h3><?php echo date('g:ia', strtotime($time['time'])); ?></h3>
        <?php endforeach; ?>
        <br>

        <h2>Basketball Times:</h2>
        <?php foreach($bad_times as $time) : ?>
            <h3><?php echo date('g:ia', strtotime($time['time'])); ?></h3>
        <?php endforeach; ?>
        <br>

        <h2>Mac Studio Times:</h2>
        <?php foreach($bad_times as $time) : ?>
            <h3><?php echo date('g:ia', strtotime($time['time'])); ?></h3>
        <?php endforeach; ?>
        <br>

        <h2>Black Box Times:</h2>
        <?php foreach($bad_times as $time) : ?>
            <h3><?php echo date('g:ia', strtotime($time['time'])); ?></h3>
        <?php endforeach; ?>
        <br>
        
    </body>

</html>