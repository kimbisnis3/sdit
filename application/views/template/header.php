<?php 

	$artikel 	= $this->Dbhelper->getdata('fartikel');
	$profil  	= $this->Dbhelper->getdata('fprofil');
	$ppdb  		= $this->Dbhelper->getdata('fppdb');
	$kurikulum  = $this->Dbhelper->getdata('fkurikulum');
	$fasilitas  = $this->Dbhelper->getdata('ffasilitas');
	$kesiswaan  = $this->Dbhelper->getdata('fkesiswaan');
	$berita  	= $this->Dbhelper->getdata('fberita');

	$wlogo 	= array('kode' => 'logo', );
	$wtitle = array('kode' => 'titleweb', );
	$logo  	= $this->Dbhelper->getdatawall('felementweb',$wlogo);
	$title	= $this->Dbhelper->getdatawall('felementweb',$wtitle);
	$sekolah 	= $this->Dbhelper->getdata('tcompany');
	
	
?>


<!DOCTYPE html>

<html lang="en-US" class=" html_boxed responsive av-default-lightbox  html_header_top html_logo_left html_main_nav_header html_menu_right html_slim html_header_sticky html_header_shrinking html_header_topbar_active html_mobile_menu_phone html_disabled html_header_searchicon html_content_align_center html_entry_id_2251 ">
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCcdF1kh5jcBMlwFD9NH6qvZjLB9-AC4_o" async="" defer="defer" type="text/javascript"></script>
<head>

<meta charset="UTF-8" />



<!-- page title, displayed in your browser bar -->
<?php foreach ($title as $t ) { ?>
<title><?php echo $t->judul ?></title>
<?php } ?>


<meta name="robots" content="index, follow" />
<!-- FAV ICON -->
<?php foreach ( $logo as $t ) { ?>
<link rel="icon" href="<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>" type="image/png">
<?php } ?>



<!-- mobile setting -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">




<!-- Scripts/CSS and wp_head hook -->

<link rel="alternate" type="application/rss+xml" title="SDIT MTA Gemolong  &raquo; Feed" href="" />
<link rel="alternate" type="application/rss+xml" title="SDIT MTA Gemolong &raquo; Comments Feed" href="" />
<link rel="alternate" type="application/rss+xml" title="SDIT MTA Gemolong &raquraquo; Beranda Comments Feed" href="" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/sditnurhidayah.sch.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.15"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;return g&&g.fillText?(g.textBaseline="top",g.font="600 32px Arial","flag"===a?(g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3):"diversity"===a?(g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e):("simple"===a?g.fillText(h(55357,56835),0,0):g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

<link rel='stylesheet' id='et1-bloodfm-menu-icon-css'  href='<?php echo base_url('assets/css/'); ?>sweetalert.css' type='text/css' media='all' />
<link rel='stylesheet' id='google-language-translator-css'  href='<?php echo base_url('assets/css/'); ?>google-language-translator_css_style.css' type='text/css' media='' />
<link rel='stylesheet' id='avia-grid-css'  href='<?php echo base_url('assets/css/'); ?>grid.css' type='text/css' media='all' />
<link rel='stylesheet' id='avia-base-css'  href='<?php echo base_url('assets/css/'); ?>base.css' type='text/css' media='all' />
<link rel='stylesheet' id='avia-layout-css'  href='<?php echo base_url('assets/css/'); ?>layout.css' type='text/css' media='all' />
<link rel='stylesheet' id='avia-scs-css'  href='<?php echo base_url('assets/css/'); ?>shortcodes.css' type='text/css' media='all' />
<link rel='stylesheet' id='avia-popup-css-css'  href='<?php echo base_url('assets/css/'); ?>magnific-popup.css' type='text/css' media='screen' />
<link rel='stylesheet' id='avia-media-css'  href='<?php echo base_url('assets/css/'); ?>mediaelementplayer.css' type='text/css' media='screen' />
<link rel='stylesheet' id='avia-print-css'  href='<?php echo base_url('assets/css/'); ?>print.css' type='text/css' media='print' />
<link rel='stylesheet' id='avia-dynamic-css'  href='<?php echo base_url('assets/css/'); ?>dynamic_avia_sdit.css' type='text/css' media='all' />
<link rel='stylesheet' id='avia-custom-css'  href='<?php echo base_url('assets/css/'); ?>custom.css' type='text/css' media='all' />

<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>sweetalert-dev.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>jquery.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>avia-compat.js'></script>



<meta property="fb:app_id" content=""/><style type="text/css">#google_language_translator { width:auto !important; }.goog-tooltip {display: none !important;}.goog-tooltip:hover {display: none !important;}.goog-text-highlight {background-color: transparent !important; border: none !important; box-shadow: none !important;}#google_language_translator { display:none; }#flags { display:none; }#google_language_translator {color: transparent;}body { top:0px !important; }</style><link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="alternate" type="application/rss+xml" title="" href="" />
<link rel="pingback" href="" />

