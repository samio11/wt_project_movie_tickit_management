document.addEventListener('DOMContentLoaded', function() {
    // Function to fetch JSON data and display movie cards using innerHTML
    function fetchAndDisplayMovies() {
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'http://localhost/aiub/movie_management_system/controller/home_category_movie.json', true);
  
      xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
          var moviesData = JSON.parse(xhr.responseText);
          displayMovieCards(moviesData);
        } else {
          console.error('Failed to load movies data');
        }
      };
  
      xhr.send();
    }
  
    // Function to construct HTML for movie cards and insert into container using innerHTML
    function displayMovieCards(moviesData) {
      var movieContainer = document.getElementById('movieContainer');
      var html = '';
  
      moviesData.forEach(function(movie) {
        // Construct HTML for each movie card
        html += `
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">${movie.movie_name}</h5>
              <p class="card-text">Category: ${movie.movie_category}</p>
              <p class="card-text">${movie.movie_description}</p>
              <img src="${movie.movie_pic}" class="card-img-top" alt="${movie.movie_name}">
            </div>
          </div>
        `;
      });
  
      // Set the innerHTML of the movieContainer with the constructed HTML
      if (movieContainer) {
        movieContainer.innerHTML = html;
      } else {
        console.error('Movie container not found');
      }
    }
  
    // Call the function to fetch and display movies
    fetchAndDisplayMovies();
  });
  