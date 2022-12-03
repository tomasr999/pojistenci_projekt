<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Pojištění</title>
</head>
<body>

<header>
		<div id="logo">
			<h1>PojištěníApp</h1>     
		</div>
		<nav>
			<ul>
				<li><p>Pojištěnci</p></li>
				<li><p>O aplikaci...</p></li>
			</ul>
		</nav>
	</header>
<br>
<br>


<h1>Pojištěnci</h1>
   
<?php


$jan = array(
    'jmeno_a_prijmeni' => 'Jan Novák',
    'telefon' => '731584972',
    'vek' => '31',
);
$josef = array(
    'jmeno_a_prijmeni' => 'Josef Novotný',
    'telefon' => '725458414',
    'vek' => '25',
);
$hanka = array(
    'jmeno_a_prijmeni' => 'Hanka Blatná',
    'telefon' => '603417895',
    'vek' => '42',
);
$lide = array($jan, $josef, $hanka);

echo('<table border="1">');
echo('<tr><th>Jméno a příjmení</th><th>Telefon</th><th>Věk</th></tr>');
foreach ($lide as $clovek)
{
    echo('<td>' . htmlspecialchars($clovek['jmeno_a_prijmeni']) . '</td>');
    echo('<td>' . htmlspecialchars($clovek['telefon']) . '</td>');
    echo('<td>' . htmlspecialchars($clovek['vek']) . '</td></tr>');
}
echo('</table>');

?>
    

        <br>
        <br>
        <h1>Nový pojištěnec</h1>
        <img src="icon.png" alt="ikona" width="12%" height="12%">
                <form action="index.php" method="post">
                <input type="text"name="jmeno" placeholder="Jméno"><br>
                <input type="text" name="prijmeni" placeholder="Příjmení"><br>
                <input type="text" name="vek" placeholder="Telefon"><br>
                <input type="text" name="telefon" placeholder="Věk"><br>
                <input class="tlacitko" type="submit" name="submit" value="Uložit">
            </form>
    
        
</body>
</html>