<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Accordion - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#accordion").accordion();

        });
    </script>
</head>
<?php
require_once(dirname(__FILE__) . '/features.php'); ?>

<?php $folders = array_filter(glob('media/*'), 'is_dir'); ?>
<?php if (($folders)) : ?>
    <div id="accordion">
        <?php foreach ($folders as $show): ?>
            <h3>
                <?php $hostname = parse_url($show, PHP_URL_PATH); ?>
                <?php echo preg_replace('/media/', '', $hostname); ?>
            </h3>
            <div>
                <?php foreach ((glob("$show/*.*")) as $value) : ?>
                    <p>
                        <a target="_blank" rel="noopener noreferrer" href="<?php echo $value ?>"><?= $value ?></a>
                    </p>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php $files = glob("media/*.*"); ?>
<?php if ($files): ?>
    <?php for ($i = 0; $i < count($files); $i++): ?>
        <?php $file = $files[$i]; ?>
        <?php $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION)); ?>
        <?php echo "<br>"; ?>
        <?php
        $end = array_slice(explode('/', rtrim($file, '/')), -1)[0]; ?>
        <a target="_blank" rel="noopener noreferrer" class="external" href="<?php echo $end ?>"> <?= $end ?> </a>
        <?php continue; ?>
    <?php endfor; ?>
<?php endif; ?>
</body>
</html>

