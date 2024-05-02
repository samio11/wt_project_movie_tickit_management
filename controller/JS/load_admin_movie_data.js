function loadMovie()
        {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
        document.getElementById("txt5").innerHTML = this.responseText;
        }
        
        xhttp.open("GET", "http://localhost/aiub/movie_management_system/controller/admin_movie_show.php",true);
        xhttp.send();
      } 