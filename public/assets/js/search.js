
document.addEventListener("DOMContentLoaded", function () {
    var searchDestinationInput = document.getElementById("search_destination");
    var searchTypeInput = document.getElementById("search_type");
    var searchDateInput = document.getElementById("search_date");
    var searchButton = document.getElementById("search_button");
    var searchResultContainer = document.getElementById("search_result");
    searchButton.addEventListener("click", function () {
        var destination = searchDestinationInput.value;
        var type =searchTypeInput.value;
        var date = searchDateInput.value;
        console.log(type, date);
        $.ajax({
            
            type: 'GET',
            url: '/search/',
            data: {
                destination: destination,
                type: type,
                date: date,
            },
            success: function (data) {
                searchResultContainer.innerHTML = data;
                console.log(searchResultContainer.innerHTML )
            },
            error: function (error) {
                console.error("Error during search:", error);
            }
        });
    });
});