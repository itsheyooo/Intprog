document.getElementById('home-link');

document.getElementById('member-info-link');

function showSuggestions(str) {
    let suggestionBox = document.getElementById("suggestions");
    suggestionBox.innerHTML = ""; // Clear previous suggestions

    if (str.length == 0) {
        suggestionBox.style.display = "none"; // Hide suggestions if input is empty
        return;
    }

    // AJAX request to PHP to fetch suggestions from the database
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let suggestions = JSON.parse(this.responseText);
            suggestionBox.style.display = "block"; // Show suggestion box

            suggestions.forEach(function(item) {
                let div = document.createElement("div");
                div.innerHTML = item;
                div.onclick = function() {
                    document.getElementById("search").value = item; // Set input value to selected suggestion
                    suggestionBox.style.display = "none"; // Hide suggestions after selecting
                };
                suggestionBox.appendChild(div); // Add suggestion to the box
            });
        }
    };
    xhr.open("GET", "data.php?q=" + str, true);
    xhr.send();

    function showSuggestions(value) {
        if (value.length == 0) {
            document.getElementById("suggestions").innerHTML = "";
            document.getElementById("message").innerHTML = "";
            return;
        }
    
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "search.php?query=" + value, true);
        xhr.onload = function() {
            if (this.status == 200) {
                const response = JSON.parse(this.responseText);
                const suggestionsDiv = document.getElementById("suggestions");
                const messageDiv = document.getElementById("message");
    
                if (response.image) {
                    suggestionsDiv.innerHTML = ""; // Clear suggestions
                    messageDiv.innerHTML = "<div class='image-display'><img src='" + response.image + "' alt='Food Image'></div>";
                } else {
                    suggestionsDiv.innerHTML = "No results found";
                    messageDiv.innerHTML = "";
                }
            }
        };
        xhr.send();
    }
    
}
