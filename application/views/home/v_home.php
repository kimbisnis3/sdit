<?php $this->load->view('template/header'); ?>	

	<div id='main' data-scroll-offset='88'>



	
<div id='fullscreen_slider_0' class='avia-fullscreen-slider main_color  avia-builder-el-0  el_before_av_section  avia-builder-el-first  container_wrap fullsize'   ><a href='#next-section' title='' class='scroll-down-link' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></a><div  data-size='large'  data-lightbox_size='large'  data-animation='fade'  data-ids='3240,3699,3483,3697,3696,3702'  data-video_counter='0'  data-autoplay='true'  data-bg_slider='true'  data-slide_height='100'  data-handle='av_fullscreen'  data-interval='5'  data-class=' '  data-css_id='fullscreen_slider_0'  data-scroll_down='aviaTBscroll_down'  data-control_layout=''  data-custom_markup=''  data-perma_caption=''  data-autoplay_stopper=''  data-stretch=''  class='avia-slideshow avia-slideshow-1 av-slider-scroll-down-active avia-slideshow-large av_fullscreen   avia-fade-slider '  itemscope="itemscope" itemtype="https://schema.org/ImageObject" >

<ul class='avia-slideshow-inner' >


<?php foreach ($ss1 as $t) { ?>
<li style='background-position:center center;' data-img-url='<?php echo base_url('gopanel'); ?><?php echo $t->imgpost ?>' class=' slide-1 ' ><div data-rel='slideshow-1' class='avia-slide-wrap'  ><a href='<?php echo base_url('/'); ?><?php echo $t->menu ?>/read/<?php echo $t->slugpost ?>' data-rel='slideshow-1' class='avia-slide-wrap'  ><div class = "caption_fullwidth av-slideshow-caption caption_center caption_center_framed caption_framed"><div class = "container caption_container"><div class = "slideshow_caption"><div class = "slideshow_inner_caption"><div class = "slideshow_align_caption"><h2  class='avia-caption-title'  itemprop="name" ><?php echo $t->judulpost; ?></h2></div></div></div></div></div></div></a></li>
<?php } ?>

<?php foreach ($ss2 as $t) { ?>
<li style='background-position:top left;' data-img-url='<?php echo base_url('gopanel'); ?><?php echo $t->imgpost ?>' class=' slide-2 ' ><a href='<?php echo base_url('/'); ?><?php echo $t->menu ?>/read/<?php echo $t->slugpost ?>' data-rel='slideshow-1' class='avia-slide-wrap'  ><div class = "caption_fullwidth av-slideshow-caption caption_bottom"><div class = "container caption_container"><div class = "slideshow_caption"><div class = "slideshow_inner_caption"><div class = "slideshow_align_caption"><h2  style='font-size:50px; color:#9215d6; ' class='avia-caption-title'  itemprop="name" ><?php echo $t->judulpost; ?></h2></div></div></div></div></div></a>
</li>
<?php } ?>

<?php foreach ($ss3 as $t) { ?>
<li style='background-position:center center;' data-img-url='<?php echo base_url('gopanel'); ?><?php echo $t->imgpost ?>' class=' slide-3 ' ><a href='<?php echo base_url('/'); ?><?php echo $t->menu ?>/read/<?php echo $t->slugpost ?>' data-rel='slideshow-1' class='avia-slide-wrap'  ><div class = "caption_fullwidth av-slideshow-caption caption_right caption_right_framed caption_framed"><div class = "container caption_container"><div class = "slideshow_caption"><div class = "slideshow_inner_caption"><div class = "slideshow_align_caption"><h2  class='avia-caption-title'  itemprop="name" ><?php echo $t->judulpost; ?></h2></div></div></div></div></div></a>
</li>
<?php } ?>

