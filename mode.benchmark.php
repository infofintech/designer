<div class='back'>
<?php
$parent = 'menu';
if ($request['lock'] == 'true') {
    $applyFilter = 100;
} else {
    $applyFilter = 0;
}
if ($request['input'] == '' || $request['input'] == '.' || $request['input'] == '..') {
    $portfolioProfileIMG = $prefixes['account'].'head.png'.$suffix;
    $portfolioLeftIMG = $prefixes['account'].'left0.png'.$suffix;
    $portfolioRightIMG = $prefixes['account'].'right0.png'.$suffix;
    $portfolioUpsideLeftIMG = $prefixes['account'].'left180.png'.$suffix;
    $portfolioUpsideRightIMG = $prefixes['account'].'right180.png'.$suffix;
    $portfolioSinisterLeftIMG = $prefixes['account'].'left270.png'.$suffix;
    $portfolioSinisterRightIMG = $prefixes['account'].'right270.png'.$suffix;
    $portfolioDexterLeftIMG = $prefixes['account'].'left90.png'.$suffix;
    $portfolioDexterRightIMG = $prefixes['account'].'right90.png'.$suffix;
} else {
    if (isEntity($request['input'])) {
        if (file_exists($request['input'].'/favicon.png')) {
            $portfolioProfileIMG = $request['input'].'/favicon.png'.$suffix;
        } else {
            $portfolioProfileIMG = $prefixes['account'].'head.png'.$suffix;
        }
        if (file_exists($request['input'].'/enu.left.png')) {
            $portfolioLeftIMG = $request['input'].'/enu.left.png'.$suffix;
        } else {
            $portfolioLeftIMG = $prefixes['account'].'left0.png'.$suffix;
        }
        if (file_exists($request['input'].'/enu.right.png')) {
            $portfolioRightIMG = $request['input'].'/enu.right.png'.$suffix;
        } else {
            $portfolioRightIMG = $prefixes['account'].'right0.png'.$suffix;
        }
        if (file_exists($request['input'].'/end.left.png')) {
            $portfolioUpsideLeftIMG = $request['input'].'/end.left.png'.$suffix;
        } else {
            $portfolioUpsideLeftIMG = $prefixes['account'].'left180.png'.$suffix;
        }
        if (file_exists($request['input'].'/end.right.png')) {
            $portfolioUpsideRightIMG = $request['input'].'/end.right.png'.$suffix;
        } else {
            $portfolioUpsideRightIMG = $prefixes['account'].'right180.png'.$suffix;
        }
        if (file_exists($request['input'].'/enl.left.png')) {
            $portfolioSinisterLeftIMG = $request['input'].'/enl.left.png'.$suffix;
        } else {
            $portfolioSinisterLeftIMG = $prefixes['account'].'left270.png'.$suffix;
        }
        if (file_exists($request['input'].'/enl.right.png')) {
            $portfolioSinisterRightIMG = $request['input'].'/enl.right.png'.$suffix;
        } else {
            $portfolioSinisterRightIMG = $prefixes['account'].'right270.png'.$suffix;
        }
        if (file_exists($request['input'].'/enr.left.png')) {
            $portfolioDexterLeftIMG = $request['input'].'/enr.left.png'.$suffix;
        } else {
            $portfolioDexterLeftIMG = $prefixes['account'].'left90.png'.$suffix;
        }
        if (file_exists($request['input'].'/enr.right.png')) {
            $portfolioDexterRightIMG = $request['input'].'/enr.right.png'.$suffix;
        } else {
            $portfolioDexterRightIMG = $prefixes['account'].'right90.png'.$suffix;
        }
    } else {
        $portfolioProfileIMG = $prefixes['account'].'head.png'.$suffix;
        $portfolioLeftIMG = $prefixes['account'].'left0.png'.$suffix;
        $portfolioRightIMG = $prefixes['account'].'right0.png'.$suffix;
        $portfolioUpsideLeftIMG = $prefixes['account'].'left180.png'.$suffix;
        $portfolioUpsideRightIMG = $prefixes['account'].'right180.png'.$suffix;
        $portfolioSinisterLeftIMG = $prefixes['account'].'left270.png'.$suffix;
        $portfolioSinisterRightIMG = $prefixes['account'].'right270.png'.$suffix;
        $portfolioDexterLeftIMG = $prefixes['account'].'left90.png'.$suffix;
        $portfolioDexterRightIMG = $prefixes['account'].'right90.png'.$suffix;
    }
}
include 'workspace.php';
?>
</div>
<div class='panel' <?php if ($module['spectate'] == 1) { ?> hidden <?php } ?>>
<p align="center">
<?php if (horizontal($request['angle'], 360) == 'u') { ?>
<a href="<?=$portfolioLeftIMG;?>"><img style="width:8%;position:relative;filter:grayscale(<?=$applyFilter;?>%);" src="<?=$portfolioLeftIMG;?>"></a>
<a href="<?=$portfolioProfileIMG;?>"><img style="width:14%;position:relative;filter:grayscale(<?=$applyFilter;?>%);" src="<?=$portfolioProfileIMG;?>"></a>
<a href="<?=$portfolioRightIMG;?>"><img style="width:8%;position:relative;filter:grayscale(<?=$applyFilter;?>%);" src="<?=$portfolioRightIMG;?>"></a>
<?php } elseif (horizontal($request['angle'], 360) == 'l') { ?>
<a href="<?=$portfolioSinisterLeftIMG;?>"><img style="width:80%;position:relative;filter:grayscale(<?=$applyFilter;?>%);" src="<?=$portfolioSinisterLeftIMG;?>"></a>
<?php } elseif (horizontal($request['angle'], 360) == 'r') { ?>
<a href="<?=$portfolioDexterRightIMG;?>"><img style="width:80%;position:relative;filter:grayscale(<?=$applyFilter;?>%);" src="<?=$portfolioDexterRightIMG;?>"></a>
<?php } elseif (horizontal($request['angle'], 360) == 'd') { ?>
<a href="<?=$portfolioUpsideRightIMG;?>"><img style="width:8%;position:relative;filter:grayscale(<?=$applyFilter;?>%);" src="<?=$portfolioUpsideRightIMG;?>"></a>
<a href="<?=$portfolioUpsideLeftIMG;?>"><img style="width:8%;position:relative;filter:grayscale(<?=$applyFilter;?>%);" src="<?=$portfolioUpsideLeftIMG;?>"></a>
<?php } ?>
</p>
</div>
