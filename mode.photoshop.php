<div class='back'>
<?php
$parent = 'menu';
include 'workspace.php';
?>
</div>
<div class='panel' <?php if ($module['spectate'] == 1) { ?> hidden <?php } ?>>
<p align='center' class='block'>
  <input type="button" value="Reset" onclick="setFilters(40, 0, 100, 100, 100, 0, 0, 0); window.location.reload();">
  <input type="button" value="Retro" onclick="setFilters(40, 0, 100, 150, 110, 50, 0, 0); window.location.reload();">
  <input type="button" value="Back" onclick="omniGo('<?=$parent;?>');">
</p>
<p align='center'>
  <div class="slidecontainer">
    <p align='center'>
    Opacity: 
    <input type='button' value="<?=$opacity;?>"> 
    Blur: 
    <input type='button' value="<?=$blur;?>px">
    </p>
    <p align='center'>
    <input type="range" min="0" max="255" value="<?=$opacity;?>" class="slider" id="opacityRange" onchange="setFilters(this.value, sysDefBlur.value, sysDefBrightness.value, sysDefSaturation.value, sysDefContrast.value, sysDefSepia.value, sysDefGrayscale.value, sysDefHue.value); window.location.reload();"> 
    <input type="range" min="0" max="100" value="<?=$blur;?>" class="slider" id="blurRange" onchange="setFilters(sysDefOpacity.value, this.value, sysDefBrightness.value, sysDefSaturation.value, sysDefContrast.value, sysDefSepia.value, sysDefGrayscale.value, sysDefHue.value); window.location.reload();">
    </p>
  </div>
  <div class="slidecontainer">
    <p align='center'>
    Brightness: 
    <input type='button' value="<?=$brightness.'%';?>"> 
    Saturate: 
    <input type='button' value="<?=$saturation.'%';?>">
    </p>
    <p align='center'>
    <input type="range" min="50" max="150" value="<?=$brightness;?>" class="slider" id="brightnessRange" onchange="setFilters(sysDefOpacity.value, sysDefBlur.value, this.value, sysDefSaturation.value, sysDefContrast.value, sysDefSepia.value, sysDefGrayscale.value, sysDefHue.value); window.location.reload();"> 
    <input type="range" min="0" max="200" value="<?=$saturation;?>" class="slider" id="saturationRange" onchange="setFilters(sysDefOpacity.value, sysDefBlur.value, sysDefBrightness.value, this.value, sysDefContrast.value, sysDefSepia.value, sysDefGrayscale.value, sysDefHue.value); window.location.reload();">
    </p>
  </div>
  <div class="slidecontainer">
    <p align='center'>
    Contrast: 
    <input type='button' value="<?=$contrast.'%';?>"> 
    Sepia: 
    <input type='button' value="<?=$sepia.'%';?>">
    </p>
    <p align='center'>
    <input type="range" min="50" max="150" value="<?=$contrast;?>" class="slider" id="contrastRange" onchange="setFilters(sysDefOpacity.value, sysDefBlur.value, sysDefBrightness.value, sysDefSaturation.value, this.value, sysDefSepia.value, sysDefGrayscale.value, sysDefHue.value); window.location.reload();"> 
    <input type="range" min="0" max="100" value="<?=$sepia;?>" class="slider" id="sepiaRange" onchange="setFilters(sysDefOpacity.value, sysDefBlur.value, sysDefBrightness.value, sysDefSaturation.value, sysDefContrast.value, this.value, sysDefGrayscale.value, sysDefHue.value); window.location.reload();">
    </p>
  </div>
  <div class="slidecontainer">
    <p align='center'>
    Grayscale: 
    <input type='button' value="<?=$grayscale.'%';?>"> 
    Hue: 
    <input type='button' value="<?=$hue.'deg';?>">
    </p>
    <p align='center'>
    <input type="range" min="0" max="100" value="<?=$grayscale;?>" class="slider" id="grayRange" onchange="setFilters(sysDefOpacity.value, sysDefBlur.value, sysDefBrightness.value, sysDefSaturation.value, sysDefContrast.value, sysDefSepia.value, this.value, sysDefHue.value); window.location.reload();">
    <input type="range" min="0" max="360" value="<?=$hue;?>" class="slider" id="hueRange" onchange="setFilters(sysDefOpacity.value, sysDefBlur.value, sysDefBrightness.value, sysDefSaturation.value, sysDefContrast.value, sysDefSepia.value, sysDefGrayscale.value, this.value); window.location.reload();">
    </p>
  </div>
</p>
</div>
