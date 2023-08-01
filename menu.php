<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        menu {
            background-color: #f9ca3f; /* Custom background color */
            padding: 10px;
            display: flex; /* Use flexbox for layout */
            align-items: center; /* Vertically center the content */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }

        .logo {
            flex: 1; /* Grow to take up available space */
            font-size: 24px;
            font-weight: bold;
            margin-left: 15px; /* Add margin to separate from navigation links */
        }

        .menu-links {
            flex: 1; /* Grow to take up available space */
            display: flex; /* Use flexbox for navigation links */
            justify-content: flex-start; /* Align navigation links to the left */
        }

        .auth-links {
            flex: 1; /* Grow to take up available space */
            display: flex; /* Use flexbox for authentication links */
            justify-content: flex-end; /* Align authentication links to the right */
            margin-right: 15px; /* Add margin to separate from navigation links */
        }

        menu a {
            text-decoration: none;
            color: #333; /* Custom text color */
            font-size: 18px;
            margin: 0 15px;
            transition: color 0.3s; /* Add smooth transition on hover */
        }

        menu a:hover {
            color: #e67e22; /* Change text color on hover */
        }
    </style>
</head>
<body>
    <menu>
        <h1 class="logo">Oliver Losike</h1>
        <div class="menu-links">
            <a href="/" class="menu-link">Home</a>
            <a href="/about" class="menu-link">About</a>
            <a href="/contact" class="menu-link">Contact</a>
        </div>
        <div class="auth-links">
            <a href="/registration.php">Register</a> |
            <a href="/login.php">Login</a>
        </div>
    </menu>
</body>
</html>
