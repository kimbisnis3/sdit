<?php $this->load->view('template/header'); ?>
<link rel='stylesheet' id='avia-scs-css'  href='<?php echo base_url('assets/lb/src/css/'); ?>lightbox.css' type='text/css' media='all' />

	<div id='main' data-scroll-offset='88'>



	

		<div class='container_wrap container_wrap_first main_color fullsize'>

			<div class='container'>

				<main class='template-page content  av-content-full alpha units'  role="main" itemprop="mainContentOfPage" >

<?php 
$no    = 1;
foreach ($maindata as $t ) { 
$classfirst = "";
if (($no % 3) == 1)  {
	$classfirst = 'first';
}

?>
<article class='slide-entry flex_column  post-entry post-entry-3744 slide-entry-overview slide-loop-7 slide-parity-odd  av_one_third <?php echo $classfirst; ?> <?php echo $no; ?> real-thumbnail'  itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost" >
<a href='<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>' data-lightbox="image-1" data-rel='slide-1' class='slide-image' title=''><img width="495" height="400" src="<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>" class="attachment-portfolio size-portfolio wp-post-image" alt="e3f56ecc-b261-48fb-b35b-96ef0534139d" />
</a>
</article>

<?php $no++; } ?>


				<!--end content-->
				</main>

				
			</div><!--end container-->

		</div><!-- close default .container_wrap element -->
<!--<script type='text/javascript' src='<?php echo base_url('assets/lb/src/js/'); ?>lightbox.js'></script>-->
        <?php $this->load->view('template/footer'); ?>
