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

<body class="text-center">
<div class="row justify-content-center">
    <div class="col-lg-4">
      @if (session()->has('successs'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        <main class="form-registration">
          <form action="/register" method="post">
            @csrf
            <img class="mb-1" src="images/logo-itk.png" alt="" >
            <h1 class="h3 mb-3 fw-normal">SIPENSI ITK</h1>
            <div class="form-floating">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
              <label for="name">Name</label>
              @error('name')  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="nim" required value="{{ old('nim') }}">
              <label for="nim">NIM</label>
              @error('nim')  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
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
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Register</button>
          </form>
          <small class="d-block text-center">Already registered?<a href="/login">Login Now!</a> </small>
        </main>
    </div>
</div>


    
</body>

</html>