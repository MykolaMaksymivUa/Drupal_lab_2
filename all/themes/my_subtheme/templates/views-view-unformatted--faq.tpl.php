<?php

/**
 * @file
 * Default simple view template to display a list of FAQs.
 *
 * @ingroup views_templates
 */
?>

<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<!-- Main wrapper for the library -->
<div class="ziehharmonika">
    <?php foreach ($rows as $id => $row): ?>
        <?php
        if ($classes_array[$id]): ?>
            <?php print $row; ?>
        <?php else: ?>
            <?php print $row; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
