<?php

require_once("core/config.php");
require_once("core/slave.php");
require_once("langs/".$config["lang"].".php");
require_once("core/functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("parts/header.php"); ?>

</head>

<body class="demo-box" data-role="gradient-box" data-gradient-type="radial" data-gradient-size="farthest-corner" data-gradient-position="40px 40px" data-gradient-colors="#f35 0%, #43e 100%">

    <div>

        <div class="se-pre-con">
            <center>
                <div data-role="cube"></div>
            </center>
        </div>

        <div id="after" style="display:none" class="container">

            <div class="row">

                <div class="cell-3">

                    <?php include("parts/menu.php"); ?>

                </div>

                <div class="cell-9">

                    <?php include("pages/$rPage.php"); ?>

                </div>

            </div>

        </div>

    </div>

    <?php include("parts/footer.php"); // FOOTER, NOTHING BELOW THIS! ?>

</body>

</html>
