<?php 
require_once("./app/php_config/Database.php");
require_once("./app/php_functionality/Website.php");

$Website = new Website();
$WebsiteDetails = $Website->TestConnection()[0];

?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $WebsiteDetails["Name"];?></title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/app/assets/css/app.css" type="text/css">
    </head>
    <script type="text/javascript">
        var TestVariable = <?php echo json_encode($WebsiteDetails); ?>
    </script>
    <body>

        <div id="app"></div>

        <script type="text/javascript" src="./app/assets/bundle/main.bundle.js" ></script>

    </body>
</html>