<style type='text/css'>
@font-face {font-family: 'entypo-fontello'; font-weight: normal; font-style: normal;
src: url('<?php echo base_url('assets/font/'); ?>entypo-fontello.eot?v=3');
src: url('<?php echo base_url('assets/font/'); ?>entypo-fontello.eot?v=3#iefix') format('embedded-opentype'), 
url('<?php echo base_url('assets/font/'); ?>entypo-fontello.woff?v=3') format('woff'), 
url('<?php echo base_url('assets/font/'); ?>entypo-fontello.ttf?v=3') format('truetype'), 
url('<?php echo base_url('assets/font/'); ?>entypo-fontello.svg?v=3#entypo-fontello') format('svg');
} #top .avia-font-entypo-fontello, body .avia-font-entypo-fontello, html body [data-av_iconfont='entypo-fontello']:before{ font-family: 'entypo-fontello'; }
</style>


</head>




<body id="top" class="home page page-id-2251 page-template-default boxed helvetica-neue-websave _helvetica_neue " itemscope="itemscope" itemtype="https://schema.org/WebPage" >



	<div id='wrap_all'>



	
<header id='header' class=' header_color light_bg_color  av_header_top av_logo_left av_main_nav_header av_menu_right av_slim av_header_sticky av_header_shrinking av_header_stretch_disabled av_mobile_menu_phone av_header_searchicon'  role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader" >

<a id="advanced_menu_toggle" href="#" aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></a><a id="advanced_menu_hide" href="#" 	aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'></a>		<div id='header_meta' class='container_wrap container_wrap_meta  av_icon_active_left av_extra_header_active av_secondary_right av_phone_active_left av_entry_id_2251'>
		
<div class='container'>

<ul class='noLightbox social_bookmarks icon_count_2'>

<li class='social_bookmarks_twitter av-social-link-twitter social_icon_1'><a target='_blank' href='' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello' title='Twitter'><span class='avia_hidden_link_text'>Twitter</span></a></li>
<li class='social_bookmarks_dribbble av-social-link-dribbble social_icon_2'><a target='_blank' href='' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello' title='Dribbble'><span class='avia_hidden_link_text'>Dribbble</span></a></li></ul><nav class='sub_menu'  role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" ><ul id="avia2-menu" class="menu"><li id="menu-item-3335" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3335"><a href="https://www.gmail.com">Email</a>
</li>
            
<li id="menu-item-3336" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3336"><a href="<?php echo base_url('/'); ?>ppdb">PPDB</a></li>
<li id="menu-item-3344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3344"><a href="<?php echo base_url('/'); ?>kurikulum">Kurikulum</a></li>
</ul></nav><div class='phone-info with_nav'>

<?php foreach ($sekolah as $t ){ ?>
	
<span><?php echo $t->phone; ?></span>

<?php } ?>

</div><div id="google_language_translator" class="default-language-id"></div>			      </div>
		</div>

		<div  id='header_main' class='container_wrap container_wrap_logo'>
	
        	
				 <div class='container'>
				 
					<div class='inner-container'>
			<?php foreach ( $logo as $t ) { ?>
			<strong class='logo'><a href='<?php echo base_url(''); ?>'>
			<img height='100' width='300' src='<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>' alt='SDIT MTA GEMOLONG' /></a></strong><nav class='main_menu' data-selectname='Select a page'  role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" ><div class="avia-menu av-main-nav-wrap"><ul id="avia-menu" class="menu av-main-nav">
				
<li id="menu-item-3285" class="home menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-2251  menu-item-top-level menu-item-top-level-1"><a href="<?php echo base_url(''); ?>"><span class="avia-bullet"></span><span class="avia-menu-text">Beranda</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>

<?php } ?>

<li id="menu-item-3316" class="profil menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-2"><a href="<?php echo base_url('/'); ?>profil"><span class="avia-bullet"></span><span class="avia-menu-text">Profil</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>

<ul class="sub-menu">
	<?php foreach( $profil as $t ) { ?>
	<li id="menu-item-3314" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>profil/read/<?php echo $t->slug ?>"><span class="avia-bullet"></span><span class="avia-menu-text"><?php echo $t->judul ?></span></a></li>
<?php } ?>
	<!--<li id="menu-item-3317" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>profil"><span class="avia-bullet"></span><span class="avia-menu-text">Lainya</span></a></li>-->
</ul>

</li>

<li id="menu-item-3316" class="ppdb menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-2"><a href="<?php echo base_url('/'); ?>ppdb"><span class="avia-bullet"></span><span class="avia-menu-text">PPDB</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>

<ul class="sub-menu">
	<?php foreach( $ppdb as $t ) { ?>
	<li id="menu-item-3314" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>ppdb/read/<?php echo $t->slug ?>"><span class="avia-bullet"></span><span class="avia-menu-text"><?php echo $t->judul ?></span></a></li>
<?php } ?>
	<!--<li id="menu-item-3317" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>ppdbprofil"><span class="avia-bullet"></span><span class="avia-menu-text">Lainya</span></a></li>-->
