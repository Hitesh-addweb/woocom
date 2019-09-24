<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="http://themes.webmasterdriver.net/loanshop/xmlrpc.php">
	<link rel="shortcut icon" href="http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/favicon.png" type="image/x-icon"><title>LoanShop &#8211; Loan Company &amp; Finance Advisor WordPress Theme</title>
	<meta name='robots' content='noindex,follow' />
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="LoanShop &raquo; Feed" href="http://themes.webmasterdriver.net/loanshop/feed/" />
	<link rel="alternate" type="application/rss+xml" title="LoanShop &raquo; Comments Feed" href="http://themes.webmasterdriver.net/loanshop/comments/feed/" />



	
<link rel='https://api.w.org/' href='http://themes.webmasterdriver.net/loanshop/wp-json/' /> 
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://themes.webmasterdriver.net/loanshop/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://themes.webmasterdriver.net/loanshop/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.2.2" />
<link rel="canonical" href="http://themes.webmasterdriver.net/loanshop/" />
<link rel='shortlink' href='http://themes.webmasterdriver.net/loanshop/' />
<link rel="alternate" type="application/json+oembed" href="http://themes.webmasterdriver.net/loanshop/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fthemes.webmasterdriver.net%2Floanshop%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://themes.webmasterdriver.net/loanshop/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fthemes.webmasterdriver.net%2Floanshop%2F&#038;format=xml" />

<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
	<header id="header">
		<div class="header_top secondary-bg">
			<?php

			if ( is_active_sidebar( 'header-widget' ) ) : ?>
				<div id="header-widget-area" class="hw-widget widget-area" role="complementary">
					<?php dynamic_sidebar( 'header-widget' ); ?>
				</div>

			<?php endif; ?>
			
		</div>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<div class="logo">
						<?php 
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						} ?>

							        </div>
								<button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
									<span class="sr-only">Toggle navigation</span> 
									<span class="icon-bar"></span> 
									<span class="icon-bar"></span> 
									<span class="icon-bar"></span> 
								</button>
							</div>
							<div class="collapse navbar-collapse" id="navigation">
								<?php 
								$args = array(
									'menu' => 'main',
									'container' => 'ul',
									'menu_class' => 'nav navbar-nav',
								);
								wp_nav_menu($args); ?>

							
							</nav>
						</header>

