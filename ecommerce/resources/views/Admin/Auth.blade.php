<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Sign In</title>
  <link rel="stylesheet" href="{{asset('/dist/css/Custom.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="text">Sign In</div>
    <form action="#">
      <div class="form-row">
        <div class="input-data">
          <input type="text" required>
          <div class="underline"></div>
          <label for="">Name</label>
        </div>
      </div>
      <div class="form-row">
        <div class="input-data">
          <input type="email" required>
          <div class="underline"></div>
          <label for="">Email Address</label>
        </div>
      </div>
      <div class="form-row">
        <div class="input-data">
          <input type="password" required>
          <div class="underline"></div>
          <label for="">Password</label>
          <div><i class="fa fa-eye-slash Password__showHide" aria-hidden="true"></i></div>
        </div>

      </div>
      <div class="form-row submit-btn submit__forget">
        <div class="input-data">
          <div class="inner"></div>
          <input type="submit" value="submit">submit</input>
        </div>
        <div class="ForgetPass">
          <a href="#">Forget Password?</a>
        </div>
      </div>

    </form>
  </div>
</body>

</html>