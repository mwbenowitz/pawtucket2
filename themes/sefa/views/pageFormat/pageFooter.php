<?php
/* ----------------------------------------------------------------------
 * views/pageFormat/pageFooter.php : 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2014 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */
?>
			<div style="clear:both; height:1px;"><!-- empty --></div>
			<!--begin footer-->
			<div class="row footer">
				<div class="col-sm-12 col-md-10 ">
					46 West 90th Street, 2nd floor, New York, NY 10024<br />
					Gallery Hours: Monday-Thursday, 11am-5pm and by appointment.
				</div>
				<div class="col-sm-12 col-md-2 socialright footernav">
					<?php print caNavLink($this->request, _t("Newsletter Signup"), "footerButton", "", "About", "MailingList"); ?><br/>
					<a href="https://www.facebook.com/pages/Susan-Eley-Fine-Art/137980986325025" class="socialicon gray"><?php print caGetThemeGraphic($this->request, 'fbook.png'); ?></a>
					<a href="https://twitter.com/EleyFineArt" class="socialicon gray"><?php print caGetThemeGraphic($this->request, 'twitter.png'); ?></a>
					<a href="https://artsy.net/susan-eley-fine-art?utm_source=follow_badge" class="socialicon gray"><?php print caGetThemeGraphic($this->request, 'artsy.png'); ?></a>
					<a href="https://www.1stdibs.com/dealers/susan-eley-fine-art/?utm_source=susaneleyfineart.com&utm_medium=referral&utm_campaign=dealer&utm_content=dealer_badge_1stdibs_gray" target="_blank" class="socialicon"><?php print caGetThemeGraphic($this->request, '1stdibs.png', array("title" => "Shop Susan Eley Fine Art's fine art on 1stdibs")); ?></a>
					<a href="mailto:susie@susaneleyfineart.com" class="socialicon gray"><?php print caGetThemeGraphic($this->request, 'envelope.png'); ?></a>
				</div>
				<div class="col-sm-12 socialleft footernavphone">
					<?php print caNavLink($this->request, _t("Newsletter Signup"), "footerButton", "", "About", "MailingList"); ?><br/><br/>
					<a href="https://www.facebook.com/pages/Susan-Eley-Fine-Art/137980986325025" class="socialicon gray"><?php print caGetThemeGraphic($this->request, 'fbook.png'); ?></a>
					<a href="https://twitter.com/EleyFineArt" class="socialicon gray"><?php print caGetThemeGraphic($this->request, 'twitter.png'); ?></a>
					<a href="https://artsy.net/susan-eley-fine-art?utm_source=follow_badge" class="socialicon gray"><?php print caGetThemeGraphic($this->request, 'artsy.png'); ?></a>
					<a href="https://www.1stdibs.com/dealers/susan-eley-fine-art/?utm_source=susaneleyfineart.com&utm_medium=referral&utm_campaign=dealer&utm_content=dealer_badge_1stdibs_gray" target="_blank" class="socialicon"><?php print caGetThemeGraphic($this->request, '1stdibs.png', array("title" => "Shop Susan Eley Fine Art's fine art on 1stdibs")); ?></a>
					<a href="mailto:susie@susaneleyfineart.com" class="socialicon gray"><?php print caGetThemeGraphic($this->request, 'envelope.png'); ?></a>
				</div>
			</div><!--end row footer-->
		</div><!-- end pageArea --></div><!-- end container -->
<?php print TooltipManager::getLoadHTML(); ?>
		<div id="caMediaPanel"> 
			<div id="caMediaPanelContentArea">
			
			</div>
		</div>
		<script type="text/javascript">
			/*
				Set up the "caMediaPanel" panel that will be triggered by links in object detail
				Note that the actual <div>'s implementing the panel are located here in views/pageFormat/pageFooter.php
			*/
			var caMediaPanel;
			jQuery(document).ready(function() {
				if (caUI.initPanel) {
					caMediaPanel = caUI.initPanel({ 
						panelID: 'caMediaPanel',										/* DOM ID of the <div> enclosing the panel */
						panelContentID: 'caMediaPanelContentArea',		/* DOM ID of the content area <div> in the panel */
						exposeBackgroundColor: '#FFFFFF',						/* color (in hex notation) of background masking out page content; include the leading '#' in the color spec */
						exposeBackgroundOpacity: 0.7,							/* opacity of background color masking out page content; 1.0 is opaque */
						panelTransitionSpeed: 400, 									/* time it takes the panel to fade in/out in milliseconds */
						allowMobileSafariZooming: true,
						mobileSafariViewportTagID: '_msafari_viewport',
						closeButtonSelector: '.close'					/* anything with the CSS classname "close" will trigger the panel to close */
					});
				}
			});
			/*(function(e,d,b){var a=0;var f=null;var c={x:0,y:0};e("[data-toggle]").closest("li").on("mouseenter",function(g){if(f){f.removeClass("open")}d.clearTimeout(a);f=e(this);a=d.setTimeout(function(){f.addClass("open")},b)}).on("mousemove",function(g){if(Math.abs(c.x-g.ScreenX)>4||Math.abs(c.y-g.ScreenY)>4){c.x=g.ScreenX;c.y=g.ScreenY;return}if(f.hasClass("open")){return}d.clearTimeout(a);a=d.setTimeout(function(){f.addClass("open")},b)}).on("mouseleave",function(g){d.clearTimeout(a);f=e(this);a=d.setTimeout(function(){f.removeClass("open")},b)})})(jQuery,window,200);*/
		</script>
	</body>
</html>
