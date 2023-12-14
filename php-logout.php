<?php

////// the first thing is always start the session
// anytime you use a session, you need to start it first
session_start();

////// destroy the session when logged out
session_destroy();

////// direct users to the home page when they are not logged in
header("Location: home.html");
exit;

?>