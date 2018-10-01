<?php $this->load->view('template/header'); ?>	
<div id='main' data-scroll-offset='88'>

<div class='container_wrap container_wrap_first main_color sidebar_right '>

    <div class='container template-blog '>

        <main class='content av-content-small alpha units'  role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="https://schema.org/Blog" >

<?php foreach ($maindata as $t ) { ?>
<article class='post-entry post-entry-type-standard post-entry-3772 post-loop-1 post-parity-odd single-big with-slider post-3772 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-frontpage-article category-news'  itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost" ><div class="big-preview single-big"><a href="<?php echo base_url('/'); ?><?php echo $t->ktg ?>/read/<?php echo $t->slug ?>" title="<?php echo $t->judul ?>"><img width="845" height="321" src="<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>" class="attachment-entry_with_sidebar size-entry_with_sidebar wp-post-image" alt="<?php echo $t->judul ?>" /></a></div><div class='blog-meta'></div><div class='entry-content-wrapper clearfix standard-content'>

<header class="entry-content-header"><h2 class='post-title entry-title'  itemprop="headline" >	<a href='<?php echo base_url('/'); ?><?php echo $t->ktg ?>/read/<?php echo $t->slug ?>' rel='bookmark' title='Permanent Link:<?php echo $t->judul ?>'><!--judul--><?php echo $t->judul ?>			<span class='post-format-icon minor-meta'></span>	</a></h2>

</header><div class="entry-content"  itemprop="text" >

<?php echo $t->artikel ?>


</div><footer class="entry-footer"></footer><div class='post_delimiter'></div></div><div class='post_author_timeline'></div></article>
<?php } ?>


        <!--end content-->
        </main>

        <aside class='sidebar sidebar_right  alpha units'  role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar" ><div class='inner_sidebar extralight-border'>		<section id="recent-posts-2" class="widget clearfix widget_recent_entries">		<h3 class="widgettitle"></h3>		
        
        <ul>

        
        </ul>
        	


<span class="seperator extralight-border"></span></section><section id="categories-2" class="widget clearfix widget_categories"><h3 class="widgettitle">Menu</h3>		<ul>
<li class="cat-item cat-item-52"><a href="<?php echo base_url('/'); ?>profil" >Profil</a>
</li>
<li class="cat-item cat-item-34"><a href="<?php echo base_url('/'); ?>ppdb" >PPDB</a>
</li>
<li class="cat-item cat-item-41"><a href="<?php echo base_url('/'); ?>kesiswaan" >Kesiswaan</a>
</li>
<li class="cat-item cat-item-14"><a href="<?php echo base_url('/'); ?>fasilitas" >Fasilitas</a>
</li>
<li class="cat-item cat-item-15"><a href="<?php echo base_url('/'); ?>kurikulum" >Kurikulum</a>
</li>
<li class="cat-item cat-item-16"><a href="<?php echo base_url('/'); ?>berita" >Berita</a>
</li>
<li class="cat-item cat-item-36"><a href="<?php echo base_url('/'); ?>artikel" >Artikel</a>
</li>
<li class="cat-item cat-item-37"><a href="<?php echo base_url('/'); ?>galeri" >Galeri</a>
</li>
    </ul>

    <span class="seperator extralight-border"></span></section></div></aside>
    </div><!--end container-->

</div><!-- close default .container_wrap element -->

	

<?php $this->load->view('template/footer'); ?>