<?php
require_once(dirname(__FILE__) . '/features.php');
$files = glob("media/*.*"); ?>
<?php if ($files): ?>
    <?php for ($i = 0; $i < count($files); $i++): ?>
        <?php $file = $files[$i]; ?>
        <?php $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION)); ?>
        <?php echo "<br>"; ?>
        <a target="_blank" rel="noopener noreferrer" href="<?php echo $file ?>"><?= $file ?>></a>
        <!--        --><?php //echo '<img src="' . $file . '" alt="image"/>' . ". <br/><br/>"; ?>
        <?php continue; ?>
    <?php endfor; ?>

<?php endif; ?>


