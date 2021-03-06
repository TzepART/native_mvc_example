<?php require APP_SRC_ROOT.'View/include/header.php' ?>
<?php $data['alertMessageService']->flash('post_message'); ?>
<div class="row mb-3">
    <div class="col-md-6">
        <h1>Posts</h1>
    </div>
    <div class="col-md-6">
        <?php if( isset($_SESSION['user_login'])) : ?>
            <a href="<?php echo URL_ROOT; ?>/post/add" class="btn btn-primary pull-right">
                <i class="fa fa-pencil"></i> Add Post
            </a>
        <?php endif; ?>
    </div>
</div>
<?php foreach($data['posts'] as $post) : ?>
<div class="card card-body mb-3">
    <div class="card-block">
    <h4 class="card-title"><?php echo $post->title; ?></h4>
    <h6 class="card-subtitle mb-2 text-muted">Written on <?php echo \Helper\DateTimeHelper::helper_format_date($post->created_at);?></h6>
    <p class="card-text breakline"><?php echo $post->body; ?></p>
    <a href="<?php echo URL_ROOT; ?>/post/show/<?php echo $post->post_id; ?>" class="btn btn-dark">More</a>
    </div>
</div>
<?php endforeach; ?>
<?php require APP_SRC_ROOT.'View/include/footer.php' ?>