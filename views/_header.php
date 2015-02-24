<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        echo '<script>location.hash = "login";</script>';
        foreach ($login->errors as $error) {
            echo '<div data-alert class="alert-box alert radius">'.
            $error
              .'<a href="#" class="close">&times;</a>
            </div>';
            
        }
    }

}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        echo '<script>location.hash = "register";</script>';
        foreach ($registration->errors as $error) {
            echo '<div data-alert class="alert-box alert radius">'.
            $error
              .'<a href="#" class="close">&times;</a>
            </div>';
        }
    }

}
?>
