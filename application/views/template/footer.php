<?php 
    $alamatfooter  	= $this->Dbhelper->getdata('tcompany');
    $linkterkait  	= $this->Dbhelper->getdata('flink'); 
    
?>

<div class='container_wrap footer_color' id='footer'>

					<div class='container'>

						<div class='flex_column av_one_third  first el_before_av_one_third'><section id="text-5" class="widget clearfix widget_text"><h3 class="widgettitle">Alamat</h3>			<div class="textwidget"></div>
		<span class="seperator extralight-border"></span></section><section id="text-2" class="widget clearfix widget_text">			
<div class="textwidget">

<?php foreach($alamatfooter as $t ){ ?>
<p><?php echo $t->alamat ?>,<br />
Email : <?php echo $t->email ?><br />
Telp   : <?php echo $t->phone ?></p>
<?php } ?>
</div>
<!--
		<span class="seperator extralight-border"></span></section></div><div class='flex_column av_one_third  el_after_av_one_third  el_before_av_one_third '><section id="text-9" class="widget clearfix widget_text"><h3 class="widgettitle">Galeri</h3>			<div class="textwidget"></div>
		<span class="seperator extralight-border"></span></section><section id="wdi_instagram_widget-2" class="widget clearfix wdi_instagram_widget">    <style type="text/css">

      #wdi_feed_0 .wdi_feed_header {
        display: none; /*if display-header is true display:block*/
      }

            #wdi_feed_0 .wdi_header_user_text {
        padding-top: 5.5px;

      }

      #wdi_feed_0 .wdi_header_user_text h3 {
        margin-top: 5.5px;
      }

      #wdi_feed_0 .wdi_media_info {
        display: block      }

      #wdi_feed_0 .wdi_feed_item {
        width: 25%; /*thumbnail_size*/
      }


            @media screen and (min-width: 800px) and (max-width: 1024px) {
        #wdi_feed_0 .wdi_feed_item {
          width: 33.333333333333%; /*thumbnail_size*/
          margin: 0;
          display: inline-block;
          vertical-align: top;
          overflow: hidden;
        }

        #wdi_feed_0 .wdi_feed_container {
          width: 100%;
          margin: 0 auto;
          background-color: #FFFFFF; /*feed_container_bg_color*/
        }

      }

      @media screen and (min-width: 480px) and (max-width: 800px) {
        #wdi_feed_0 .wdi_feed_item {
          width: 50%; /*thumbnail_size*/
          margin: 0;
          display: inline-block;
          vertical-align: top;
          overflow: hidden;
        }

        #wdi_feed_0 .wdi_feed_container {
          width: 100%;
          margin: 0 auto;
          background-color: #FFFFFF; /*feed_container_bg_color*/
        }
      }

      @media screen and (max-width: 480px) {
        #wdi_feed_0 .wdi_feed_item {
          width: 100%; /*thumbnail_size*/
          margin: 0;
          display: inline-block;
          vertical-align: top;
          overflow: hidden;
        }

        #wdi_feed_0 .wdi_feed_container {
          width: 100%;
          margin: 0 auto;
          background-color: #FFFFFF; /*feed_container_bg_color*/
        }
      }
 

          </style>
    
    <div id="wdi_feed_0" class="wdi_feed_main_container wdi_layout_th wdi_feed_theme_1 wdi_feed_thumbnail_1"  >
      <div  class="wdi_js_error">Something is wrong.<br/></div><div  class="wdi_token_error wdi_hidden">Instagram token error.</div><div  class="wdi_private_feed_error wdi_hidden"><span></span></div>      <div id="wdi_spider_popup_loading_0" class="wdi_spider_popup_loading"></div>
      <div id="wdi_spider_popup_overlay_0" class="wdi_spider_popup_overlay"
           onclick="wdi_spider_destroypopup(1000)"></div>
      <div class="wdi_feed_container">
        <div class="wdi_feed_info">
          <div id="wdi_feed_0_header" class='wdi_feed_header'></div>
          <div id="wdi_feed_0_users" class='wdi_feed_users'></div>
        </div>
                <div class="wdi_feed_wrapper wdi_col_4"
             wdi-res='wdi_col_4'></div>
        <div class="wdi_clear"></div>

              </div>
    </div>
        <style>
          </style>
        <script>
          </script>
         -->
    
    <span class="seperator extralight-border"></span></section></div><div class='flex_column av_one_third  el_after_av_one_third  el_before_av_one_third '><section id="text-3" class="widget clearfix widget_text"><h3 class="widgettitle">Link Terkait</h3>			<div class="textwidget"></div>
    <span class="seperator extralight-border"></span></section>
    
    <?php foreach ( $linkterkait as $t ) { ?>
    <section id="avia_partner_widget-2" class="widget clearfix avia_partner_widget">
      
      <a target="_blank" href="<?php echo $t->link ?>" class="preloading_background  avia_partner1 link_list_item1 " ><img class="rounded" src="<?php echo base_url('gopanel'); ?><?php echo $t->gambar ?>" title="" alt=""/></a>
      <span class="seperator extralight-border"></span>

    </section>

    <?php } ?>
    <!--
    <section id="avia_partner_widget-3" class="widget clearfix avia_partner_widget">
      <a target="_blank" href="" class="preloading_background  avia_partner1 link_list_item2 no_top_margin" ><img class="rounded" src="" title="" alt=""/></a>
      <a target="_blank" href="" class="preloading_background avia_partner2 link_list_item2 no_top_margin" ><img class="rounded" src="" title="" alt=""/></a>
    <span class="seperator extralight-border"></span>
  </section>
    -->
  </div>

					</div>


				<!-- ####### END FOOTER CONTAINER ####### -->
				</div>

	
			
				<footer class='container_wrap socket_color' id='socket'  role="contentinfo" itemscope="itemscope" itemtype="https://schema.org/WPFooter" >
                    <div class='container'>

                        <span class='copyright'>2018 - <a  href=''>SDIT MTA Gemolong</a></span>

                        <ul class='noLightbox social_bookmarks icon_count_2'><li class='social_bookmarks_twitter av-social-link-twitter social_icon_1'><a target='_blank' href='http://twitter.com/' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello' title='Twitter'><span class='avia_hidden_link_text'>Twitter</span></a></li><li class='social_bookmarks_dribbble av-social-link-dribbble social_icon_2'><a target='_blank' href='' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello' title='Dribbble'><span class='avia_hidden_link_text'>Dribbble</span></a></li></ul><nav class='sub_menu_socket'  role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" ></nav>
                    </div>

	            <!-- ####### END SOCKET CONTAINER ####### -->
				</footer>


					<!-- end main -->
		</div>
		
		<!-- end wrap_all --></div>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=&version=v2.3";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>	
    <div id="flags" style="display:none" class="size18"><ul id="sortable" class="ui-sortable"><li id="English"><a title="English" class="nturl notranslate en flag united-states"></a></ul></div><div id='glt-footer'></div><script>function GoogleLanguageTranslatorInit() { new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages:'en', autoDisplay: false}, 'google_language_translator');}</script>
 <script type='text/javascript'>
 /* <![CDATA[ */  
