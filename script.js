
const searchInput = document.getElementById("searchInput");
const categoryFilter = document.getElementById("categoryFilter");
const locationFilter = document.getElementById("locationFilter");

const eventCards = document.querySelectorAll(".event-card");
const noResults = document.getElementById("noResults");

function filterEvents() {

    const searchText = searchInput.value.toLowerCase();
    const selectedCategory = categoryFilter.value;
    const selectedLocation = locationFilter.value;

    let foundEvents = 0;

    eventCards.forEach(card => {

        const title = card.dataset.title.toLowerCase();
        const category = card.dataset.category;
        const location = card.dataset.location;

        const matchesSearch = title.includes(searchText);

        const matchesCategory =
            selectedCategory === "all" ||
            category === selectedCategory;

        const matchesLocation =
            selectedLocation === "all" ||
            location === selectedLocation;

        if (
            matchesSearch &&
            matchesCategory &&
            matchesLocation
        ) {
            card.style.display = "block";
            foundEvents++;
        } else {
            card.style.display = "none";
        }

    });

    if (foundEvents === 0) {
        noResults.style.display = "block";
    } else {
        noResults.style.display = "none";
    }
}

searchInput.addEventListener("input", filterEvents);
categoryFilter.addEventListener("change", filterEvents);
locationFilter.addEventListener("change", filterEvents);


function showDetails(
    title,
    date,
    time,
    location,
    category,
    description
) {

    document.getElementById("detailTitle").textContent = title;
    document.getElementById("detailDate").textContent = date;
    document.getElementById("detailTime").textContent = time;
    document.getElementById("detailLocation").textContent = location;
    document.getElementById("detailCategory").textContent = category;
    document.getElementById("detailDescription").textContent = description;

    document.getElementById("detailsModal").style.display = "block";
}



function closeDetails() {
    document.getElementById("detailsModal").style.display = "none";
}



window.onclick = function(event) {

    const modal = document.getElementById("detailsModal");

    if (event.target === modal) {
        modal.style.display = "none";
    }
};