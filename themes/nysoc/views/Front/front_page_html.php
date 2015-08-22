<?php
/** ---------------------------------------------------------------------
 * themes/default/Front/front_page_html : Front page of site 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2013 Whirl-i-Gig
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
 * @package CollectiveAccess
 * @subpackage Core
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License version 3
 *
 * ----------------------------------------------------------------------
 */
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12" style='padding-left:0px; padding-right:0px;'>
<?php
			print $this->render("Front/featured_set_slideshow_html.php");
?>		
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-8">
				<h1>Circulation Records 1789-1792</h1>
				<h4>Discover something new about New York and New Yorkers through the Society Library’s historic records and collections.</H4>
			</div><!--end col-sm-8-->
			<div class="col-sm-4">
			
			</div> <!--end col-sm-4-->	
		</div><!-- end row -->
	</div> <!--end container-->
			