<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> <!--    bootstrap stylesheet-->

    <link rel="stylesheet" href="css/styles.css"> <!--    local stylesheet-->
    
<!--    <link rel="stylesheet" href="css/jquery-ui.min.css">-->
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!--    jquery ui stylesheet-->
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <!--    data tables stylesheet-->
    

    

  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lora">
<!--google fonts-->

  
</head>

<body>

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

              <a class="navbar-brand" href="view_page.php">
                  


                        SriLanka Key Administration
                          
                          
                      
              </a>
           

            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav  navbar-right">
                   <?php
                    
                    // array of labels and pages
                    $pages= array
                    (
                        'Add Page'=>'add_page.php',
                        'Pages'=>'view_page.php'

                    );
                    
//                    The page that's being viewed
                    $this_page=basename($_SERVER['PHP_SELF']);
                    
//                    Create each menu item
                    foreach ($pages as $k=>$v)
                    {
                     echo '<li';
                        

                        
                     if ($this_page==$v)
                     {
                        echo ' class="active"'; 
                     }
                        echo '><a href="'.$v.'">'.$k.'</a></li>';
                    }
                    
                    
                    ?>
                   

                    
                    
                </ul>
            </div>
            <!-- collapse navbar-collapse -->
        </div>
        <!-- container -->
    </nav>
</header>

<section id="content">   
   <div class="content container">