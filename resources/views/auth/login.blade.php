<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Web Galeri Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #0066cc; /* Warna latar belakang biru */
      }

      .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      }

      .card-body {
        padding: 3rem;
      }

      .form-label {
        font-weight: 500;
        color: #495057;
      }

      .form-control {
        border-radius: 8px;
        padding: 10px 15px;
      }

      .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(0, 102, 204, 0.25);
        border-color: #0066cc;
      }

      .btn-primary {
        background-color: #ffcc00; /* Kuning */
        border-color: #ffcc00;
        padding: 10px 30px;
        border-radius: 25px;
        font-weight: 500;
        width: 100%;
        transition: all 0.3s ease;
      }

      .btn-primary:hover {
        background-color: #e6b800;
        border-color: #e6b800;
        transform: translateY(-2px);
      }

      .alert {
        border-radius: 10px;
      }

      .input-group-text {
        background-color: #f8f9fa;
      }

      .form-check-label {
        color: #495057;
        font-weight: 500;
      }

      .text-primary {
        color: #ffcc00 !important;
      }

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }
    </style>
  </head>

  <body>  
    <div class="container">
      <div class="w-50 mx-auto">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center mb-4 text-primary">Login</h3>

            <!-- Displaying error message if exists -->
            @if (session('error'))
              <div class="alert alert-danger fade show" role="alert">
                {{ session('error') }}
              </div>
            @endif

            <!-- Login Form -->
            <form action="/login" method="post">
              @csrf

              <!-- Email Input -->
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>

              <!-- Password Input -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <!-- Remember me Checkbox (optional) -->
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn btn-primary d-block mx-auto mt-4">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
