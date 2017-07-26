<?php
session_start();
// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
/*******************************************************************
* Cookies must be deleted first before the session is destroyed
*/
 if (isset($_COOKIE[session_name()])) {
    setcookie($_COOKIE[session_name()], '', time()-42000, '/');  //Delete the session cookie
}
 $_SESSION = array();
// Finally, destroy the session.
session_destroy();
//header("Location:index.php?gen=562f25632tf4v34y343grv3rg3ty4367egwe3tye3ty434iudsfhjdfjdkkjfdjfdfhshdsdjldslfkjdlrgt3gr3y4&link=09uernjrueihjdshjdfhyiefryeireogfklfgiorigtjfdk9r893y643ggh3hj43yu43874rh3r"); //Redirect to login page

echo '<script>  window.location ="index.php?gen=562f25632tf4v34y343grv3rg3ty4367egwe3tye3ty434iudsfhjdfjdkkjfdjfdfhshdsdjldslfkjdlrgt3gr3y4&link=09uernjrueihjdshjdfhyiefryeireogfklfgiorigtjfdk9r893y643ggh3hj43yu43874rh3r"</script>';//Redirect to login page using javascript
?> 