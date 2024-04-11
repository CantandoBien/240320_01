<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilito.css<?php echo "?".rand(); ?>" rel="stylesheet" />
    <title>BlueCoin</title>
</head>
<body>
<span class='general'>
    <div class='franja'>
        <img src="avisoBlueCoin.png"/>
        <span class='blueShadow'>"WHERE YOUR PASSION LIVES"</span>
        <img src="monedaPeq.png" height='100px'/>
    </div>

    <br/>
    <table>
        <tr><th>Country</th><th>ISO3 Code</th></tr>
        <?php
            $countries = json_decode(file_get_contents('countries.json'));
            foreach($countries as $countries){
                echo '<tr><td>'.$countries->country.'</td><td style="text-align:center">'.$countries->iso3.'</td></tr>';
            }
        ?>
    </table>

</span>
</body>
</html>cd