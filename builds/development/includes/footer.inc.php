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
    <section class="col-xs-4 align_content_vertical" id="footer_logo">
        <img src="images/logo.jpg" alt="" class="icon img img-responsive center-block">
    </section>
    <section class="col-xs-4 align_content_vertical" id="footer_address">
             
            <div class="row">
                <h4><strong>GET IN TOUCH</strong></h4>
                <div class="col-xs-1">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="col-xs-11">
                    <p>*** , ******* , ******** ****, *****,</p>
                </div>
                <div class="col-xs-11 col-xs-offset-1">
                     &nbsp;*** *****
                </div>

                <div class="col-xs-1">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="col-xs-11">
                    <p>+** ** *******</p>
                </div>

                <div class="col-xs-1">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="col-xs-11">
                    <p>lankakey4u@gmail.com</p>
                </div>
            </div>
        
    </section>
    <section class="col-xs-4 align_content_vertical" id="footer_copyright">
                
            <div class="row" >               
                    <div class="col-xs-12" >
                        <h3><a href="/includes/SriLankanKey_RegistrationForm.docx" download>Download Registration Form</a></h3>
                        <p>&copy;2017 As One Project. Nonprofit website by Miraj Web Studio. Fundraising software by Manulak CRM.</p>
                        <p>Miraj Web Studio</p>
                        <p>Manulak CRM</p>  
                    </div >                
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
<!--form validator plugin-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script>
<!--lightbox js-->

<script type="text/javascript" src="../js/jquery.canvasjs.min.js"></script>
<!--script for making graphs-->

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
    
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});    
</script>
<script>    
      function initMap() {
        var lankakey = {lat: 6.9173338, lng: 79.8646357};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: lankakey
        });
        var marker = new google.maps.Marker({
          position: lankakey,
          map: map
        });
      }

</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIZ5v6KMEcNbRHblM4pmHrvuHyLjWdB_Q&callback=initMap">
</script>




</body>
</html>