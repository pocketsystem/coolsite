<?php

// Jsonファイル読込
$file = __DIR__."/sitelist.json";
$json = file_get_contents($file);
$obj  = json_decode($json, true);

$out = '';

foreach ($obj as $data) {
    foreach ($data as $key => $val) {
        if ($key == "sitename") {
            $snm = $val;
        } elseif ($key == "image") {
            $img = $val;
        } elseif ($key == "url") {
            $url = $val;
        }
    }

    $out .= "<div class='siteitem'>";
    $out .= "<a href='".$url."'>";
    $out .= "<div>";
    $out .= "<img src='img/".$img."'><br>".$snm;
    $out .= "</div>";
    $out .= "</a>";
    $out .= "</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COOL WEB SITE</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    <script	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
</head>
<body>
	<h1>COOL WEB SITE</h1>
	<div>We collected simple and cool sites</div>

	<div>
		<div class="sitelist">
            <?php
                echo $out;
            ?>
        </div>
	</div>
</body>
</html>