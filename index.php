<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Event Information System</title>
    <link rel="stylesheet" href="CampusSystem.css">
</head>

<body>

    <header>
        <h1>Campus Event Information System</h1>
        <p>Discover upcoming events on campus</p>
    </header>

    <main>

        <section class="controls">
            <input 
                type="text" 
                id="searchInput" 
                placeholder="Search events..."
            >

            <select id="categoryFilter">
                <option value="all">All Categories</option>
                <option value="Academic">Academic</option>
                <option value="Sports">Sports</option>
                <option value="Cultural">Cultural</option>
                <option value="Seminar">Seminar</option>
            </select>

            <select id="locationFilter">
                <option value="all">All Locations</option>
                <option value="University Gym">University Gym</option>
                <option value="Main Auditorium">Main Auditorium</option>
                <option value="Student Center">Student Center</option>
            </select>
        </section>

        <section id="eventContainer" class="event-container">

            <div class="event-card"
                data-title="Campus Sports Fest"
                data-category="Sports"
                data-location="University Gym">

                <div class="event-image sports">
                    SPORTS
                </div>

                <div class="event-content">
                    <h2>Campus Sports Fest</h2>

                    <p>September 20, 2026</p>
                    <p>9:00 AM - 5:00 PM</p>
                    <p>University Gym</p>
                    <p>Sports</p>

                    <button onclick="showDetails(
                        'Campus Sports Fest',
                        'September 20, 2026',
                        '9:00 AM - 5:00 PM',
                        'University Gym',
                        'Sports',
                        'Join students and faculty for an exciting campus sports event.'
                    )">
                        View Details
                    </button>
                </div>
            </div>


            <div class="event-card"
                data-title="Academic Seminar"
                data-category="Academic"
                data-location="Main Auditorium">

                <div class="event-image academic">
                    ACADEMIC
                </div>

                <div class="event-content">
                    <h2>Academic Seminar</h2>

                    <p>September 25, 2026</p>
                    <p>1:00 PM - 4:00 PM</p>
                    <p>Main Auditorium</p>
                    <p> Academic</p>

                    <button onclick="showDetails(
                        'Academic Seminar',
                        'September 25, 2026',
                        '1:00 PM - 4:00 PM',
                        'Main Auditorium',
                        'Academic',
                        'A seminar designed to help students improve their academic skills and knowledge.'
                    )">
                        View Details
                    </button>
                </div>
            </div>


            <div class="event-card"
                data-title="Cultural Festival"
                data-category="Cultural"
                data-location="Student Center">

                <div class="event-image cultural">
                    CULTURAL
                </div>

                <div class="event-content">
                    <h2>Cultural Festival</h2>

                    <p>October 5, 2026</p>
                    <p>10:00 AM - 6:00 PM</p>
                    <p>Student Center</p>
                    <p>Cultural</p>

                    <button onclick="showDetails(
                        'Cultural Festival',
                        'October 5, 2026',
                        '10:00 AM - 6:00 PM',
                        'Student Center',
                        'Cultural',
                        'Celebrate different cultures through food, music, dance, and art.'
                    )">
                        View Details
                    </button>
                </div>
            </div>


            <div class="event-card"
                data-title="Student Leadership Seminar"
                data-category="Seminar"
                data-location="Main Auditorium">

                <div class="event-image seminar">
                    SEMINAR
                </div>

                <div class="event-content">
                    <h2>Student Leadership Seminar</h2>

                    <p>October 12, 2026</p>
                    <p>2:00 PM - 5:00 PM</p>
                    <p>Main Auditorium</p>
                    <p>Seminar</p>

                    <button onclick="showDetails(
                        'Student Leadership Seminar',
                        'October 12, 2026',
                        '2:00 PM - 5:00 PM',
                        'Main Auditorium',
                        'Seminar',
                        'Learn leadership skills and develop your confidence as a student leader.'
                    )">
                        View Details
                    </button>
                </div>
            </div>

        </section>

        <p id="noResults">No events found.</p>

    </main>


    <div id="detailsModal" class="modal">

        <div class="modal-content">

            <span class="close" onclick="closeDetails()">&times;</span>

            <h2 id="detailTitle"></h2>

            <p><strong>Date:</strong> <span id="detailDate"></span></p>
            <p><strong>Time:</strong> <span id="detailTime"></span></p>
            <p><strong>Location:</strong> <span id="detailLocation"></span></p>
            <p><strong>Category:</strong> <span id="detailCategory"></span></p>

            <h3>Description</h3>
            <p id="detailDescription"></p>

            <button onclick="closeDetails()">Close</button>

        </div>

    </div>


    <script src="script.js"></script>

</body>
</html>