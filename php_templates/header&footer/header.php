

<?php

function showHeader($login, $username)
{
    if (!empty($login)) {
        if ($login == "user") {
            echo '
<style>
    /* CSS for header */
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #f2f2f2;
        /* Change background color as needed */
    }

    /* CSS for logo */
    .logo img {
        max-width: 100px;
        /* Adjust the maximum width of the logo */
    }

    /* CSS for horizontal list */
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    li {
        margin-right: 20px;
        /* Adjust spacing between list items */
    }

    li:last-child {
        margin-right: 0;
        /* Remove margin from the last list item */
    }

    /* Additional styles for links */
    li a {
        text-decoration: none;
        color: #333;
        /* Change color as needed */
    }

    li a:hover {
        color: #007bff;
        font-size: 15px;
    }
</style>

<header>
    <div class="logo">

        <img src="logo.png" alt="Logo">
    </div>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="speaker.html">Speaker</a></li>
            <li><a href="search.html">Search City</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="user_profile.php">'.$username . '</a></li>
        </ul>
    </nav>
</header>
            ';
        }
        if ($login == "speaker") {
            echo '
<style>       
    /* CSS for header */
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #f2f2f2;
        /* Change background color as needed */
    }

    /* CSS for logo */
    .logo img {
        max-width: 100px;
        /* Adjust the maximum width of the logo */
    }

    /* CSS for horizontal list */
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    li {
        margin-right: 20px;
        /* Adjust spacing between list items */
    }

    li:last-child {
        margin-right: 0;
        /* Remove margin from the last list item */
    }

    /* Additional styles for links */
    li a {
        text-decoration: none;
        color: #333;
        /* Change color as needed */
    }

    li a:hover {
        color: #007bff;
        font-size: 15px;
    }
</style>

<header>
    <div class="logo">

        <img src="logo.png" alt="Logo">
    </div>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="speaker.html">Speaker</a></li>
            <li><a href="search.html">Search City</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="speaker_profile.php">'.$username . '</a></li>
        </ul>
    </nav>
</header>';
        }
    }
    else{
        echo '
        <style>       
    /* CSS for header */
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #f2f2f2;
        /* Change background color as needed */
    }

    /* CSS for logo */
    .logo img {
        max-width: 100px;
        /* Adjust the maximum width of the logo */
    }

    /* CSS for horizontal list */
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    li {
        margin-right: 20px;
        /* Adjust spacing between list items */
    }

    li:last-child {
        margin-right: 0;
        /* Remove margin from the last list item */
    }

    /* Additional styles for links */
    li a {
        text-decoration: none;
        color: #333;
        /* Change color as needed */
    }

    li a:hover {
        color: #007bff;
        font-size: 15px;
    }
</style>

<header>
    <div class="logo">

        <img src="logo.png" alt="Logo">
    </div>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="speaker.html">Speaker</a></li>
            <li><a href="search.html">Search City</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="speaker_profile.php">$username</a></li>
        </ul>
    </nav>
</header>
        ';
    }
}
?>