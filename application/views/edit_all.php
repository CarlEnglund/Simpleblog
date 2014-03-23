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
					<li class="pure-menu"><a href="<?php echo site_url('start/index') ?>">New post</a> </li>
					<li class="pure-menu-selected"><a href="#">Edit posts</a> </li>
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
	   				<div class="pure-u-20-24">
	   					<table class="pure-table">
						    <thead>
						        <tr>
						            <th>Postid</th>
						            <th>Heading</th>
						            <th>Date</th>
						            <th>Edit</th>
						            <th>Delete</th>
						        </tr>
						    </thead>
						    <?php  
						    foreach($return as $data){
						    echo '<tbody>
						        <tr>
						            <td>' . $data['pid'] . '</td>
						            <td>' . $data['rubrik'] . '</td>
						            <td>' . $data['time'] . '</td>  
						            <td><a href="retrieve_post/'. urlencode($data['pid']) . '"><button type="submit" class="pure-button pure-button-primary">Edit post</button></a><br>
						            <td><a href="delete_post/'. urlencode($data['pid']) . '"><button type="submit" class="button-error pure-button" id="confirm">Delete post</button></a><br>   
						        </tr>';
						    }
						     ?>
						 </thead>
						
					</div>
					 <?php 
						 	if(defined($message) && $message == true)
								echo '<div class="alert alert-warning alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Post updated!</strong>';
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
<script src="<?php echo base_url('assets/js/ui.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>
</html>