<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require_once 'classes/Connection.php';
        require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php';
        //check for submit
        if(filter_has_var(INPUT_POST,'submit')){
          $title = $_POST['title'];
          $message = $_POST['message'];
          //check required fields
          if(!empty($message) && !empty($title)){
              $qry = "insert into contact(title,message) values('$title','$message')";
              mysqli_query($conn,$qry);
              echo "<script>window.alert('Your message has been sent.!');</script>";
          }else{
            echo "<script>window.alert('Please fill all the fields!');</script>";
          }
        }
        ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Me</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="container">
                <div class="col-md-6 contacts"><center>
                    <h1><span> <img src="images/pic1.jpg" class="img-responsive" width="150" height="50"></span> Jec Robante</h1>
                    <p>
<span class="glyphicon glyphicon-envelope"></span> Email: jecrobante@gmail.com<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: (+63)9123456789
                    </p>
                    <img src="images/map.png" class="img-responsive" width="500" height="200">
                    </center>
                </div>
                <div class="col-md-6">
                    <form method="post">
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control" placeholder="Type your Title here" >
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="15" name="message" class="form-control" placeholder="Type your concern here"></textarea>
                        </div>
                        <button type="submit"  name="submit" class="btn btn-default pull-right">Send</button>
                    </form>
                </div>
            </div>
            


        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