<?php foreach ($ss4 as $t) { ?>
<li style='background-position:top left;' data-img-url='<?php echo base_url('gopanel'); ?><?php echo $t->imgpost ?>' class=' slide-4 ' ><a href='<?php echo base_url('/'); ?><?php echo $t->menu ?>/read/<?php echo $t->slugpost ?>' data-rel='slideshow-1' class='avia-slide-wrap'  ><div class = "caption_fullwidth av-slideshow-caption caption_center caption_center_framed caption_framed"><div class = "container caption_container"><div class = "slideshow_caption"><div class = "slideshow_inner_caption"><div class = "slideshow_align_caption"><h2  class='avia-caption-title'  itemprop="name" ><?php echo $t->judulpost; ?></h2></div></div></div></div></div></a>
</li>
<?php } ?>

<?php foreach ($ss5 as $t) { ?>
<li style='background-position:top left;' data-img-url='<?php echo base_url('gopanel'); ?><?php echo $t->imgpost ?>' class=' slide-5 ' ><a href='<?php echo base_url('/'); ?><?php echo $t->menu ?>/read/<?php echo $t->slugpost ?>' data-rel='slideshow-1' class='avia-slide-wrap'  ><div data-rel='slideshow-1' class='avia-slide-wrap'  ><div class = "caption_fullwidth av-slideshow-caption caption_bottom caption_bottom_framed caption_framed"><div class = "container caption_container"><div class = "slideshow_caption"><div class = "slideshow_inner_caption"><div class = "slideshow_align_caption"><h2  class='avia-caption-title'  itemprop="name" ><?php echo $t->judulpost; ?></h2></div></div></div></div></div></div></a>
</li>
<?php } ?>

<?php foreach ($ss6 as $t) { ?>
<li style='background-position:top left;' data-img-url='<?php echo base_url('gopanel'); ?><?php echo $t->imgpost ?>' class=' slide-6 ' ><a href='<?php echo base_url('/'); ?><?php echo $t->menu ?>/read/<?php echo $t->slugpost ?>' data-rel='slideshow-1' class='avia-slide-wrap'  ><div class = "caption_fullwidth av-slideshow-caption caption_bottom caption_bottom_framed caption_framed"><div class = "container caption_container"><div class = "slideshow_caption"><div class = "slideshow_inner_caption"><div class = "slideshow_align_caption"><h2  class='avia-caption-title'  itemprop="name" ><?php echo $t->judulpost; ?></h2></div></div></div></div></div></a>
</li>
<?php } ?>
</ul>

<div class='avia-slideshow-arrows avia-slideshow-controls'><a href='#prev' class='prev-slide' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'>Previous</a><a href='#next' class='next-slide' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'>Next</a></div><div class='avia-slideshow-dots avia-slideshow-controls'>

<a href='#1' class='goto-slide active' >1</a>

<a href='#2' class='goto-slide ' >2</a>

<a href='#3' class='goto-slide ' >3</a>

<a href='#4' class='goto-slide ' >4</a>

<a href='#5' class='goto-slide ' >5</a>

<a href='#6' class='goto-slide ' >6</a>

</div>

</div></div>

<div id='about-us' class='avia-section alternate_color avia-section-large avia-shadow avia-bg-style-scroll  avia-builder-el-1  el_after_av_fullscreen  el_before_av_two_third  container_wrap fullsize'   ><div class='container' ><div class='template-page content  av-content-full alpha units'><div class='post-entry post-entry-type-page post-entry-2251'><div class='entry-content-wrapper clearfix'>
<div class="flex_column av_one_half first  avia-builder-el-2  el_before_av_one_half  avia-builder-el-first  "><div class='avia-icon-list-container  avia-builder-el-3  avia-builder-el-no-sibling '>
	
<ul class='avia-icon-list avia-icon-list-right avia_animate_when_almost_visible'>
<?php foreach ( $descsatu as $t ) { ?>
<li>
	<div  class='iconlist_icon avia-font-entypo-fontello'><span class='iconlist-char' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></span></div><article class="article-icon-entry "  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" ><div class='iconlist_content_wrap'><header class="entry-content-header"><h4 class='iconlist_title'  itemprop="headline"  ><?php echo $t->judul ?></h4></header><div class='iconlist_content '  itemprop="text"  ><p><?php echo $t->teks ?>.</p>
	</div></div><footer class="entry-footer"></footer></article><div class='iconlist-timeline'></div>
</li>
<?php } ?>

