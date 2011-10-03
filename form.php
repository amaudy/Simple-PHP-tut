<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <!-- if action is empty it mean post to them self -->
        <form action="" method="post">
            <label for="text-input">Text input</label>
            <input type="text" name="firstname" />
            <br/>
            
            <label for="password-input">Password</label>
            <input type="password" name="password" />
            <br/>
            
            <input type="submit" value="Test" />
        </form>
        
        <?php
        if ($_POST) {
            // Show array of data from front-end
            print_r($_POST);
            
            echo "<br/>"; // HTML code for new line
            
            /**
             * Extract data from front-end to variable
             */
            $firstname = $_POST['firstname'];
            $password = $_POST['password'];
            
            // show to Browser
            echo "Firstname : $firstname <br/>";
            echo "Password : " . $password . '<br/>'; // use . for join string
        }
        ?>
    </body>
</html>
