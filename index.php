<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilito.css<?php echo "?".rand(); ?>" rel="stylesheet" />
    <title>BlueCoin</title>
    <style>
        a:hover, a:visited{
            color: #ffffff;
            font-size: 2vh;
        }
        a{
            text-decoration: none;
            font-size: 2vh;
        }
        td {
            padding: 20px;
            margin: 10px;
        }
    </style>
</head>
<body>
<span class='general'>
    <div class='franja'>
        <img src="avisoBlueCoin.png" height='100px'/>
        <span class='frase'>"WHERE YOUR PASSION LIVES"</span>
        <img src="monedaPeq.png" height='200px'/>
    </div>
<br/><br/>
<table>
<tr>
    <table>
    <tr>
        <td><a href="https://buy.stripe.com/test_28o4hRc8b5kVcuc9AE">
        <img src="CopitosX500.png" height="240px"></a></td>
        <td><a href="https://buy.stripe.com/test_28o4hRc8b5kVcuc9AE">Copitos JHNOSON $ JHNOSON<br> 500 Unds<br> $ 1.29</a></td>
        <img src="car01.png" height='50px' style="float: right; margin-right: 40px">
    </tr>
    <tr>
        <td><a href="https://buy.stripe.com/test_5kAg0zegjdRr51K6or">
        <img src="cotton.png" height="240px"></a></td>
        <td><a href="https://buy.stripe.com/test_5kAg0zegjdRr51K6or">Cotton HIGIETEX<br> 100 gms<br> $ 1.49</a></td>
    </tr>
    </table>
    <br/><br/>
<br/>
    <table>
        <tr><th>País</th><th>Código ISO3</th></tr>
        <?php
            $countries = json_decode(file_get_contents('countries.json'));
            foreach($countries as $countries){
                echo '<tr><td>'.$countries->country.'</td><td style="text-align:center">'.$countries->iso3.'</td></tr>';
            }
        ?>
    </table>

</td>

</tr>
</table>



</span>
</body>
</html>cd