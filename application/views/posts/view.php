<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<div class ="post-body">
<?php echo $post['body'];?>
<br><br>
<p><a class="btn btn-default" href="<?php echo base_url(); ?>/posts">Return</a></p>
</div>