var avia_framework_globals = avia_framework_globals || {};
    avia_framework_globals.frameworkUrl = 'http://sditnurhidayah.sch.id/wp-content/themes/SDIT/framework/';
    avia_framework_globals.installedAt = 'http://sditnurhidayah.sch.id/wp-content/themes/SDIT/';
    avia_framework_globals.ajaxurl = 'http://sditnurhidayah.sch.id/wp-admin/admin-ajax.php';
/* ]]> */ 
</script>

 <small style="display:none;">enfoldwplk</small><link rel='stylesheet' id='dashicons-css'  href='<?php echo base_url('assets/css/'); ?>dashicons.min.css' type='text/css' media='all' />
 <link rel='stylesheet' id='thickbox-css'  href='<?php echo base_url('assets/css/'); ?>thickbox.css' type='text/css' media='all' />
 <link rel='stylesheet' id='wdi_frontend_thumbnails-css'  href='<?php echo base_url('assets/css/'); ?>wdi_frontend.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=1.2.16' type='text/css' media='all' />
<link rel='stylesheet' id='wdi_default_theme-css'  href='<?php echo base_url('assets/css/'); ?>default_theme.css' type='text/css' media='all' />

<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>scripts.js'></script>
<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=GoogleLanguageTranslatorInit'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>jquery.magnific-popup.min.js'></script>
<!-- css cannot offline -->
<script type='text/javascript' src='http://sditnurhidayah.sch.id/wp-content/themes/SDIT/js/avia.js?ver=3'></script>
<script type='text/javascript' src='http://sditnurhidayah.sch.id/wp-content/themes/SDIT/js/shortcodes.js?ver=3'></script>