<?php foreach ( $descdua as $t ) { ?>
<li>
	<div  class='iconlist_icon avia-font-entypo-fontello'><span class='iconlist-char' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></span></div><article class="article-icon-entry "  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" ><div class='iconlist_content_wrap'><header class="entry-content-header"><h4 class='iconlist_title'  itemprop="headline"  ><?php echo $t->judul ?></h4></header><div class='iconlist_content '  itemprop="text"  ><p><?php echo $t->teks ?></p>
</div></div><footer class="entry-footer"></footer></article><div class='iconlist-timeline'></div>
</li>
<?php } ?>

<?php foreach ( $desctiga as $t ) { ?>
<li>
	<div  class='iconlist_icon avia-font-entypo-fontello'><span class='iconlist-char' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></span></div><article class="article-icon-entry "  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" ><div class='iconlist_content_wrap'><header class="entry-content-header"><h4 class='iconlist_title'  itemprop="headline"  ><?php echo $t->judul ?></h4></header><div class='iconlist_content '  itemprop="text"  ><p><?php echo $t->teks ?></p>
</div></div><footer class="entry-footer"></footer></article><div class='iconlist-timeline'></div>
</li>
<?php } ?>

<?php foreach ( $descempat as $t ) { ?>
<li>
	<div  class='iconlist_icon avia-font-entypo-fontello'><span class='iconlist-char' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></span></div><article class="article-icon-entry "  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" ><div class='iconlist_content_wrap'><header class="entry-content-header"><h4 class='iconlist_title'  itemprop="headline"  ><?php echo $t->judul ?></h4></header><div class='iconlist_content '  itemprop="text"  ><p><?php echo $t->teks ?></p>
</div></div><footer class="entry-footer"></footer></article><div class='iconlist-timeline'></div>
</li>
<?php } ?>

</ul>

</div></div>
<?php foreach ( $deskripsi as $t ) { ?>
<div class="flex_column av_one_half   avia-builder-el-4  el_after_av_one_half  avia-builder-el-last  "><div style='padding-bottom:10px;' class='av-special-heading av-special-heading-h1 meta-heading   avia-builder-el-5  el_before_av_textblock  avia-builder-el-first  '><h1 class='av-special-heading-tag'  itemprop="headline"  ><font size="20"><?php echo $t->judul ?></font></h1><div class='special-heading-border'><div class='special-heading-inner-border' ></div></div></div>
<section class="av_textblock_section"  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" ><div class='avia_textblock '  style='font-size:14px; '  itemprop="text" ><p style="text-align: justify;">
<p style="text-align: justify;">

<span class="av_dropcap2 " ></span>
<?php echo $t->teks ?>

<?php } ?>
<p style="text-align: justify;">
<p style="text-align: justify;">
<p style="text-align: justify;">
</div></section>
<!--
<div  class='hr hr-short hr-left  avia-builder-el-7  el_after_av_textblock  el_before_av_button '>
<span class='hr-inner ' ><span class='hr-inner-style'></span></span></div>
<div class='avia-button-wrap avia-button-left  avia-builder-el-8  el_after_av_hr  avia-builder-el-last '><a href='manually' class='avia-button  avia-icon_select-yes-left-icon avia-color-theme-color avia-size-large avia-position-left '   ><span class='avia_button_icon avia_button_icon_left ' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></span><span class='avia_iconbox_title' >Sejarah</span></a></div></div>
-->
</div></div></div><!-- close content main div --></div></div><div id='after_section_1' class='main_color container_wrap fullsize'   ><div class='container' ><div class='template-page content  av-content-full alpha units'><div class='post-entry post-entry-type-page post-entry-2251'><div class='entry-content-wrapper clearfix'>
<div class="flex_column av_two_third first  avia-builder-el-9  el_after_av_section  el_before_av_one_third  avia-builder-el-first  "><section class="av_textblock_section"  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" ><div class='avia_textblock '  style='font-size:30px; '  itemprop="text" ><p>

