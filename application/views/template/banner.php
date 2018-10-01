<?php 
$banner = $this->M_home->getgambarheader();
foreach ($banner as $t) { ?>
<div class="inner-banner">
    <img class="center-image" src="<?php echo base_url('gopanel/'.$t->image); ?>" alt="">
</div>
<?php } ?>