  
  <!-- <label for="formFileMultiple" class="form-label">Proof of Vaccine Record</label>-->
  

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
       
      <title>Document</title>
  </head>
  <body>
      
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action=""class="mt-5">
                        <center><h4 class="mb-5">Register for NDDU VAX</h4></center>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                            </div>
    
                            <div class="mb-3 col-md-6">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                            </div>

                            <div class="mb-3">
                                <label>Email Address</label>
                                <input type="text" name="emailaddress" class="form-control" placeholder="Email Address">
                            </div>
                            
                            <div class="mb-3 col-md-6">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Confirm Password</label>
                                <input type="text" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                            </div>

                            <div class="mt-3">
                                <label class="form-label" for="ipt-birthday">Date of Birth</label>
                            </div>

                            <div class="mt-1">
                                <input type="date" id="birthday" name="birthday">
                            </div>
                            
                            <div class="mt-4">
                                <label for="formFileMultiple" class="form-label">Proof of Vaccination Records</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple />
                            </div>

                            <div class="mt-5 mb-3 col-md-7">
                                <button class="btn btn-primary float-end">Register</button>
                            </div>
                        </div>
                    </form>
                    <p class=text-center>If you have an account, Please <a href="{{url('/login-page')}}"> Log in</a></p>  
                </div>
            </div>
        </div>
    </div>

    <!--Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
  </body>
  </html>

    