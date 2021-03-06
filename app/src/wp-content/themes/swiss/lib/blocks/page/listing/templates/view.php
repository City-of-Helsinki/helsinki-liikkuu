<section class="b-listing">

    <div class="b-listing__container">

        <?php include get_template_directory().'/templates/_section-header.php'; ?>

        <div class="l-cards l-cards--four">

        <?php foreach($block->get('columns') as $k => $v): ?>

            <div class="l-cards__item">
                <?php include get_template_directory().'/templates/_column-listing.php'; ?>
            </div>

        <?php endforeach; ?>

        </div>

    </div><!-- end of b-listing__container -->

</section><!-- end of b-listing -->
