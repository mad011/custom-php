<?php
require_once(dirname(__FILE__) . '/features.php');

//$files = glob("media/*.*");
//echo '<pre>';
//var_dump(glob('*'));
//var_dump($files);
//echo "<pre>";
//print_r($files);
//echo "</pre>";

$folders = array_filter(glob('media/*'), 'is_dir');

?>
    <?php if ($folders) : ?>
    <div id="category">
        <?php foreach ($folders as $show): ?>
            <?php echo "<br>"; ?>
            <li class="tab-link data-tab=tab">
                <a href="<?php echo $show ?>"><?= $show ?></a>
            </li>
            <?php echo(count(glob("$show/*")));
            foreach ((glob("$show/*")) as $value) { ?>
                <a target="_blank" rel="noopener noreferrer" href="<?php echo $value ?>"><?= $value ?>></a>
            <?php } ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?php ?>
    <?php $files = glob("media/*.*"); ?>
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
<script>
    $(document).ready(function () {
        $("#category").tabs();
    });
</script>