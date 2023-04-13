<?php
require_once 'vendor/autoload.php';
require_once 'editor.lib.php';
?>
    <h1>Team</h1>
    <?php foreach ( EditorLib::getObjects('team.yml') as $aMember): ?>
        <div style="background-color: orange; padding: 15px">
            <?php echo $aMember->name ?>
            <a href="team-member.php?id=<?php echo $aMember->id ?>">Member detail</a>
        </div>
    <?php endforeach; ?>

    <hr/>

    <h1>Yaml Single Element</h1>
    <?php $jane = EditorLib::getObject('jane.yml') ?>
    <div style="background-color:yellow; padding: 15px">
        Name: <?php echo $jane->name ?> <br/>
        Surname: <?php echo $jane->surname ?> <br>
        <a href="tel:<?php echo $jane->tel ?>">Call</a>
    </div>

    <hr/>

    <h1>Markdown</h1>
    <?php echo EditorLib::markdown_file('slogan.md'); ?>