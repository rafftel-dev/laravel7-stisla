<form method="POST" action="#" class="needs-validation" novalidate="">
  <div class="form-group">
      <label for="email">Email</label>
      <input id="email" type="email" class="form-control" name="email" tabindex="1" required
          autofocus>
      <div class="invalid-feedback">
          Please fill in your email
      </div>
  </div>

  <div class="form-group">
      <div class="d-block">
          <label for="password" class="control-label">Password</label>
      </div>
      <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
      <div class="invalid-feedback">
          please fill in your password
      </div>
  </div>

  <div class="form-group">
      <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
              id="remember-me">
          <label class="custom-control-label" for="remember-me">Remember Me</label>
      </div>
  </div>

  <div class="form-group text-right">
      <a href="{{ route('password.request') }}" class="float-left mt-3">
          Forgot Password?
      </a>
      <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
          Login
      </button>
  </div>

  <div class="mt-5 text-center">
      Don't have an account? <a href="{{ route('register') }}">Create new one</a>
  </div>
</form>