<div class='back'>

<?php

$parent = $request['ref'];
$isRef = 'true';
include 'workspace.php';

?>

</div>

<div class='panel' <?php if ($module['spectate'] == 1) { ?> hidden <?php } ?>>

<p align="center" class="block">
<video style="width:92%;height:90%;" id="video" src="<?=$request['input'];?>" controls autoplay="yes" onended="if (moduleRepeat.value != 0) { this.pause(); this.load(); this.play(); }">
</p>

</div>
