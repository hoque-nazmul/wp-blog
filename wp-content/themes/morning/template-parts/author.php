<div class="w-50 card my-4 mx-auto">
    <div class="card-body">
        <div class="row">
            <div class="col-md-2 align-item-center justify-content-center">
                <?php 
                    echo get_avatar(get_the_author_meta(get_the_author_meta('ID'))); 
                ?>
            </div>
            <div class="col-md-10">
                <h4 class="card-subtitle">
                    <?php echo get_the_author_meta('display_name'); ?>
                </h4>
                <p class="card-text">
                    <?php echo get_the_author_meta('description') ?>
                </p>
            </div>
        </div>
    </div>
</div>