</ul>

</li>

<li id="menu-item-3316" class="kesiswaan menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-2"><a href="<?php echo base_url('/'); ?>kesiswaan"><span class="avia-bullet"></span><span class="avia-menu-text">Kesiswaan</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>

<ul class="sub-menu">
	<?php foreach( $kesiswaan as $t ) { ?>
	<li id="menu-item-3314" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>kesiswaan/read/<?php echo $t->slug ?>"><span class="avia-bullet"></span><span class="avia-menu-text"><?php echo $t->judul ?></span></a></li>
<?php } ?>
	<!--<li id="menu-item-3317" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>kesiswaan"><span class="avia-bullet"></span><span class="avia-menu-text">Lainya</span></a></li>-->
</ul>

</li>

    
<li id="menu-item-3316" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-2"><a href="<?php echo base_url('/'); ?>fasilitas"><span class="avia-bullet"></span><span class="avia-menu-text">Fasilitas</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>

<ul class="sub-menu">
	<?php foreach( $fasilitas as $t ) { ?>
	<li id="menu-item-3314" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>fasilitas/read/<?php echo $t->slug ?>"><span class="avia-bullet"></span><span class="avia-menu-text"><?php echo $t->judul ?></span></a></li>
<?php } ?>
	<!--<li id="menu-item-3317" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>fasilitas"><span class="avia-bullet"></span><span class="avia-menu-text">Lainya</span></a></li>-->
</ul>

</li>

<li id="menu-item-3316" class="kurikulum menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-2"><a href="<?php echo base_url('/'); ?>kurikulum"><span class="avia-bullet"></span><span class="avia-menu-text">Kurikulum</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>

<ul class="sub-menu">
	<?php foreach( $kurikulum as $t ) { ?>
	<li id="menu-item-3314" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>kurikulum/read/<?php echo $t->slug ?>"><span class="avia-bullet"></span><span class="avia-menu-text"><?php echo $t->judul ?></span></a></li>
<?php } ?>
	<!--<li id="menu-item-3317" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>kurikulum"><span class="avia-bullet"></span><span class="avia-menu-text">Lainya</span></a></li>-->
</ul>

</li>

<li id="menu-item-3316" class="berita menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-2"><a href="<?php echo base_url('/'); ?>berita"><span class="avia-bullet"></span><span class="avia-menu-text">Berita</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>

<ul class="sub-menu">
	<?php foreach( $berita as $t ) { ?>
	<li id="menu-item-3314" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>berita/read/<?php echo $t->slug ?>"><span class="avia-bullet"></span><span class="avia-menu-text"><?php echo $t->judul ?></span></a></li>
<?php } ?>
	<!--<li id="menu-item-3317" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>berita"><span class="avia-bullet"></span><span class="avia-menu-text">Lainya</span></a></li>-->
</ul>

</li>

<li id="menu-item-3316" class="artikel menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-2"><a href="<?php echo base_url('/'); ?>artikel"><span class="avia-bullet"></span><span class="avia-menu-text">Artikel</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a>

<ul class="sub-menu">
	<?php foreach( $artikel as $t ) { ?>
	<li id="menu-item-3314" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>artikel/read/<?php echo $t->slug ?>"><span class="avia-bullet"></span><span class="avia-menu-text"><?php echo $t->judul ?></span></a></li>
<?php } ?>
	<!--<li id="menu-item-3317" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo base_url('/'); ?>artikel"><span class="avia-bullet"></span><span class="avia-menu-text">Lainya</span></a></li>-->
</ul>

</li>

<li id="menu-item-3300" class="galeri menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-3"><a href="<?php echo base_url('/'); ?>galeri"><span class="avia-bullet"></span><span class="avia-menu-text">Galeri</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>


<li id="menu-item-search" class="noMobile menu-item menu-item-search-dropdown">
							<a href="?s=" rel="nofollow" data-avia-search-tooltip="

&lt;form action=&quot;<?php echo base_url('search/keyword') ?>&quot; id=&quot;searchform&quot; method=&quot;post&quot; class=&quot;&quot;&gt;
	&lt;div&gt;
		&lt;input type=&quot;submit&quot; value=&quot;&quot; id=&quot;searchsubmit&quot; class=&quot;button avia-font-entypo-fontello&quot; /&gt;
		&lt;input type=&quot;text&quot; id=&quot;s&quot; name=&quot;key&quot; value=&quot;&quot; placeholder='Search' /&gt;
			&lt;/div&gt;
&lt;/form&gt;" aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'><span class="avia_hidden_link_text">Search</span></a>
	        		   </li></ul></div></nav>				
					 <!-- end inner-container-->
			        </div>
						
		        <!-- end container-->
		        </div>

		<!-- end container_wrap-->
		</div>
		
		<div class='header_bg'></div>

<!-- end header -->
</header>

