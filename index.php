<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event Management System</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">

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
                <div class="item active" style="background-image: url(images/11.jpg);">
                  <div class="carousel-caption">
                   <H1>WEDDING</H1> 
                  A wedding is a ceremony where two people are united in a marriage. Wedding traditions and customs vary greatly between cultures, ethnic groups, religions, countries, and social classes. Most wedding ceremonies involve an exchange of marriage vows by the couple,
                  </div>
                </div>
                <div class="item" style="background-image: url(images/2.jpg);">
                  <div class="carousel-caption">
                  <H1>BIRTHDAY</H1> 
                  "Golden Birthday” is when your age and date of birth are the same. “Birthday Paradox” is the likelihood that out of 23 people, there is a 50/50 chance that two of them will have the same birthday.
                  </div>
                </div>
                <div class="item" style="background-image: url(images/3.jpg);">
                  <div class="carousel-caption">
                  <H1>HOSTING EVENTS</H1> 
                  If a hotel or organization hosts an event, it provides the facilities for the event to take place. Throughout the year, the hotel hosts special events. Events can be hosted in the hotel's conference rooms. The hotel can host events such as your wedding ceremony and evening reception.
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

                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What we are organising!</h1><!--body content title-->
                </div>
            </div>
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            <div class="row"><!--wedding content-->
                <section>
                    <div class="container">
                        <div class="col-md-12"><!--image holder with 6 grid columns-->
                            <img src="images/1.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-12"><!--Text holder with 6 column grid-->
                          <br>
                            <h1>Weddings</h1><!--title-->
                            <p><!--content-->
                            A wedding is a ceremony where two people are united in a marriage. Wedding traditions and customs vary greatly between cultures, ethnic groups, religions, countries, and social classes. Most wedding ceremonies involve an exchange of marriage vows by the couple,
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

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-12"><!--image holder with 6 grid columns-->
                            <img src="images/2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-12"><!--Text holder with 6 column grid-->
                          <br>
                            <h1>Birthday</h1><!--title-->
                            <p><!--content-->
                          Golden Birthday” is when your age and date of birth are the same. “Birthday Paradox” is the likelihood that out of 23 people, there is a 50/50 chance that two of them will have the same birthday.
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

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-12"><!--image holder with 6 grid columns-->
                            <img src="images/3.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-12"><!--Text holder with 6 column grid-->
                          <br>
                            <h1>Hosting Events</h1><!--title-->
                            <p><!--content-->
                          If a hotel or organization hosts an event, it provides the facilities for the event to take place. Throughout the year, the hotel hosts special events. Events can be hosted in the hotel's conference rooms. The hotel can host events such as your wedding ceremony and evening reception.
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

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-12"><!--image holder with 6 grid columns-->
                            <img src="images/4.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-12"><!--Text holder with 6 column grid-->
                          <br>
                            <h1>Meeting</h1><!--title-->
                            <p><!--content-->
                            A meeting is a gathering of two or more people that has been convened for the purpose of achieving a common goal through verbal interaction, such as sharing information or reaching agreement. We make everything perfect to make your meetings successful.
                            </p>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
