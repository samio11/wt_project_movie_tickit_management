function loadFoodOrder()
{
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("txt6").innerHTML = this.responseText;
    }
    
    xhttp.open("GET", "http://localhost/aiub/movie_management_system/controller/order_foods.php",true);
    xhttp.send();
}