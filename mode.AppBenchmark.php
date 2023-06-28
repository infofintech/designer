<div class='back'>
<?php
if ($request['lock'] == 'true') {
    $accountPrefix = 'mani.';
} else {
    $accountPrefix = 'mano.';
}

$portfolioProfileIMG = $accountPrefix.'head.png'.$suffix;
$portfolioLeftIMG = $accountPrefix.'left0.png'.$suffix;
$portfolioRightIMG = $accountPrefix.'right0.png'.$suffix;
$portfolioUpsideLeftIMG = $accountPrefix.'left180.png'.$suffix;
$portfolioUpsideRightIMG = $accountPrefix.'right180.png'.$suffix;
$portfolioSinisterLeftIMG = $accountPrefix.'left270.png'.$suffix;
$portfolioSinisterRightIMG = $accountPrefix.'right270.png'.$suffix;
$portfolioDexterLeftIMG = $accountPrefix.'left90.png'.$suffix;
$portfolioDexterRightIMG = $accountPrefix.'right90.png'.$suffix;

include 'workspace.php';
?>
</div>

<div class='panel' <?php if ($module['spectate'] == 1) { ?> hidden <?php } ?>>
<p align="center">
<?php if (horizontal($request['angle'], 360) == 'u') { ?>
<a href="<?=$portfolioLeftIMG;?>"><img style="width:8%;position:relative;" src="<?=$portfolioLeftIMG;?>"></a>
<a href="<?=$portfolioProfileIMG;?>"><img style="width:14%;position:relative;" src="<?=$portfolioProfileIMG;?>"></a>
<a href="<?=$portfolioRightIMG;?>"><img style="width:8%;position:relative;" src="<?=$portfolioRightIMG;?>"></a>
<?php } elseif (horizontal($request['angle'], 360) == 'l') { ?>
<a href="<?=$portfolioSinisterLeftIMG;?>"><img style="width:80%;position:relative;" src="<?=$portfolioSinisterLeftIMG;?>"></a>
<?php } elseif (horizontal($request['angle'], 360) == 'r') { ?>
<a href="<?=$portfolioDexterRightIMG;?>"><img style="width:80%;position:relative;" src="<?=$portfolioDexterRightIMG;?>"></a>
<?php } elseif (horizontal($request['angle'], 360) == 'd') { ?>
<a href="<?=$portfolioUpsideRightIMG;?>"><img style="width:8%;position:relative;" src="<?=$portfolioUpsideRightIMG;?>"></a>
<a href="<?=$portfolioUpsideLeftIMG;?>"><img style="width:8%;position:relative;" src="<?=$portfolioUpsideLeftIMG;?>"></a>
<?php } ?>
</p>
</div>
