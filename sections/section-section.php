<?php
    $section          = str_replace('_', '-', get_row_layout());
    $addition_classes = get_sub_field('additional_classes');
    $repeater         = get_sub_field('repeater');
    $id               = get_sub_field('id');
?>
<section id="<?php echo $id; ?>" class="section p-0 section-<?php echo $section; ?> <?php echo $addition_classes; ?>">
    <div class="container">
        <?php foreach( $repeater as $item ) { ?>
            <?php $title = $item['title']; ?>
        <?php } ?>
    </div>
</section>
