<body>

<header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/basid"><img class="img-fluid w-100" src="./assets/img/basid-logo.png" alt="Basid Logo"></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/basid/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/basid/#features">App Features</a></li>
          <li><a class="nav-link scrollto" href="/basid/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/basid/#team">Team</a></li>
          <li><a class="nav-link scrollto" href="/basid/#faq">F.A.Q</a></li>
          <li><a class="nav-link scrollto" href="/basid/#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="/basid/#features">Get Started</a></li>
          <!-- <li><a class="getstarted scrollto" href="login">Login/Signup</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    
    
<section class="container">

    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
    
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              BASID <br />
              <span class="" style="color: #43a838ff">Registration Form</span>
            </h1>
          </div>
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form action='register/register_user' method='post'>
                 
                <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name='first_name'/>
                        <label class="form-label" for="form3Example1">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" name='last_name' />
                        <label class="form-label" for="form3Example2">Last name</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <select id="form3Example2" class="form-control" name='city'>
                            <option value="Cagayan De Oro City">Cagayan De Oro City</option>
                        </select>
                        <label class="form-label" for="form3Example1">City</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <select id="form3Example2" class="form-control" name='baranggay'>
                            <option value="Balulang">Balulang</option>
                            <option value="Carmen">Carmen</option>
                            <option value="Lapasn">Lapasan</option>
                            <option value="Bugo">Bugo</option>
                            <option value="Bulua">Bulua</option>
                            <option value="Cogon">Cogon</option>
                        </select>
                        <label> Baranggay </label>
                      </div>
                    </div>
                  </div>
  
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control" name='email'/>
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>
  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" name='password'/>
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>
  
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Subscribe to our newsletter
                    </label>
                  </div>
  
                   <!-- Submit button -->
                   <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                      Sign up
                    </button>
                  </div>
  
                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>Already have an account?</p>
                    <a class="btn scrollto" href="login">Login here</a>
                    <!-- <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="bx bxl-twitter fa-4x"></i></a>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="bx bxl-google"></i></a>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="bx bxl-github"></i></a>
                    </button> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  