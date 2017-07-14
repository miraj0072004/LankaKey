    </div>
    <!-- content container -->    
</section>
 <footer id="footer">
<!--
  <br><h1>San Francisco</h1>
 <p>123 Easy St<br>
San Francisco, CA 94104<br>
   415 555 0234</p>
-->
<div class="container">
<div class="row row-eq-height">
    <section class="col-xs-4" id="footer_logo">
        <img src="images/logo.jpg" alt="" class="icon img img-responsive center-block">
    </section>
    <section class="col-xs-4" id="footer_address">
        
        
        <div class="row">
        <h4><strong>CONTACT US</strong></h4>
        <div class="col-xs-1"><i class="fa fa-home" aria-hidden="true"></i></div>
        <div class="col-xs-11"><p>363 , Udagama , Ampitiya Road, Kandy,</p></div>
        
        <div class="col-xs-11 col-xs-offset-1"><p>Sri Lanka</p></div>
        
        <div class="col-xs-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
        <div class="col-xs-11"><p>+94 81 2213242</p></div>
       
        <div class="col-xs-1"><i class="fa fa-envelope" aria-hidden="true"></i></div>
        <div class="col-xs-11"><p>info@lankakey.org</p></div>
        
        
        
        </div>
<!--
        <ul style="list-style: none;">
            <li>
                363 , Udagama , Ampitiya Road, Kandy, Sri Lanka
            </li>
            <li>
                <i class="fa fa-phone" aria-hidden="true"> +94 81 2213242</i> 
            </li>
            <li>
                <i class="fa fa-envelope-o" aria-hidden="true">info@lankakey.org</i>
            </li>
        </ul>
-->
       

    </section>
    <section class="col-xs-4" id="footer_copyright">        
        <div class="row">
           <div>
            <div class="col-xs-12" >
                <p>&copy;2017 As One Project. Nonprofit website by Miraj Web Studio. Fundraising software by MirajCRM.</p>
                <p>Miraj Web Studio</p>
                <p>Miraj CRM</p>  
            </div > 
            </div>
        </div>
    </section>
</div>
</div>
</footer>



<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script> <!-- jquery cdn-->

<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous">
</script><!-- jquery ui cdn-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script><!--bootstrap js cdn-->


<script src="js/script.js"></script> <!--local js-->

<script src="https://use.fontawesome.com/6551ccbbd8.js"></script> <!--fontawesome js-->



<!-- Misc scripts -->
<script>

 
$(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    }); //carousel functionality

    $("#about_accordion").accordion(
    {
      heightStyle: "content"
    }
    ); //    accordian functionality
});
</script>




</body>
</html>