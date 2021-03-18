<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment Gateway integration</title>
    <style>
              body{
  		background-image:url("image/2.jpg");
  		background-position: up;
  		background-repeat: no-repeat;
  		background-size: 100%;
  	}

</style>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>
  <link rel="stylesheet" href="css/modal.css">
  <body >
  <div class="container">
    <div class="row">
      <div class="col align-self-start">
        <p></p>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="row">
        <div class="col align-self-start">
          <p></p>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation" style="padding-right:30px;">
              <a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
            </li>
            <li class="nav-item" role="presentation" style="padding-right:30px;">
              <a href="contact.php"><button type="button" class="btn btn-outline-light">Contact us</button></a>
              <p></p>
            </li>
          </ul>

      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <p></p>
        <div class="position-relative">
          <div class="position-absolute top-100 start-50 translate-middle-x">
            <div class="w-auto p-3" style="">
              <figure class="text-center">
                <blockquote class="blockquote">
                  <center><h1><p class="text-white"><em>Helping hands makes world a better place</em></p></center>
                </blockquote>
              </figure>
              <figure class="text-center">
                <p> </p>
              </figure>
              <figure class="text-bottom">
                <p class="text-white" id="e"><em>Our approach is rooted in years of on-the-ground experience,
									driven by a careful methodology and powered by a deep passion
									to improve the lives of children and give them a chance to grow
									up in a family.</em></p>
              </figure>
                 <figure class="text-center">
                   <div class="center">
                     <button type="button" class="btn btn-outline-light" data-toggle="modal fade" data-target="#exampleModalCenter" id="b">Donate</button>
                   </div>
                </figure>
            </div>
          </div>
        </div>
      </div>
  </div>
<img src="" alt="">
  <!--first modal -->
  <div class="bg-modal">
    <div class="modal-content">
      <div class="close">+</div>
      <p> </p>
      <p><img src="image/user.jpg" alt="" width="100px" height="100px"></p>
      <p><em>We make a living by what we get, But we make a life by what we give.</em></p>
    <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_GnnbPVMI5v2UyZ" async> </script> </form>
    </div>
  </div>
</div>
</div>

  <script type="text/javascript">
  <!--first modal -->

  document.getElementById('b').addEventListener('click',
  function(){
    document.querySelector('.bg-modal').style.display='flex';

  });
  document.querySelector('.close').addEventListener('click',
  function(){
    document.querySelector('.bg-modal').style.display='none';
  })

</script>

  </body>
</html>
