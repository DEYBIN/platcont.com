<?php

    session_start();
    $_SESSION['_webState']=0;
    session_destroy();
    header("location:/home");
