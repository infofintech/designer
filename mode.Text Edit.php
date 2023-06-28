<script>
function saveGUI()
{
    var name = filename.value;
    var content = encodeURIComponent(document.getElementById('content').value);
    var dataString = 'name=' + name + '&content=' + content;
    $.ajax({
        type: "POST",
        url: "write.php",
        data: dataString,
        cache: false,
        success: function(html) {
            document.location.reload();
        }
    });
    return false;
}

function replaceText(stri)
{
    var str = document.getElementById('content').value;
    var stro = document.getElementById('replacebox').value;
    var strp = str.toString().replace(stri, stro);
    document.getElementById('content').value = strp;
}
function replaceTextAll(stri)
{
    var str = document.getElementById('content').value;
    var stro = document.getElementById('replacebox').value;
    var strp = str.toString().replaceAll(stri, stro);
    document.getElementById('content').value = strp;
}
function countText()
{
    var sourceText = document.getElementById('content').value;
    var charsCount = sourceText.length;
    document.getElementById('statusBar').innerHTML = 'CHARS = ' + charsCount;
}

countText();
</script>

<div class='back'>
<?php
$parent = $request['ref'];
$isRef = 'true';

if ($request['lock'] != 'true') {
    if (file_exists($request['input'])) {
        $content = file_get_contents($request['input']);
    }
}

$textEditPrefix = 'edit.';

include 'workspace.php';
?>
</div>

<div class='panel' <?php if ($module['spectate'] == 1) { ?> hidden <?php } ?>>
<img class="actionIcon" src="<?=$textEditPrefix.'new.png'.$suffix;?>" onmouseover="soundButton();" id="newButton" onclick="omniRead('edit', 'file', 'true');">
<img class="actionIcon" src="<?=$textEditPrefix.'open.png'.$suffix;?>" onmouseover="soundButton();" id="openButton" onclick="omniRead('edit', filename.value, 'false');">
<img class="actionIcon" src="<?=$textEditPrefix.'save.png'.$suffix;?>" onmouseover="soundButton();" id="saveButton" onclick="saveGUI();">
<img class="actionIcon" src="<?=$textEditPrefix.'mkdir.png'.$suffix;?>" onmouseover="soundButton();" id="mkdirButton" onclick="mkdir(filename.value, false);">
<img class="actionIcon" src="<?=$textEditPrefix.'move.png'.$suffix;?>" onmouseover="soundButton();" id="moveButton" onclick="move(filename.value, doto.value, false);">
<img class="actionIcon" src="<?=$textEditPrefix.'copy.png'.$suffix;?>" onmouseover="soundButton();" id="copyButton" onclick="copy(filename.value, doto.value, false);">
<img class="actionIcon" src="<?=$textEditPrefix.'delete.png'.$suffix;?>" onmouseover="soundButton();" id="deleteButton" onclick="del(filename.value, false);">
<img class="actionIcon" src="<?=$textEditPrefix.'home.png'.$suffix;?>" onmouseover="soundButton();" id="homeButton" onclick="omniBack('<?=$parent?>');"><br>
<input class="text" id="filename" name="<?=$request['mode'];?>" style="width:36%;" type="text" value="<?=$request['input'];?>" onkeydown="if (event.keyCode == 13) {
    omniRead(this.name, this.value, 'false');
}">
<input class="text" id="doto" style="width:36%;" type="text" value="" onkeydown="if (event.keyCode == 13) {
    save();
}">
<textarea class="text" id="content" style="width:100%;height:50%;" oninput="countText();"><?=$content;?></textarea><br>
<input class="text" id="findbox" style="width:36%;" type="text" value="">
<input class="text" id="replacebox" style="width:36%;" type="text" value="">
<input type="image" onmouseover="soundButton();" class="power" onclick="replaceText(findbox.value); countText();" src="<?=$prefix.'uno.png'.$suffix;?>">
<input type="image" onmouseover="soundButton();" class="power" onclick="replaceTextAll(findbox.value); countText();" src="<?=$prefix.'duo.png'.$suffix;?>">
<br>
<label id="statusBar" style="width:98%;"></label>
</div>
