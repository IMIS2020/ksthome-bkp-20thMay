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

   </style>
   <div class="container">
      <div class="col-md-10 m-auto">
         <div style="background-color:#702e2e; color:#fff; padding-top:10px; padding-bottom:10px; text-align:center">
          <h1> I-MIS-APP </h1>
          </div>
        
          <div class="col-xl-10 m-auto">
            <div class="card-body card-adjust bg-white pb-4">
            <h5 style=" font-size:20px;
             font-style:bold;margin-left:20px;">Hello ! 
            </h5>
              <p style=" margin-left:30px; font-size:20px;
              font-style:italic;">Your One Time Password for registration is : </p><br>
            
             <h2 style="color:#702e2e; font-size:35px; text-align:center; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >{{$code}}</h2><br>
               <p style=" font-size:20px;
               font-style:italic; margin-left:30px;">if you did not registered no further action required</p>
               
             <h5 style=" font-size:20px;
             font-style:bold;margin-left:5px;">Regards, <br>
             Team I-MIS</h5>
          </div>
         </div>
      </div>
    </div>
  </body>
  </html>