function Calculate() {
    var myBody = JSON.stringify({
            "wall_length": 12,
            "wall_height": 11,
            "thickness": 1.5,
            "mortar_thickness": 20,
            "brick_weight": 3,
            "brick_cost": 70});
    var url = "http://127.0.0.1:8081/api/calculations/wall/brick";
    fetch(url, {
        method : "POST",
        body: myBody,
        headers:{
            "Content-Type":"application/json; charset=UTF-8"
        }
    }).then(
        res => res.json()
    ).then(
        data => document.getElementById('beton_volume').innerHTML = data.response
    );
}
