<style>
	.content {
		width: 65%;
		margin: 0 auto;
	}
	.post {
		margin-top: 40px;
		/*margin-bottom: 40px;*/
	}
	.title {
		font-size: 35px;
		font-weight: 500;
		margin: 20px;
	}
	.title a {
		color: #ff6a3a;
	}
	p {
		margin:20px 0;
		line-height:200%;
	}
	.content_text {

	}
	.content_text div {
		margin:20px 0;
		line-height:200%;
	}
	.content_text div span {
		line-height:350%;
	}
</style>


<?php get_header(); ?>
	<!-- Column 1 /Content -->
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	<div class="content">
		<!-- Blog Post -->
		<div class="post">
			<!-- Post Title -->
			<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<!-- Post Title -->
			<p class="sub">
				<?php the_tags('标签：', ', ', ''); ?>
				<?php the_time('Y年n月j日') ?>
				<?php /*comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); */?><!--
				--><?php /*edit_post_link('编辑', ' &bull; ', ''); */?>
			</p>
			<div class="hr dotted clearfix">&nbsp;</div>
			<!-- Post Title -->
			<!-- Post Content -->
			<div class="content_text">
			<?php the_content(); ?>
			</div>
		</div>
		<div class="hr clearfix">&nbsp;</div>
	</div>
<?php else : ?>
	<div class="errorbox">
		没有文章！
	</div>
<?php endif; ?>

<div style="width: 100%; margin: 0 0 400px 0;"></div>

<?php get_footer(); ?>