<script type='text/javascript'>
/* <![CDATA[ */
var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Download File":"Download File","Download Video":"Download Video","Play\/Pause":"Play\/Pause","Mute Toggle":"Mute Toggle","None":"None","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Unmute":"Unmute","Mute":"Mute","Captions\/Subtitles":"Captions\/Subtitles"}};
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};
/* ]]> */
</script>

<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>mediaelement-and-player.min.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>wp-mediaelement.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>comment-reply.min.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>wp-embed.min.js'></script>

<script type='text/javascript'>
/* <![CDATA[ */
var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"http:\/\/sditnurhidayah.sch.id\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>thickbox.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>underscore.min.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>wdi_instagram.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wdi_ajax = {"ajax_url":"http:\/\/sditnurhidayah.sch.id\/wp-admin\/admin-ajax.php"};
var wdi_url = {"plugin_url":"http:\/\/sditnurhidayah.sch.id\/wp-content\/plugins\/wd-instagram-feed\/","ajax_url":"http:\/\/sditnurhidayah.sch.id\/wp-admin\/admin-ajax.php"};
var wdi_front_messages = {"connection_error":"Connection Error, try again later :(","user_not_found":"Username not found","network_error":"Network error, please try again later :(","hashtag_nodata":"There is no data for that hashtag","filter_title":"Click to filter images by this user","invalid_users_format":"Provided feed users are invalid or obsolete for this version of plugin","feed_nomedia":"There is no media in this feed","follow":"Follow","show_alerts":"","wdi_token_flag_nonce":"e84f5acbcb","wdi_token_error_flag":""};
var wdi_feed_0 = {"feed_row":{"thumb_user":"sditnurhidayah","feed_name":"Foto","feed_thumb":"https:\/\/scontent.cdninstagram.com\/t51.2885-19\/11906329_960233084022564_1448528159_a.jpg","published":"1","theme_id":"1","feed_users":"[{\"username\":\"sditnurhidayah\",\"id\":\"4780204233\"}]","feed_display_view":"none","sort_images_by":"date","display_order":"desc","follow_on_instagram_btn":"1","display_header":"0","number_of_photos":"6","load_more_number":"6","pagination_per_page_number":"10","pagination_preload_number":"10","image_browser_preload_number":"10","image_browser_load_number":"10","number_of_columns":"4","resort_after_load_more":"0","show_likes":"0","show_description":"0","show_comments":"0","show_usernames":"0","display_user_info":"1","display_user_post_follow_number":"1","show_full_description":"1","disable_mobile_layout":"0","feed_type":"thumbnails","feed_item_onclick":"lightbox","popup_fullscreen":"0","popup_width":"640","popup_height":"640","popup_type":"none","popup_autoplay":"0","popup_interval":"5","popup_enable_filmstrip":"0","popup_filmstrip_height":"70","autohide_lightbox_navigation":"1","popup_enable_ctrl_btn":"1","popup_enable_fullscreen":"1","popup_enable_info":"0","popup_info_always_show":"0","popup_info_full_width":"0","popup_enable_comment":"0","popup_enable_fullsize_image":"1","popup_enable_download":"0","popup_enable_share_buttons":"0","popup_enable_facebook":"0","popup_enable_twitter":"0","popup_enable_google":"0","popup_enable_pinterest":"0","popup_enable_tumblr":"0","show_image_counts":"0","enable_loop":"1","popup_image_right_click":"1","conditional_filters":"","conditional_filter_type":"none","show_username_on_thumb":"0","conditional_filter_enable":"0","liked_feed":"userhash","mobile_breakpoint":"640","redirect_url":"","feed_resolution":"optimal","id":"1","widget":true,"access_token":"4780204233.54da896.809de284b4a4436a8c614802233afd3d","wdi_feed_counter":0},"data":[],"usersData":[],"dataCount":"0"};
var wdi_theme_1 = {"theme_name":"Instagram","default_theme":"1","feed_container_bg_color":"#FFFFFF","feed_wrapper_width":"100%","feed_container_width":"100%","feed_wrapper_bg_color":"#FFFFFF","active_filter_bg_color":"#429fff","header_margin":"0px","header_padding":"5px","header_border_size":"0px","header_border_color":"#DDDDDD","header_position":"left","header_img_width":"40","header_border_radius":"0","header_text_padding":"5px","header_text_color":"#0f4973","header_font_weight":"400","header_text_font_size":"18px","header_text_font_style":"normal","follow_btn_border_radius":"3","follow_btn_padding":"25","follow_btn_margin":"10","follow_btn_bg_color":"#ffffff","follow_btn_border_color":"#0f4973","follow_btn_text_color":"#0f4973","follow_btn_font_size":"18","follow_btn_border_hover_color":"#0f4973","follow_btn_text_hover_color":"#0f4973","follow_btn_background_hover_color":"#ffffff","user_padding":"5px","user_horizontal_margin":"","user_border_size":"0px","user_border_color":"","user_img_width":"40","user_border_radius":"40","user_background_color":"","users_border_size":"0px","users_border_color":"","users_background_color":"","users_text_color":"#0f4973","users_font_weight":"400","users_text_font_size":"18px","users_text_font_style":"normal","user_description_font_size":"14px","lightbox_overlay_bg_color":"#25292c","lightbox_overlay_bg_transparent":"90","lightbox_bg_color":"#ffffff","lightbox_ctrl_btn_height":"20","lightbox_ctrl_btn_margin_top":"10","lightbox_ctrl_btn_margin_left":"7","lightbox_ctrl_btn_pos":"bottom","lightbox_ctrl_cont_bg_color":"#2a5b83","lightbox_ctrl_cont_border_radius":"4","lightbox_ctrl_cont_transparent":"80","lightbox_ctrl_btn_align":"center","lightbox_ctrl_btn_color":"#FFFFFF","lightbox_ctrl_btn_transparent":"100","lightbox_toggle_btn_height":"14","lightbox_toggle_btn_width":"100","lightbox_close_btn_border_radius":"16","lightbox_close_btn_border_width":"2","lightbox_close_btn_border_style":"none","lightbox_close_btn_border_color":"#FFFFFF","lightbox_close_btn_box_shadow":"none","lightbox_close_btn_bg_color":"#2a5b83","lightbox_close_btn_transparent":"100","lightbox_close_btn_width":"20","lightbox_close_btn_height":"20","lightbox_close_btn_top":"-10","lightbox_close_btn_right":"-10","lightbox_close_btn_size":"15","lightbox_close_btn_color":"#FFFFFF","lightbox_close_btn_full_color":"#000000","lightbox_close_btn_hover_color":"#000000","lightbox_comment_share_button_color":"#ffffff","lightbox_rl_btn_style":"fa-chevron","lightbox_rl_btn_bg_color":"#2a5b83","lightbox_rl_btn_transparent":"80","lightbox_rl_btn_box_shadow":"none","lightbox_rl_btn_height":"40","lightbox_rl_btn_width":"40","lightbox_rl_btn_size":"20","lightbox_close_rl_btn_hover_color":"#25292c","lightbox_rl_btn_color":"#FFFFFF","lightbox_rl_btn_border_radius":"20","lightbox_rl_btn_border_width":"0","lightbox_rl_btn_border_style":"none","lightbox_rl_btn_border_color":"#FFFFFF","lightbox_filmstrip_pos":"top","lightbox_filmstrip_thumb_margin":"0 1px","lightbox_filmstrip_thumb_border_width":"1","lightbox_filmstrip_thumb_border_style":"solid","lightbox_filmstrip_thumb_border_color":"#25292c","lightbox_filmstrip_thumb_border_radius":"0","lightbox_filmstrip_thumb_active_border_width":"0","lightbox_filmstrip_thumb_active_border_color":"#FFFFFF","lightbox_filmstrip_thumb_deactive_transparent":"70","lightbox_filmstrip_rl_btn_size":"20","lightbox_filmstrip_rl_btn_color":"#FFFFFF","lightbox_filmstrip_rl_bg_color":"#3B3B3B","lightbox_info_pos":"top","lightbox_info_align":"right","lightbox_info_bg_color":"#3b3b3b","lightbox_info_bg_transparent":"80","lightbox_info_border_width":"1","lightbox_info_border_style":"none","lightbox_info_border_color":"#3b3b3b","lightbox_info_border_radius":"5","lightbox_info_padding":"5px","lightbox_info_margin":"15px","lightbox_title_color":"#FFFFFF","lightbox_title_font_style":"segoe ui","lightbox_title_font_weight":"bold","lightbox_title_font_size":"13","lightbox_description_color":"#FFFFFF","lightbox_description_font_style":"segoe ui","lightbox_description_font_weight":"normal","lightbox_description_font_size":"14","lightbox_info_height":"30","lightbox_comment_width":"400","lightbox_comment_pos":"right","lightbox_comment_bg_color":"#ffffff","lightbox_comment_font_size":"12","lightbox_comment_font_color":"#000000","lightbox_comment_font_style":"segoe ui","lightbox_comment_author_font_size":"14","lightbox_comment_author_font_color":"#125688","lightbox_comment_author_font_color_hover":"#002160","lightbox_comment_date_font_size":"10","lightbox_comment_body_font_size":"12","lightbox_comment_input_border_width":"1","lightbox_comment_input_border_style":"none","lightbox_comment_input_border_color":"#666666","lightbox_comment_input_border_radius":"0","lightbox_comment_input_padding":"2px","lightbox_comment_input_bg_color":"#333333","lightbox_comment_button_bg_color":"#616161","lightbox_comment_button_padding":"3px 10px","lightbox_comment_button_border_width":"1","lightbox_comment_button_border_style":"none","lightbox_comment_button_border_color":"#666666","lightbox_comment_button_border_radius":"3","lightbox_comment_separator_width":"1","lightbox_comment_separator_style":"solid","lightbox_comment_separator_color":"#125688","lightbox_comment_load_more_color":"#125688","lightbox_comment_load_more_color_hover":"#000000","th_photo_wrap_padding":"5px","th_photo_wrap_border_size":"5px","th_photo_wrap_border_color":"#ffffff","th_photo_img_border_radius":"0px","th_photo_wrap_bg_color":"#FFFFFF","th_photo_meta_bg_color":"#FFFFFF","th_photo_meta_one_line":"1","th_like_text_color":"#8a8d8e","th_comment_text_color":"#8a8d8e","th_photo_caption_font_size":"14px","th_photo_caption_color":"#125688","th_feed_item_margin":"0","th_photo_caption_hover_color":"#8e8e8e","th_like_comm_font_size":"13px","th_overlay_hover_color":"#125688","th_overlay_hover_transparent":"50","th_overlay_hover_icon_color":"#FFFFFF","th_overlay_hover_icon_font_size":"25px","th_photo_img_hover_effect":"","mas_photo_wrap_padding":"5px","mas_photo_wrap_border_size":"0px","mas_photo_wrap_border_color":"gray","mas_photo_img_border_radius":"0px","mas_photo_wrap_bg_color":"#FFFFFF","mas_photo_meta_bg_color":"#FFFFFF","mas_photo_meta_one_line":"1","mas_like_text_color":"#8a8d8e","mas_comment_text_color":"#8a8d8e","mas_photo_caption_font_size":"14px","mas_photo_caption_color":"#125688","mas_feed_item_margin":"0","mas_photo_caption_hover_color":"#8e8e8e","mas_like_comm_font_size":"13px","mas_overlay_hover_color":"#125688","mas_overlay_hover_transparent":"50","mas_overlay_hover_icon_color":"#FFFFFF","mas_overlay_hover_icon_font_size":"25px","mas_photo_img_hover_effect":"","blog_style_photo_wrap_padding":"5px","blog_style_photo_wrap_border_size":"0px","blog_style_photo_wrap_border_color":"gray","blog_style_photo_img_border_radius":"0px","blog_style_photo_wrap_bg_color":"#FFFFFF","blog_style_photo_meta_bg_color":"#FFFFFF","blog_style_photo_meta_one_line":"1","blog_style_like_text_color":"#8a8d8e","blog_style_comment_text_color":"#8a8d8e","blog_style_photo_caption_font_size":"16px","blog_style_photo_caption_color":"#125688","blog_style_feed_item_margin":"0","blog_style_photo_caption_hover_color":"#8e8e8e","blog_style_like_comm_font_size":"20px","image_browser_photo_wrap_padding":"5px","image_browser_photo_wrap_border_size":"0px","image_browser_photo_wrap_border_color":"gray","image_browser_photo_img_border_radius":"0px","image_browser_photo_wrap_bg_color":"#FFFFFF","image_browser_photo_meta_bg_color":"#FFFFFF","image_browser_photo_meta_one_line":"1","image_browser_like_text_color":"#8a8d8e","image_browser_comment_text_color":"#8a8d8e","image_browser_photo_caption_font_size":"16px","image_browser_photo_caption_color":"#125688","image_browser_feed_item_margin":"0","image_browser_photo_caption_hover_color":"#8e8e8e","image_browser_like_comm_font_size":"20px","load_more_position":"center","load_more_padding":"4px","load_more_bg_color":"#ffffff","load_more_border_radius":"500px","load_more_height":"90px","load_more_width":"90px","load_more_border_size":"1px","load_more_border_color":"#0f4973","load_more_text_color":"#1e73be","load_more_text_font_size":"14px","load_more_wrap_hover_color":"transparent","pagination_ctrl_color":"#0f4973","pagination_size":"36px","pagination_ctrl_margin":"15px","pagination_ctrl_hover_color":"#25292c","pagination_position":"center","pagination_position_vert":"top","th_thumb_user_bg_color":"","th_thumb_user_color":"","mas_thumb_user_bg_color":"","mas_thumb_user_color":"","id":"1"};
var wdi_front = {"feed_counter":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>wdi_frontend.min.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>wdi_responsive.min.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>jquery.mobile.js'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>jquery.fullscreen-0.4.1.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
          $( ".<?php echo $aktifmenu ?>" ).addClass( "current-menu-item" );
          $( ".<?php echo $aktifmenu ?>" ).addClass( "current_page_item" );
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var wdi_objectL10n = {"wdi_field_required":"Field is required.","wdi_mail_validation":"This is not a valid email address.","wdi_search_result":"There are no images matching your search."};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url('assets/js/'); ?>wdi_gallery_box.min.js'></script>

<a href='#top' title='Scroll to top' id='scroll-top-link' aria-hidden='true' data-av_icon='' data-av_iconfont='entypo-fontello'><span class="avia_hidden_link_text">Scroll to top</span></a>

<div id="fb-root"></div>
</body>
</html>