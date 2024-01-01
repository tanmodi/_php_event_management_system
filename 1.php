<?php

class Header
{
    // This method is called when an undefined or inaccessible method is invoked on an object
    public function __call($name, $arguments)
    {
        // Check the name of the method
        if ($name == "showHeader") {
            // Check the number of arguments
            $num_args = count($arguments);

            // If two arguments, echo them as login and username
            if ($num_args == 2) {
                $login = $arguments[0];
                $username = $arguments[1];
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
                } else if ($login == "speaker") {
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
                    </header>';
                }
            }

            // If no arguments, echo a default message
            else {
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
    }
}

// Create an object of the class
// $header = new Header();

// // Call the showHeader method with different number of arguments
// $header->showHeader("user", "John");
// $header->showHeader("speaker", "John"); // Login: user, Username: John
// // $header->showHeader("speaker"); // Login: speaker
// $header->showHeader(); // No login or username provided
