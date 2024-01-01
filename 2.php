<?php
    require "1.php";
    $header = new Header();

    // Call the showHeader method with different number of arguments
    $header->showHeader("user", "John");
    $header->showHeader("speaker", "John"); // Login: user, Username: John
    // $header->showHeader("speaker"); // Login: speaker
    $header->showHeader(); // No login or username provided
?>