<?php
    require_once 'vendor/autoload.php';
    require_once 'editor.lib.php';
?>
<a href="index.php">< Back</a>
<?php $aMember = EditorLib::getObjectById( 'team.yml', $_GET['id'] )?>
<h1>
    <?php echo $aMember->name ?>
</h1>
Device: <strong><?php echo $aMember->device ?></strong>
<br>
<img src="<?php echo $aMember->icon ?>"/>