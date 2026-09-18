<?php
require_once "config/database.php";
?>

<!DOCTYPE html>
<html>

<head>

    <title>Campus Event Information System</title>

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <link
        rel="stylesheet"
        href="css/style.css"
    >

</head>

<body>

<nav class="navbar">

    <div class="logo">
        CampusEvents
    </div>

    <div class="nav-links">

        <a href="index.php">Home</a>

        <a href="events.php">Events</a>

        <?php if (isset($_SESSION["user_id"])): ?>

            <a href="dashboard.php">
                Dashboard
            </a>

            <a href="logout.php">
                Logout
            </a>

        <?php else: ?>

            <a href="login.php">
                Login
            </a>

            <a href="register.php">
                Register
            </a>

        <?php endif; ?>

    </div>

</nav>

<section class="hero">

    <div>

        <h1>
            Discover What's Happening
            on Campus
        </h1>

        <p>
            Find campus events, seminars,
            activities, sports and organizations
            in one place.
        </p>

        <a class="btn" href="events.php">
            Explore Events
        </a>

    </div>

</section>

<section class="features">

    <div class="feature-card">

        <h2> Events</h2>

        <p>
            Browse upcoming campus activities.
        </p>

    </div>

    <div class="feature-card">

        <h2> Registration</h2>

        <p>
            Register for events online.
        </p>

    </div>

    <div class="feature-card">

        <h2> Updates</h2>

        <p>
            Stay informed about campus activities.
        </p>

    </div>

</section>

</body>
</html>