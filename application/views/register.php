<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register Page</title>
  
  <!-- Google Font: Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link 
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" 
    rel="stylesheet"
  >

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
  />

  <link rel="stylesheet" href="public/template/css/style.css">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>

</head>
<body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      <!-- Kolom kiri (gambar Mekkah) -->
      <div class="col-md-6 d-none d-md-block left-illustration"></div>

      <!-- Kolom kanan (gradient background + card register) -->
      <div class="col-md-6 right-area d-flex align-items-center justify-content-center">
        <div class="card card-register">
          <div class="card-header text-center">
            <h4 class="mb-0" style="color:#000;">Create Account</h4>
          </div>
          <div class="card-body">
            <form id="form_register" action="" method="post">
              <!-- Username Field -->
              <div class="form-group with_icon mb-3">
                <label style="color:#000;">Username</label>
                <div class="input_group">
                  <input 
                    type="text" 
                    name="username" 
                    class="form-control" 
                    placeholder="John Smith" 
                    required
                  >
                  <div class="icon">
                    <!-- Iconly Two-tone Profile (warna hitam) -->
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
                        <circle 
                          cx="4.778" 
                          cy="4.778" 
                          r="4.778"
                          transform="translate(2.801 0)"
                          fill="none"
                          stroke="#000"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                          opacity="0.4"
                        />
                        <path 
                          d="M0,3.016a2.215,2.215,0,0,1,.22-.97A4.042,4.042,0,0,1,3.039.426,16.787,16.787,0,0,1,5.382.1,25.053,25.053,0,0,1,9.767.1a16.979,16.979,0,0,1,2.343.33c1.071.22,2.362.659,2.819,1.62a2.27,2.27,0,0,1,0,1.95c-.458.961-1.748,1.4-2.819,1.611a15.716,15.716,0,0,1-2.343.339A25.822,25.822,0,0,1,6.2,6a4.066,4.066,0,0,1-.815-.055,15.423,15.423,0,0,1-2.334-.339C1.968,5.4.687,4.957.22,4A2.279,2.279,0,0,1,0,3.016Z"
                          transform="translate(0 13.185)"
                          fill="none"
                          stroke="#000"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                        />
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

              <!-- Email Field -->
              <div class="form-group with_icon mb-3">
                <label style="color:#000;">Email Address</label>
                <div class="input_group">
                  <input 
                    type="email" 
                    name="email" 
                    class="form-control" 
                    placeholder="example@mail.com" 
                    required
                  >
                  <div class="icon">
                    <!-- Iconly Two-tone Message (warna hitam) -->
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
                      <g transform="translate(2 3)">
                        <path 
                          d="M11.314,0,7.048,3.434a2.223,2.223,0,0,1-2.746,0L0,0"
                          transform="translate(3.954 5.561)"
                          fill="none"
                          stroke="#000"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                          opacity="0.4"
                        />
                        <path 
                          d="M4.888,0h9.428A4.957,4.957,0,0,1,17.9,1.59a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H4.888C1.968,17.116,0,14.741,0,11.822V5.294C0,2.375,1.968,0,4.888,0Z"
                          transform="translate(0 0)"
                          fill="none"
                          stroke="#000"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-miterlimit="10"
                          stroke-width="1.5"
                        />
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

              <!-- Password Field -->
              <div class="form-group with_icon mb-3" id="show_hide_password">
                <label style="color:#000;">Password</label>
                <div class="input_group">
                  <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="form-control" 
                    placeholder="Enter your password" 
                    required
                  >
                  <div class="icon">
                    <!-- Iconly Two-tone Password (warna hitam) -->
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
                          stroke="#000"
                          stroke-width="1.5"
                          opacity="0.4"
                        />
                        <path 
                          d="M3.7,1.852A1.852,1.852,0,1,1,1.851,0,1.852,1.852,0,0,1,3.7,1.852Z"
                          transform="translate(4.989 8.148)"
                          fill="none"
                          stroke="#000"
                          stroke-width="1.5"
                        />
                        <path 
                          d="M0,0H6.318V1.852"
                          transform="translate(8.692 10)"
                          fill="none"
                          stroke="#000"
                          stroke-width="1.5"
                        />
                        <path 
                          d="M.5,1.852V0"
                          transform="translate(11.682 10)"
                          fill="none"
                          stroke="#000"
                          stroke-width="1.5"
                        />
                      </g>
                    </svg>
                  </div>
                  <button 
                    type="button" 
                    id="togglePassword" 
                    class="btn hide_show icon_password"
                  >
                    <i class="bi bi-eye-slash"></i>
                  </button>
                </div>
              </div>

              <!-- Terms and Conditions -->
              <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                <input 
                  type="checkbox" 
                  name="terms" 
                  class="custom-control-input" 
                  id="customControlAutosizing" 
                  required
                >
                <label class="custom-control-label" for="customControlAutosizing" style="color:#000;">
                  <span>
                    I agree 
                    <a href="#" class="terms-link">terms and conditions</a>
                  </span>
                </label>
              </div>
            </form>
          </div>
          <div class="em__footer p-3 text-center">
            <button 
              type="button" 
              id="registerBtn" 
              class="btn btn-register mb-3"
            >
              Create account
            </button>
            <a 
              href="page-signin-2.html" 
              class="signin-link"
            >
              I already have an account, Sign in
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  $(document).ready(function() {
    $('#registerBtn').click(function() {
      // Reset pesan error dan class validasi
      $('.error-block').html('');
      $('input').removeClass('is-invalid');

      $.ajax({
        url: '<?php echo base_url('register/proses_register'); ?>',
        type: 'POST',
        data: {
          username: $('[name="username"]').val(),
          email: $('[name="email"]').val(),
          password: $('[name="password"]').val(),
          terms: $('[name="terms"]').is(':checked') ? 1 : 0
        },
        dataType: 'json',
        success: function(response) {
          if (response.status) {
            // Redirect setelah registrasi berhasil, misalnya ke halaman welcome
            window.location.href = '<?php echo base_url('login'); ?>';
          } else {
            if (response.error) {
              // Tampilkan error per input
              for (var prop in response.error) {
                if (response.error[prop] !== '') {
                  $("#form_register [name=" + prop + "]")
                    .addClass('is-invalid')
                    .next('.error-block')
                    .html(response.error[prop]);
                }
              }
            } else {
              // Tangani error umum jika diperlukan
              alert('Terjadi kesalahan, silakan coba lagi.');
            }
          }
        }
      });
    });
  });
</script>


</body>
</html>
