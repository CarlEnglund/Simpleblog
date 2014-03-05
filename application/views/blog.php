<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<head>
	<title>Blog</title>
	<link href="<?php echo base_url('assets/css/side-menu.css'); ?>" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/main.css'); ?>" type="text/css" rel="stylesheet" />
	<link href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css" type="text/css" rel="stylesheet" />


</head>
<body>
<div class="container">

	<div id="layout">
		<a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
   		 </a>

	    <div id="menu">
	        <div class="pure-menu pure-menu-open">
	            <a class="pure-menu-heading">Le blogg</a>
	            <ul>
	               	<li class="pure-menu-selected"><a href="<?php echo site_url('start/blog') ?>">Blog posts</a></li>
	               	<?php
	               	if($logged_in)
	               	{
						echo '<li class="pure-menu"><a href="' . site_url('start/index') .'">New post</a> </li>
								<li class="pure-menu"><a href="' . site_url('start/edit_posts') . '">Edit posts</a> </li>
			           		 </ul>
				            <ul>
				            	<li class "pure-menu"><a href="#">Edit user</a></li>
				            	<li class="pure-menu"><a href="' . site_url('admin/logout') .'">Log out</a></li>
				            </ul>'; 
				    }

	            	else
	            	{	
            			echo '<li class="pure-menu"><a href="' . site_url('admin/index') . '">Log in</a></li>';
            		}
	            	?>
	            </ul>
	        </div>
	    </div>
			
	    
    	<div id="main">
	        <div class="header">
	            <h1>Some nice posts</h1>
	            <h2>Trololol!</h2>
	        </div>

	        <div class="content">
	   			<div class="pure-g-r">
	   				<div class="pure-u-20-24">

						<?php
						   foreach($news as $data)
						   {
				            echo "<h1>" . $data['rubrik'] . "</h1>";
				            echo '<div class="pure-u-1-3 border">' .'Posted by ' . $userinfo[0]['fname'] . ' ' . $userinfo[0]['lname'] . '</div>';
				            echo '<div class="pure-u-1-3 border">'. $data['time'] . '</div>';
				            echo '<div class="pure-u-1-3"><img src="' . $picture . '" class="post-avatar "></div>';
				            echo '<p>';
				            echo '<pre class="text">'.  $data['text'] . '</pre>';
				            echo "</p>";
				            echo '<br>';
				        	}
						 ?>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</body>
</html>