<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SriLankan Key</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> <!--    bootstrap stylesheet-->

    <link rel="stylesheet" href="css/styles.css"> <!--    local stylesheet-->
    
<!--    <link rel="stylesheet" href="css/jquery-ui.min.css">-->
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!--    jquery ui stylesheet-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.css" />
<!--    lightbox css-->
    

  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lora">
<!--google fonts-->

  
</head>

<body>
<!--<body data-spy="scroll" data-target=".navbar-inverse" >-->

<header>
<nav class="navbar navbar-inverse"  role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

              <a class="navbar-brand" href="index.php">
                  
<!--
                          <span>SriLanka Key 
                          </span>
-->

                          <span><img src="images/logo_dark_grey.jpg" class="icon img img-responsive center-block">
                          </span>SriLankan Key
                          
                          
                      
              </a>
           
<!--           <a class="navbar-brand" href="#featured">Wisdom <span class="subhead">Pet Medicine</span></a>-->
            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav  navbar-right">
                   <?php
                    
                    // array of labels and pages
                    $pages= array
                    (
                        'Home'=>'index.php',
                        'Articles & News'=>'articles.php',
                        'Projects'=>'#',
                        'SLKey Magazine'=>'magazine.php',
                        'About Us'=>'about.php',
                        'Contact Us'=>'contact.php'
                    );
                    
//                    The page that's being viewed
                    $this_page=basename($_SERVER['PHP_SELF']);
                    
//                    Create each menu item
                    foreach ($pages as $k=>$v)
                    {
                     echo '<li';
                        
                     if ($v=='articles.php')
                     {
                       if ($this_page=='article.php')
                        {
                           echo ' class="active"'; 
                        }  
                     }
                        
                     if ($v=='#')
                     {
                       if ($this_page=='treeandmind.php' || $this_page=='crimeandsociety.php')
                        {
                           echo ' class="active"'; 
                        }  
                     }    
                        
                     if ($this_page==$v)
                     {
                        echo ' class="active"'; 
                     }
                        
                     if ($v=='#')
                        {
                          echo '><a href="'.$v.'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$k.'<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="treeandmind.php">Tree & Mind</a></li>
                                <li><a href="crimeandsociety.php">Crime & Society</a></li>         <li><a href="artandharmony.php">Art & Harmony</a></li>        
                            </ul>
                          </li>';
                        }
                      else
                        {
                          echo '><a href="'.$v.'">'.$k.'</a>
                           
                          </li>';  
                        }
                        
                    }
                    
                    
                    ?>
                   
<!--
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="articles.php">Articles & News</a></li>
                    <li><a href="#">Tree & Mind</a></li>
                    <li><a href="magazine.php">SLKey Magazine</a></li>
                   <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
-->
                    
                    
                </ul>
            </div>
            <!-- collapse navbar-collapse -->
        </div>
        <!-- container -->
    </nav>
</header>

<section id="content">   
   <div class="content container">