<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
<div class="nav-side-menu">
    <div class="brand"></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="#">
                    <i class="fa fa-home fa-lg" aria-hidden="true"></i> Home
                </a>
            </li>
            <li class=" active">
                <a href="#">
                    <i class="fa fa-globe fa-lg" aria-hidden="true"></i> Projects
                </a>
            </li>
           
            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-users fa-lg" aria-hidden="true"></i> Services <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="service">
                <li>New Service 1</li>
                <li>New Service 2</li>
                <li>New Service 3</li>
            </ul>
            
            <li>
                <a href="#">
                    <i class="fa fa-info fa-lg" aria-hidden="true"></i> About Us
                </a>
            </li>
        </ul>
    </div>
</div>
</header>


<div class="container" id="main">
    <div class="row">
        <div class="col-md-12">
<!--
           <div class="jumbo-container">
            <div class="border-box">
               <div>
                  <h2>A BETTER PLACE</h2>                
               </div>
                
            </div>
            </div>
-->
      <div>
          <a href="#" role="button" class="btn btn-default">Our Misson</a>
      </div>
      <div>
           <a href="#" role="button" class="btn btn-default">Donate</a>
      </div>
        </div>
    </div>
</div>

<footer id="footer">
  <br><h1>San Francisco</h1>
 <p>123 Easy St<br>
San Francisco, CA 94104<br>
   415 555 0234</p>
</footer>



<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> 
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>        
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="js/script.js"></script>
<script src="https://use.fontawesome.com/6551ccbbd8.js"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

  
</script>


</body>
</html>