<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title>Bloggen</title>
	<link href="<?php echo base_url('assets/css/side-menu.css'); ?>" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/main.css'); ?>" type="text/css" rel="stylesheet" />
	<link href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css" type="text/css" rel="stylesheet" />
</head>


<body>
	<div id="layout">
		<a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
   		 </a>

	    <div id="menu">
	        <div class="pure-menu pure-menu-open">
	            <a class="pure-menu-heading">Le blogg</a>
	            <ul>
	               	<li class="pure-menu"><a href="<?php echo site_url('start/blog') ?>">Blog posts</a></li>
					<li class="pure-menu-selected"><a href="<?php echo site_url('start/index') ?>">New post</a> </li>
					<li class="pure-menu"><a href="<?php echo site_url('start/edit_posts') ?>">Edit posts</a> </li>
	            </ul>
	            <ul>
	            	<li class "pure-menu"><a href="#">Edit user</a></li>
	            	<li class="pure-menu"><a href="<?php echo site_url('admin/logout') ?>">Log out</a></li>
	           </ul>
	        </div>
	    </div>
			
	    
    	<div id="main">
	        <div class="header">
	            <h1>Make a blog post</h1>
	            <h2>Make it good!</h2>
	        </div>
	        	
	        <div class="content">
	   			<div class="pure-g-r">
	   				<div class="pure-u-1-1">
	   					<div class="l-box">
		   					<form name="input" class="pure-form pure-form-stacked" action="<?php echo site_url('admin/update_user/') ?>" method="post">
		   						<label>First name</label>
		   						<?php echo '<input type="text" name="fname" maxlength="40" required value="' . $userinfo[0]['fname'] . '"><br>
		   						<label>Last name</label>
		   						<input type="text" name="lname" maxlength="40" required value="' . $userinfo[0]['lname'] . '">'; ?>
		   						
		   						<input type="Submit" value="Submit" class="pure-button pure-button-primary">
		   					</form>
	   					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="<?php echo base_url('assets/js/ui.js'); ?>"></script>
</body>
</html>