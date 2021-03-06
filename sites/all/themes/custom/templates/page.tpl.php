<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
 global $base_url;
?>

<?php if ($is_front): ?>
<div id="page-front-wrapper">
<?php else: ?>
<div id="page-wrapper">
<?php endif; ?>
        <!-- header start-->
        <div class="header-wrapper">     
			<div id="utility-links">
				<div class="container-fluid">
					<div class="row">
				<!-- Main menu end-->
					<div class="col-md-6">
							<?php print render($page['utility_links_left']); ?>
						</div>
					<div class="col-md-offset-3 col-md-3">
							<?php print render($page['utility_links_right']); ?>
						</div>
					</div>
				</div>
			</div>

            <div id="header">
                <div class="container">
                    <div class="row">
                            <?php print render($page['sticky_header']); ?>
                    </div>
                </div>
            </div>
			
        </div>
        <!-- header end-->
		
	<?php if($messages || $page['help']): ?>
	<div id="system-messages-wrapper" class="notify-wrapper">
	 <div class="container">
			<div class="row">
	<?php print $messages . render($page['help']); ?> 
	</div>
		</div>
			</div>
	<?php endif; ?>
	
<!--
<div id="page-title-wrapper">
	<div class="container">
		<div class="row">
			<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
			<a id="main-content"></a>
			<?php print render($title_prefix); ?>
			<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
			<?php print render($title_suffix); ?>
			<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
		</div>
	</div>
</div>	-->
		
<!-- main wrapper strat -->
<div id="main-wrapper"><div class="container"><div class="row">
		<!--Page left content Start -->
	<?php if ($page_content_left = render($page['page_content_left'])): ?>
            <div id="page-left-first-wrapper" class="col-md-3">
              <div class="page-content-left">
			  <?php 
				print $page_content_left; ?>
			 </div>
            </div>
	 <?php endif; ?>
        <!-- Page left content End -->
		
		<!-- Page content start -->	
		<?php if ($page_content_left = render($page['page_content_left']) || $page_content_right = render($page['page_content_right'])): ?>
		<div id="page-left-wrapper" class="col-md-9">
		<?php else: ?>
		<div id="page-left-wrapper" class="col-md-12">
		 <?php endif; ?>
		 
		<?php if ($page['content']): ?>
		
		<div id="page-title-wrapper">
	<div class="container">
		<div class="row">
			<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
			<a id="main-content"></a>
			<?php print render($title_prefix); ?>
			<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
			<?php print render($title_suffix); ?>
			<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
		</div>
	</div>
</div>	
		<div id="main-content-wrapper">
		<div class="main-content">
			<?php print render($page['content']); ?>
		</div> 
			</div> 
		<?php endif; ?>
		
			</div> 
	<!-- Page content end -->
				
	<!--Page right content Start -->
	<?php if ($page_content_right = render($page['page_content_right'])): ?>
            <div id="page-right-wrapper" class="col-md-3">
              <div class="page-content-right">
			  <?php 
				print $page_content_right; ?>
			 </div>
            </div>
	 <?php endif; ?>
        <!-- Page right content End -->
<a title="back to top" class="btn-btt scrollToTop" href="#" style="display: none;">back to top</a>				
</div></div></div>	
 <!-- main wrapper end -->
 
	<?php if($footer = render($page['footer'])): ?>		
        <!-- Footer strat-->
            <div id="footer-wrapper" class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-content col-md-12">
                            <?php print $footer; ?>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Footer end -->
	<?php endif; ?>
	
    </div> <!-- /#page-front-wrapper, /#page-wrapper -->