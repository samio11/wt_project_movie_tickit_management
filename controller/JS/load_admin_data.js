function loadUser()
        {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
        document.getElementById("txt").innerHTML = this.responseText;
        }
        
        xhttp.open("GET", "http://localhost/aiub/movie_management_system/controller/admin_employee_show.php",true);
        xhttp.send();
      } 