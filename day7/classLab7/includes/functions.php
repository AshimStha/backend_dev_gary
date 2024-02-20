<?php 

    function set_message($message) {
        // session variable is used to create a session for locally storing data on the browser
        // will be available as far as the browser window is open
        $_SESSION['message'] = $message;
    }

    function get_message() {
        if(isset($_SESSION['message'])) {
            echo "
                <div class'alert alert-primary' role='alert'>"
                    .$_SESSION['message'].
                "</div>
            ";
            // php built in function to unset the session variable
            /**
             * It is better to unset the session than to set it as null because it it is set to null,
             * it still exists in the browser but as null.
             */
            unset($_SESSION['message']);
        }
    }


?>