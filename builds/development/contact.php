<?php
include('includes/header.inc.php'); 
?>
           <div class="row">
            <section class="col-xs-12">
                
                <!-- Form Name -->
                <legend>Contact Us</legend>

                <form class="well form-horizontal">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="inputName" placeholder="Name">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" id="inputEmail" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="selectSite" class="col-sm-2 control-label">Site</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="selectSite">
                                <option>Choose...</option>
                                <option>bla</option>
                                <option>bla 1</option>
                                <option>bla 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <div class="checkbox">

                                <label>
                                    <input id="inputAddList" type="checkbox">Add me to e-mail blast
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputComments" class="col-sm-2 control-label">Comments</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputComments"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="submit" class="btn btn-default" value="submit">
                        </div>
                    </div>
                </form>


            </section>
            
            <section class="col-xs-6">
                <div id="map"></div>                
            </section>
            <section id="address">
                <div class="jumbotron">
                   <div>
                    <h3>
                        LankayKey International
                    </h3>
                    <h4>363</h4>
                    <h4>Udugama, Ampitiya Road</h4>
                    <h4>Kandy</h4>
                    <br><br>
                    <h4>Telephone : 0812213542</h4>
                    <h4>Mobile : 077652374</h4>
                    <h4>Email : lankaykey@gmail.com</h4>
                    </div>     
                </div>
            </section>
        </div>
        <!-- row -->
        
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
        
<?php
include('includes/footer.inc.php'); 
?>