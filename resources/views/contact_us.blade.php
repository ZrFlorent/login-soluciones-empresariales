<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/modal.css">

     <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modales {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
    </head>
    <body>
           
<!-- <button id="myBtn">Open Modal</button> -->

<input id="inp" type="text" name="" onkeyup="btnFun();">
<!-- The Modal -->
<div id="myModal" class="modales">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>
<br><br><br><br><br>
<br><br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
        modal </button>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal sideout normal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">                                   
                      <div class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card card-user">
                              <div class="card-header">
                                <h5 class="card-title">Contactanos</h5>
                              </div>
                              <div class="card-body">
                                <!-- @if(Session::has('success'))
                                    <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    </div>
                                @endif -->
                                
                                <form method="post" action="contact-us">
                                  {{csrf_field()}}
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label> Name </label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                    </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Email </label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                    </div>   
                                  <div class="col-md-12">
                                      <div class="form-group">
                                        <label> Phone Number </label>
                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number">
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label> Subject </label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                                        @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label> Message </label>
                                        <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="update ml-auto mr-auto">
                                      <button type="submit" class="btn btn-primary btn-round">Send</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>      
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary float-right">Save changes</button>
                </div>
            </div>
        </div>
    </div>
  </body>
  <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if (exist) {
      if(exist == 1){
            // Get the modal
              var modal = document.getElementById("myModal");

              // Get the button that opens the modal
              // var btn = document.getElementById("myBtn");

              // Get the <span> element that closes the modal
              var span = document.getElementsByClassName("close")[0];

              // When the user clicks the button, open the modal 
              //btn.onclick = function() {
                modal.style.display = "block";
              //}

              // When the user clicks on <span> (x), close the modal
              span.onclick = function() {
                modal.style.display = "none";
              }

              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }

          }

    }

  </script>
</html>

