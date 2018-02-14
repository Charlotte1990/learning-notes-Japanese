<?php

//Cookie

//setcookie("username", "tamura");
setcookie("username", "tamura", time()-60*60);

echo $_COOKIE["username"];