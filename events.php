<!DOCTYPE html>
<html>

<head>

    <title>Campus Events</title>

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <link
        rel="stylesheet"
        href="style.css"
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
        <a href="login.php">Login</a>

    </div>

</nav>

<div class="container">

    <h1>Upcoming Events</h1>

    <input
        type="text"
        id="search"
        placeholder="Search events..."
        class="search"
    >

    <div id="eventList" class="event-grid">

        Loading events...

    </div>

</div>

<script src="js/app.js"></script>

</body>
</html>