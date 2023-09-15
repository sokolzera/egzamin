<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="header">
<h1>"Portal dla wędkarzy"<h1>
</div>
    <div id="l">
    <h3> "Ryby zamieszkujące rzeki"<h3>
        <ol> 
        <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'wedkowanie');
            mysqli_close($polaczenie);
            ?>
        </ol>
    </div>
    <div id="p">
    <img src="ryba1.jpg" alt="Sum"><br>
    <a href="kwerendy.txt">Pobierz kwerendy</a>
</div>
    <div id="tabela">
    <h3>"Ryby drapieżne naszych wód"<h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
</table>
    </div>
    
    </div>
    <div id="stopka">
    <p>Strone wykonał Paweł Sokołowski</p>
    </div>
    
</body>
</html>