<?php
// Initialize the session


$business_id= $_GET['business_id'];


require_once "con_auth.php";

// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $link->prepare('SELECT business_name, business_category, business_email, bwh_start, bwh_end, business_website, business_address, business_phone FROM businesses WHERE business_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $business_id);
$stmt->execute();
$stmt->bind_result($business_name, $business_category, $business_email, $bwh_start, $bwh_end, $business_website, $business_address, $business_phone);
$stmt->fetch();
$stmt->close();
?>
<!doctype html>
<html lang="en">
<?php include 'head.php';?>
<style>
</style>
  <body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
          <li><a href=".php" class="nav-link px-2 text-white">Booking</a></li>
          <li><a href="status.php" class="nav-link px-2 text-white">Appointment Check</a></li>
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-success">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/u.png" alt="" width="128" height="128">
      <h2>New Booking</h2>
      <p class="lead">Please fill your details or log-in to your account</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Business Details</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Business Name</h6>
              <small class="text-muted"><?=$business_name?></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Business Category</h6>
              <small class="text-muted"><?=$business_category?></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Business Working Hours</h6>
              <small class="text-muted"><?=$bwh_start?> until <?=$bwh_end?></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Business Address</h6>
              <small class="text-muted"><?=$business_address?></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Business Website</h6>
              <small class="text-muted"><a href="<?=$business_website?>"><?=$business_website?></a></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Business Email</h6>
              <small class="text-muted"><a href="mailto:<?=$business_email?>"><?=$business_email?></a></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Business Phone</h6>
              <small class="text-muted"><a href="tel:<?=$business_phone?>"><?=$business_phone?></a></small>
            </div>
          </li>
        </ul>

        
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Personal Details</h4>
        <form form method="POST" action="book_spot.php">
          <div class="row g-3">
            <div class="col-12">
              <label for="guest_fullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" name="guest_fullname" placeholder="eg. Anna Annoulidi" value="" required>
            </div>


            <div class="col-12">
              <label for="guest_email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="guest_email" placeholder="myemail@email.com" required>
                    
            </div>

            <div class="col-12">
              <label for="guest_phone" class="form-label">Phone Number <span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" name="guest_phone" placeholder="+30 69XXXXXXXX">
                    
            </div>
            

            <div class="col-md-5">
              <label for="rantevou_date" class="form-label">Select Date</label>
              <input type="date" class="form-control" name="rantevou_date">
                </div>

            <div class="col-md-4">
              <label for="rantevou_hour" class="form-label">Select Hour</label>
              <input type="time" class="form-control" name="rantevou_hour">
            </div>

            <div class="col-12">
              <label for="rantebou_timing" class="form-label">Time Duration</label>
                <select class="form-select" name="rantebou_timing">
                    <option value="15">15 minutes</option>
                     <option value="30">30 minutes</option>
                     <option value="45">45 minutes</option>
                    <option value="60">60 minutes (1 hour)</option>
                </select>

                    
            </div>

            <div class="col-12">
              <label for="rantebou_comments" class="form-label">Comments <span class="text-muted">(Optional)</span></label>
                <textarea class="form-control" name="rantebou_comments"></textarea>
                    
            </div>
            <input type="hidden" class="form-control" name="business_id" value="<?php echo $username ?>">
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit" name="book_spot">Request Booking for approval</button><br><br>
        </form>

    
      </div>
    </div>
  </main>
</div>