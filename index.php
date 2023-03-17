<?php
require_once 'vendor/autoload.php';
require_once 'editor.lib.php';
?>
    <h1>Yaml</h1>
    <?php foreach ( EditorLib::getObjects('team.yml') as $aMember): ?>
        <div style="background-color: orange; padding: 15px">
            <?php echo $aMember->name ?> with a <strong><?php echo $aMember->device ?></strong>
            <img src="<?php echo $aMember->icon ?>"/>
        </div>
    <?php endforeach; ?>

    <hr/>

    <h1>Markdown</h1>
    <?php echo EditorLib::markdown_file('slogan.md'); ?>