<strong>BERITA</strong></p>
</div></section>
<div  class='hr hr-short hr-left  avia-builder-el-11  el_after_av_textblock  el_before_av_postslider '><span class='hr-inner ' ><span class='hr-inner-style'></span></span></div>
<div  data-autoplay='1'  data-interval='5'  data-animation='fade'  data-show_slide_delay='90'  class='avia-content-slider avia-content-slider-active avia-content-slider1 avia-content-slider-odd  avia-builder-el-12  el_after_av_hr  avia-builder-el-last '  itemscope="itemscope" itemtype="https://schema.org/Blog" >

<div class='avia-content-slider-inner'>

<div class='slide-entry-wrap'>
<?php 
$first = 1;
$no    = 1;
foreach ($berita as $t ) { 
$classfirst = "";
$word = "";


if (($no % 3) == 1)  {
	$classfirst = 'first';
}

if ((($no % 3) ==  0) AND ($no !=9 )) {
	$word = "</div>
	<div class='slide-entry-wrap'>";
}

if ($no ==  9) {
	$word = "</div>";
}

?>

<article class='slide-entry flex_column  post-entry post-entry-3772 slide-entry-overview slide-loop-<?php echo $no;  ?> slide-parity-even  av_one_third <?php echo $classfirst; ?> real-thumbnail'  itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost" ><a href='<?php echo base_url(); ?>/berita/read/<?php echo $t->slug; ?>' data-rel='slide-1' class='slide-image' title=''><img width="495" height="400" src="<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>" class="attachment-portfolio size-portfolio wp-post-image" alt="<?php echo $t->judul; ?>" srcset="<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>" sizes="(max-width: 495px) 100vw, 495px" /></a><div class='slide-content'><header class="entry-content-header"><h3 class='slide-entry-title entry-title'  itemprop="headline" ><a href='<?php echo base_url(); ?>/berita/read/<?php echo $t->slug; ?>' title='<?php echo $t->judul; ?>'><?php echo $t->judul; ?></a></h3></header><div class='slide-meta'><div class='slide-meta-comments'><a href='<?php echo base_url(); ?>/berita/read/<?php echo $t->slug; ?>'></a></div><div class='slide-meta-del'></div><time class='slide-meta-time updated'  itemprop="datePublished" datetime="2018-04-05T10:07:36+00:00" ></time></div><div class='slide-entry-excerpt entry-content'  itemprop="text" ><?php echo word_limiter($t->artikel,6); ?>...</div></div><footer class="entry-footer"></footer>

</article>
<?php echo $word; ?>
<?php 
$first++; 
$no++;
 } ?>

<!--</div>-->



</div>

<div class='avia-slideshow-arrows avia-slideshow-controls'><a href='#prev' class='prev-slide' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'>Previous</a><a href='#next' class='next-slide' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'>Next</a></div>

</div></div>

<div class="flex_column av_one_third   avia-builder-el-13  el_after_av_two_third  el_before_av_section  avia-builder-el-last  "><section class="av_textblock_section"  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" ><div class='avia_textblock '  style='font-size:30px; '  itemprop="text" ><p><strong>ARTIKEL</strong></p>
</div></section>
<div  class='hr hr-short hr-left  avia-builder-el-15  el_after_av_textblock  el_before_av_postslider '><span class='hr-inner ' ><span class='hr-inner-style'></span></span></div>
</div>

