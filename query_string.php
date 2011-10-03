copy 
<br/>
<br/>
http://<?php echo $_SERVER['SERVER_NAME']?><?php echo $_SERVER['PHP_SELF']?>?firstname=ann&password=neeja
<br/>
<br/>
to browser to see result.
<br/>
<?php

if (isset($_GET)) {
    print_r($_GET);
}