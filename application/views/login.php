<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>

  <!-- Google Font: Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link 
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" 
    rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <!-- Bootstrap Icons (untuk toggle mata password) -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
  />

  <!-- Link external CSS dengan path di public/assets/css/style.css -->
  <link rel="stylesheet" href="public/template/css/style.css">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>
</head>
<body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      <!-- Kolom kiri: gambar Mekkah -->
      <div class="col-md-6 d-none d-md-block left-illustration"></div>

      <!-- Kolom kanan: gradient background + card login -->
      <div class="col-md-6 right-area d-flex align-items-center justify-content-center">
        <div class="card card-login">
          <div class="card-header text-center">
            <h4 class="mb-0" style="color:#000;">Sign in</h4>
          </div>
          <div class="card-body">
            <!-- FORM LOGIN (Username dan Password) -->
            <form id="form_login" action="#" method="post">
              <!-- Username -->
              <div class="mb-3">
                <label for="username" class="form-label" style="color:#000;">Username</label>
                <div class="input-group">
                  <span class="input-group-text icon-gold">
                    <!-- Ikon User -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <g transform="translate(4 2)">
                        <circle cx="4.778" cy="4.778" r="4.778"
                          transform="translate(2.801 0)"
                          fill="none"
                          stroke="#200e32"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                          opacity="0.4"
                        />
                        <path d="M0,3.016a2.215,2.215,0,0,1,.22-.97A4.042,4.042,0,0,1,3.039.426,16.787,16.787,0,0,1,5.382.1,25.053,25.053,0,0,1,9.767.1a16.979,16.979,0,0,1,2.343.33c1.071.22,2.362.659,2.819,1.62a2.27,2.27,0,0,1,0,1.95c-.458.961-1.748,1.4-2.819,1.611a15.716,15.716,0,0,1-2.343.339A25.822,25.822,0,0,1,6.2,6a4.066,4.066,0,0,1-.815-.055,15.423,15.423,0,0,1-2.334-.339C1.968,5.4.687,4.957.22,4A2.279,2.279,0,0,1,0,3.016Z"
                          transform="translate(0 13.185)"
                          fill="none"
                          stroke="#200e32"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                        />
                      </g>
                    </svg>
                  </span>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    required
                  />
                </div>
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label" style="color:#000;">Password</label>
                <div class="input-group">
                  <span class="input-group-text icon-gold">
                    <!-- Ikon Lock -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <g transform="translate(2 2)">
                        <path
                          d="M13.584,0H4.915C1.894,0,0,2.139,0,5.166v8.168C0,16.361,1.885,18.5,4.915,18.5h8.668c3.031,0,4.917-2.139,4.917-5.166V5.166C18.5,2.139,16.614,0,13.584,0Z"
                          transform="translate(0.75 0.75)"
                          fill="none"
                          stroke="#200e32"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                          opacity="0.4"
                        />
                        <path
                          d="M3.7,1.852A1.852,1.852,0,1,1,1.851,0,1.852,1.852,0,0,1,3.7,1.852Z"
                          transform="translate(4.989 8.148)"
                          fill="none"
                          stroke="#200e32"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                        />
                        <path
                          d="M0,0H6.318V1.852"
                          transform="translate(8.692 10)"
                          fill="none"
                          stroke="#200e32"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                        />
                        <path
                          d="M.5,1.852V0"
                          transform="translate(11.682 10)"
                          fill="none"
                          stroke="#200e32"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                        />
                      </g>
                    </svg>
                  </span>
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                  />
                  <span class="input-group-text password-toggle">
                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                  </span>
                </div>
              </div>

              <!-- Forgot Password & Sign in button -->
              <div class="mb-3 text-end">
                <a href="#" class="forgot-password">Forgot Password?</a>
              </div>
              <div class="d-grid">
                <button type="button" id="loginBtn" class="btn btn-login">
                  Sign in
                </button>
              </div>

              <!-- Signup link -->
              <div class="text-center mt-3 signup-link">
                Not a member? <a href="#">Signup now</a>
              </div>
            </form>
            <!-- END FORM LOGIN -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
        $('#loginBtn').click(function() {
            $('.error-block').html('');
            $('input').removeClass('is-invalid');
            
            $.ajax({
                url: '<?php echo base_url('login/proses_login'); ?>',
                type: 'POST',
                data: {
                    username: $('#username').val(),
                    password: $('#password').val()
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        if (response.role === 'admin') {
                            window.location.href = '<?php echo base_url('admin/dashboard'); ?>'; // Redirect ke dashboard admin
                        } else if (response.role === 'user') {
                            window.location.href = '<?php echo base_url('user/dashboard'); ?>'; // Redirect ke dashboard user
                        }
                    } else {
                        if (response.error) {
                            for (var prop in response.error) {
                                if (response.error[prop] !== '') {
                                    $("#form_login [name=" + prop + "]")
                                        .addClass('is-invalid')
                                        .next('.error-block')
                                        .html(response.error[prop]);
                                }
                            }
                        } else {
                            // Tangani error lain jika perlu
                        }
                    }
                }
            });
        });
    });
    </script>
</body>
</html>