<?php foreach ( $artikel as $t ) { ?>
<article class='slide-entry flex_column  post-entry post-entry-3747 slide-entry-overview slide-loop-9 slide-parity-odd  post-entry-last  av_one_third  real-thumbnail'  itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost" ><a href='<?php echo base_url(); ?>/berita/read/<?php echo $t->slug; ?>' data-rel='slide-1' class='slide-image' title=''><img width="495" height="400" src="<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>" class="attachment-portfolio size-portfolio wp-post-image" alt="<?php echo $t->judul; ?>" srcset="<?php echo base_url(); ?>/berita/read/<?php echo $t->slug; ?>" sizes="(max-width: 495px) 100vw, 495px" /></a><div class='slide-content'><header class="entry-content-header"><h3 class='slide-entry-title entry-title'  itemprop="headline" ><a href='<?php echo base_url(); ?>/berita/read/<?php echo $t->slug; ?>' title='<?php echo $t->judul; ?>'><?php echo $t->judul; ?></a></h3></header><div class='slide-meta'><div class='slide-meta-comments'><a href='<?php echo base_url(); ?>/berita/read/<?php echo $t->slug; ?>'></a></div><div class='slide-meta-del'></div><time class='slide-meta-time updated'  itemprop="datePublished" datetime="2018-04-05T10:07:36+00:00" ></time></div><div class='slide-entry-excerpt entry-content'  itemprop="text" ><?php echo word_limiter($t->artikel,6); ?>...</div></div><footer class="entry-footer"></footer>
</article>
<?php } ?>

<?php foreach ( $bgweb as $t ) { ?>
</div></div><!-- close content main div --></div></div><div id='av_section_2' class='avia-section main_color avia-section-large avia-no-shadow avia-bg-style-fixed avia-full-stretch  avia-builder-el-17  el_after_av_one_third  el_before_av_section  container_wrap fullsize' style = 'background-repeat: no-repeat; background-image: url(<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>); background-attachment: fixed; background-position: top left; ' data-section-bg-repeat='stretch' ><div class='container' ><div class='template-page content  av-content-full alpha units'><div class='post-entry post-entry-type-page post-entry-2251'><div class='entry-content-wrapper clearfix'>
</div></div></div><!-- close content main div --></div></div><div id='av_section_3' class='avia-section main_color avia-section-large avia-no-shadow avia-bg-style-fixed  avia-builder-el-18  el_after_av_section  avia-builder-el-last  container_wrap fullsize' style = 'background-color: #f7f7f7; '  ><div class='container' ><div class='template-page content  av-content-full alpha units'><div class='post-entry post-entry-type-page post-entry-2251'><div class='entry-content-wrapper clearfix'>
<?php } ?>
<section class="av_textblock_section"  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" >
<div class='avia_textblock '  style='font-size:30px; '  itemprop="text" >
	<p style="text-align: center;">FASILITAS<strong> SEKOLAH</strong></p>
</div>
</section>

<div  class='hr hr-short hr-center  avia-builder-el-20  el_after_av_textblock  el_before_av_one_fifth '>
	<span class='hr-inner ' ><span class='hr-inner-style'></span></span>
</div>


<?php 
$no    = 1;
foreach ( $fasilitas as $t ) { 
$classfirst = "";
if (($no % 5) == 1)  {
	$classfirst = 'first';
}
?>

<div class="flex_column av_one_fifth <?php echo $classfirst; ?>   avia-builder-el-23  el_after_av_one_fifth  el_before_av_one_fifth  "><article class="iconbox iconbox_top main_color   avia-builder-el-24  avia-builder-el-no-sibling "  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" ><div class="iconbox_content"><header class="entry-content-header"><div class="iconbox_icon heading-color" aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'  ></div><h3 class='iconbox_content_title'  itemprop="headline"  > <?php echo $t->judul ?> </h3></header><div class='iconbox_content_container '  itemprop="text"  ></div></div><footer class="entry-footer"></footer></article></div>

<?php $no++; } ?>
	

</div></div></div><!-- close content main div --> <!-- section close by builder template -->		</div><!--end builder template--></div><!-- close default .container_wrap element -->						


<?php $this->load->view('template/footer'); ?>