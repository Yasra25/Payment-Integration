<!doctype html>
<html>
<head>
<title>Donation Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<style>
    input[type=submit] {
  background-color: #831A2B;
  box-shadow: inset 0 0 0 2px #666666;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;}
</style>
<body>
<div class="container">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading" class="single_input wow fadeInUp" data-wow-duration="1s">
            
                <h3 class="text-center">Donation Form </h3>
            </div>
            <div class="panel-body">
            <form action="payment.php" method="post">
                <div class="form-group" >
                    <input type="text" class="form-control"  name="Name" size="20" maxlength="20" autocomplete="off" tabindex="1" placeholder="Your Name" required>
                </div>
                
                <div class="form-group">
                    <input type="Email" class="form-control"  name="Email" maxlength="25" size="12"  autocomplete="off" tabindex="3" placeholder="Email" required >
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="phone" autocomplete="off" tabindex="5"  placeholder="Phone Number" required>
                </div>
               
                <div class="form-group">
                    <input type="number" class="form-control" name="Amount" autocomplete="off" tabindex="5"  placeholder="Amount" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="CheckOut" class="btn btn-success btn-lg">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>