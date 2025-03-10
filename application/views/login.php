<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="<?php echo base_url('public/assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-4">
    <div class="row justify-content-center pt-5">
      <div class="card col-md-4">
        <div class="card-header">
          <div class="card-title fw-bold">Sign In</div>
        </div>
        <div class="card-body">
          <form id="form_login" action="#" method="post" enctype="multipart/form-data">
            <div class="mb-1">
              <label for="email" class="form-label">email</label>
              <input type="text" class="form-control" id="email" name="email">
              <div class="error-block" id="emailError">
              </div>
            </div>
            <div class="mb-1">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
              <div class="error-block" id="passwordError">
              </div>
            </div>

            <button type="button" id="loginBtn" class="btn btn-primary mt-3">Login</button>
            <div class="messageBlock mt-3"></div>
          </form>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url('public/assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $('#loginBtn').click(function() {
            $('.error-block').html('');
            $('input').removeClass('is-invalid');
            
            $.ajax({
                url: '<?php echo base_url('login/proses_login'); ?>',
                type: 'POST',
                data: {
                    email: $('#email').val(),
                    password: $('#password').val()
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        if (response.role === 'admin') {
                            window.location.href = '<?php echo base_url('admin/dashboard'); ?>';
                        } else if (response.role === 'user') {
                            window.location.href = '<?php echo base_url('user/dashboard'); ?>';
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