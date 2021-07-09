<?php 
get_header();
get_template_part('template-parts/hero');
?>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="jumbotron text-center">
            <h2 class="display-3 mb-5">
                Page Not Found
            </h2>
            <a href="<?php echo site_url(); ?>" class="btn btn-info">Go Home</a>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>