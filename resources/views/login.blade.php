<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/log.css">

</head>

<body>
<div class="row justify-content-center">
    <div class="col-lg-4">
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

        <main class="form-signin">
          <form action="/login" method="post">
            @csrf
            <img class="rounded mx-auto d-block" src="images/logo-itk.png" alt="" >
            <h1 class="h3 mb-3 fw-normal text-center">SIPENSI ITK</h1>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password"class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')  
              <div class="d-inline invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
          <small class="d-block text-center">Not registered?<a href="/register">Register Now!</a> </small>
        </main>
    </div>
</div>


    
</body>

</html>