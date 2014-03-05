<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My personal blog">
    <meta name="author" content="Carl Englund">
    <title>Signin Page</title>

    
    <link href="<?php echo base_url('assets/css/side-menu.css'); ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/main.css'); ?>" type="text/css" rel="stylesheet" />
    <link href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css" type="text/css" rel="stylesheet" />

  </head>

  <body>

    <div id="menu">
          <div class="pure-menu pure-menu-open">
              <a class="pure-menu-heading">Le blogg</a>
              <ul>
                  <li class="pure-menu"><a href="<?php echo site_url('start/blog') ?>">Blog posts</a></li>
              </ul>
              <ul>
                <li class="pure-menu-selected"><a href="<?php echo site_url('admin/logout') ?>">Log in</a></li>
             </ul>
          </div>
    </div>
      

    <div id="main">
      <div class="header">
          <h1>Please login</h1>
          <h2>If you're logged in you can write blogposts</h2>
      </div>

      <div class="content">
        <div class="pure-g-r">
         <div class="pure-u-20-24">

           <form name="input" class="pure-form pure-form-stacked" action="<?php echo site_url('admin/validate') ?>" method="post">
              <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <input type="Submit" value="Sign in" class="pure-button pure-button-primary"></input>
            </form>

          </div>
        </div> 
      </div> 
    </div> 
  </body>
</html>
