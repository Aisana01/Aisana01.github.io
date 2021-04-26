function Calculate(id) {
    var host = "https://ibuild-api.herokuapp.com/"
    if(id == "slab_fund"){
        var a_length = parseFloat(document.getElementById('a_length').value)
        var b_length = parseFloat(document.getElementById('b_length').value)
        var c_length = parseFloat(document.getElementById('c_length').value)
        var cost = parseFloat(document.getElementById('cost').value)

        var myBody = JSON.stringify({
            "a_length": a_length,
            "b_length": b_length,
            "c_length": c_length,
            "cost": cost});
        var url = host + "api/calculations/foundation/slab";
        fetch(url, {
            method : "POST",
            body: myBody,
            headers:{
                "Content-Type":"application/json; charset=UTF-8"
            }
        }).then(
            res => res.json()
        ).then(
            data => {
                document.getElementById('a').innerHTML = data.slab_area
                document.getElementById('b').innerHTML = data.concrete_volume
                document.getElementById('c').innerHTML = data.perimeter
                document.getElementById('d').innerHTML = data.side_plate_area
                document.getElementById('e').innerHTML = data.weight
                document.getElementById('f').innerHTML = data.soil_load
                document.getElementById('g').innerHTML = data.total_cost
            }
        );
    }
    else if (id == "brick_wall"){
        var myBody = JSON.stringify({
                "wall_length": 12,
                "wall_height": 11,
                "thickness": 1.5,
                "mortar_thickness": 20,
                "brick_weight": 3,
                "brick_cost": 70});
        var url = host + "api/calculations/wall/brick";
        fetch(url, {
            method : "POST",
            body: myBody,
            headers:{
                "Content-Type":"application/json; charset=UTF-8"
            }
        }).then(
            res => res.json()
        ).then(
            data => alert(data.result)
        );
    } else {
        alert("Undefined ID => " + id)
    }
}
