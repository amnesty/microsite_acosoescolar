					<div class="social">
						<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp FB" data-e_l="<?php echo $casos[$caso][2]?> comp FB" data-shareurl="<?php echo $url_share_fb; ?>" href="#" class="facebook-share send-piwik-event"><i class="fab fa-facebook white"></i></a>
						<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp TW" data-e_l="<?php echo $casos[$caso][2]?> comp TW" data-shareurl="<?php echo urlencode($url_share_tw); ?>" data-texto="<?php echo $share_tw; ?>" href="#" class="twitter-share send-piwik-event"><i class="fab fa-twitter white"></i></a>
<?php
if($isMobile) {
?>						
						<a data-e_c="<?php echo EVENT_CATEGORY; ?>" data-e_a="<?php echo $casos[$caso][2]?> comp WH" data-e_l="<?php echo $casos[$caso][2]?> comp WH" data-enlace="<?php echo $page_url; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode($share_wh . ' ' . $url_share_wh);?>" class="send-piwik-event"><i class="fab fa-whatsapp white"></i></a>
<?php
}
?>						
					</div>