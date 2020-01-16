
<!-- header-navまでをget_header()に置き換える -->
<?php get_header(); ?>


<!-- content -->
<div id="content" class="m_one m_404">
<div class="inner">

<!-- primary -->
<main id="primary">

<!-- entry -->
<div class="entry-404">
	<h1 class="entry-404-head"><span>404</span>Not Found</h1><!-- /entry-404-head -->
	<div class="entry-404-lead">お探しのページが<br class="m_sp" />見つかりませんでした</div><!-- /entry-404-head -->
	<p class="entry-404-content">申し訳ありませんが、お探しのページが存在しないか、アクセスできません。<br>入力されたURLが正しいかご確認ください。</p><!-- /entry-404-content -->
	<div class="entry-404-btn"><a class="btn" href="/">トップページに戻る</a></div><!-- /entry-404-btn -->
</div><!-- /entry-404 -->

</main><!-- /primary -->

<!-- secondary -->

<?php get_template_part('sidebar.php-wiget'); ?>

</div><!-- /inner -->
</div><!-- /content -->

<!-- footer-menuから下をget_footer()に置き換える -->
<?php get_footer(); ?>
