<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">

            <style>
.carousel-bg .carousel-inner .item {
  background-color: darkslategrey;
  background-size: cover;
  background-position: center;
  min-height: 360px;
}


.slide{ 
  margin-top: 30px;
}
.details {
    margin: 50px 0; }
 .details h1 {
      font-size: 32px;
      text-align: center;
      margin-bottom: 3px; }
    .details .back-link {
      text-align: center; }
      .details .back-link a {
        display: inline-block;
        margin: 20px 0;
        padding: 15px 30px;
        background: #333;
        color: #fff;
        border-radius: 24px; }
        .details .back-link a svg {
          margin-right: 10px;
          vertical-align: text-top;
          display: inline-block; }
</style>

<div class="container">
        <div class="row">
          
            <div id="carousel-example-generic" class="carousel-bg carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active" style="background-image: url(images/5.jpg);">
                  <div class="carousel-caption">
                   <H1>BIG HALLS FOR WEDDING</H1> 
                   This hall is big enough having all adequate facilities that are required for the purpose of wedding ceremony situated inside Okada Hotel, Manila.
                  </div>
                </div>
                <div class="item" style="background-image: url(images/6.jpg);">
                  <div class="carousel-caption">
                  <H1>BIG HALLS FOR BIRTHDAY</H1> 
                  This hall is big enough having all adequate facilities that are required for the purpose of birthday celebration situated inside Okada Hotel, Manila.
                  </div>
                </div>
                <div class="item" style="background-image: url(images/6.jpg);">
                  <div class="carousel-caption">
                  <H1>BIG HALLS FOR HOSTING EVENTS</H1> 
                  This hall is big enough having all adequate facilities that are required for the purpose of birthday celebration situated inside Okada Hotel, Manila.
                  </div>
                </div>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>     
    
    
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 4 grid column-->
                            <img src="images/5.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">PRIVATE DINING ROOM THE ROCKS</h4><!--modal title-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                          <br>
                            <h1 class="title">Big Halls for Wedding</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Best to make celebrations like wedding
                            </p>
                            <p class="definition"><!--content body-->
                            This hall is big enough having all adequate facilities that are required for the purpose of wedding ceremony situated inside Radisson Blu hotel,Haridwar.
                            </p>

                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 4 grid column-->
                            <img src="images/6.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">PRIVATE DINING ROOM THE ROCKS</h4><!--modal title-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                          <br>
                            <h1 class="title">Big Halls for Birthday Celebration</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Best to make celebrations of Birthday Parties.
                            </p>
                            <p class="definition"><!--content body-->
                           This hall is big enough having all adequate facilities that are required for the purpose of birthday celebration situated inside Radisson Blu hotel,Haridwar.
                            </p>

                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 4 grid column-->
                            <img src="images/5.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">PRIVATE DINING ROOM THE ROCKS</h4><!--modal title-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                          <br>
                            <h1 class="title">Big Halls for hosting events</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                              Best for hosting large scale events.
                            </p>
                            <p class="definition"><!--content body-->
                           This hall is big enough having all adequate facilities that are required for the purpose of birthday celebration situated inside Radisson Blu hotel,Haridwar.
                            </p>

                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 4 grid column-->
                            <img src="images/5.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">PRIVATE DINING ROOM THE ROCKS</h4><!--modal title-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                          <br>
                            <h1 class="title">Big Halls for Meetings</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Best for to meetings
                            </p>
                            <p class="definition"><!--content body-->
                              This location is best for making meetings with your all employees.
                            </p>

                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
