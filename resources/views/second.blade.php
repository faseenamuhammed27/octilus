<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!-- Title -->
      <title>Project</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Meta description -->
     
      <!-- CSS -->
      <link href="dist/css/main.css" rel="stylesheet" type="text/css">
      <!-- Favicon -->
      <!-- <link rel="icon" type="image/png" href="dist/img/favicon.ico"> -->
   </head>
    
    <!-- body start -->
   <body>
      <header>
         <div class="container"> 
            <div class="row">
               <div class="col-lg-12 col-12 text-center">
                  <img src="dist/img/logo.png" alt="">
               </div>
            </div>
         </div>
      </header>

      <section class="bnrsection">
         <!-- <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 p-0">
                  <img src="dist/img/bnr.jpg" alt="">
               </div>
            </div>
         </div> -->
         <div class="container">
            <div class="row">
               <div class="offset-lg-1 col-lg-10 col-md-12 col-12 text-center">
                  <h1>Hi <span>{First Name}</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
               </div>
               <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-12 text-center">
                  <div class="formpart">
                  <form action="/address" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="fname" value="{{$name}}">
                        <div id="slide03" style="display: block;">
                           <h3>Do you have a Previous Address?</h3>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label next02" for="flexRadioDefault1">
                              Yes
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label thirdid" for="flexRadioDefault2">
                              No
                            </label>
                          </div>
                        </div>
                        
                        
                        
                        
                        <div id="slide04" style="display:none;">
                           <h3>Enter your Previous Address</h3>
                            <div class="mb-3 text-start">
                                <label class="form-label">Previous Address 1</label>
                                <input type="text" class="form-control mb-3" id="" placeholder="Address line 1" name="add11">
                                <input type="text" class="form-control mb-3" id="" placeholder="Address line 2" name="add12">
                                <input type="text" class="form-control mb-3" id="" placeholder="Address line 3" name="add13">
                            </div>
                           
                            <div class="mb-3 text-center" id="submitoradd01">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <p><a href="#postaddrs2" id="showadrs2">Add Another Address</a></p>
                                <p><a href="#postaddrs2" id="back02"><< Back</a></p>
                            </div> 


                            <div id="postaddrs2" style="display:none">
                                <div class="mb-3 text-start">
                                    <label for="" class="form-label">Previous Address 2</label>
                                    <input type="text" class="form-control mb-3" id="a21" placeholder="Address line 1"name="add21">
                                    <input type="text" class="form-control mb-3" id="a22" placeholder="Address line 2"name="add22">
                                    <input type="text" class="form-control mb-3" id="a23" placeholder="Address line 3"name="add23">
                                </div>
                            
                                <div class="mb-3 text-center" id="submitoradd02">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <p><a href="#postaddrs3" id="showadrs3">Add Another Address</a></p>
                                    <p><a href="#slide04" id="remov3">Remove Address</a></p>
                                </div> 
                            </div>


                            <div id="postaddrs3" style="display:none">
                                <div class="mb-3 text-start">
                                    <label for="" class="form-label">Previous Address 3</label>
                                    <input type="text" class="form-control mb-3" id="a31" placeholder="Address line 1"name="add31">
                                    <input type="text" class="form-control mb-3" id="a32" placeholder="Address line 2"name="add32">
                                    <input type="text" class="form-control mb-3" id="a33" placeholder="Address line 3"name="add33">
                                </div>
    
                                <div class="mb-3 text-center">
                                     <input type="submit" value="Submit" class="btn btn-primary">
                                    <p><a href="#slide04" id="remov4">Remove Address</a></p>
                                </div> 
                            </div>


                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-12"> 
                  <h5>Lorem Ipsum is simply dummy text</h5>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                  <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  <p>Copyright@2022</p>
               </div>
            </div>
         </div>
      </footer>



   </body>
    <!--body end -->
    
</html>
      <script src="dist/js/app.js"></script>
      <script type="text/javascript">
        
        $(".thirdid").on('click', function() {
        window.location.href='/third'
        } );
       
        



    $("#remov3").on('click', function() {
     console.log("hiii"); 
        $("#submitoradd01").show();
        $("#postaddrs2").hide();
        document.getElementById('a21').value = "";
        document.getElementById('a22').value = "";
        document.getElementById('a23').value = "";
        
    });


     $("#remov4").on('click', function() {
      console.log("oooo"); 
        $("#submitoradd02").show();
        $("#postaddrs3").hide();
         document.getElementById('a31').value = "";
        document.getElementById('a32').value = "";
        document.getElementById('a33').value = "";
    });

     
      </script>