function loadCustomer()
{
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("txt1").innerHTML = this.responseText;
    }
    
    xhttp.open("GET", "http://localhost/aiub/movie_management_system/controller/admin_customer_show.php",true);
    xhttp.send();
}