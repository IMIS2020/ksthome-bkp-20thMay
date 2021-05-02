<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

   <div class="container">
      <div class="col-md-10 m-auto">
         <!-- <div style="background-color:#702e2e; color:#fff; padding-top:10px; padding-bottom:10px; text-align:center">
          <h1> I-MIS-APP </h1>
          </div>
         -->
         <img src="{{asset('assets/img/mail-image.png')}}" alt="">
          <div class="col-xl-10 m-auto">
            <div class="card-body card-adjust bg-white pb-4">
            <h5 style=" font-size:20px;
             font-style:bold;margin-left:30px;">Dear Admin,
            </h5>
              <p style="margin-left:30px; font-size:20px;
              ">Here is your  One Time Password (OTP).<br>
              Kindly use the following 6 Digit OTP (One Time Password) to verify your identity in the reset password screen.
              </p>

              <!-- <p style=" margin-left:30px; font-size:20px;
             ">
              </p> -->
            
             <h2 style="color:#702e2e; margin-left:30px; font-size:20px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >OTP : {{$code}}</h2>


             <h5 style=" font-size:20px;
             font-style:bold;margin-left:30px;">Thank you, <br>
             Team S-ILF</h5>
          </div>
         </div>
      </div>
    </div>
  </body>
  </html>