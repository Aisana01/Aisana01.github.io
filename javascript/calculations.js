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
                document.getElementById('a').innerHTML = Math.round(data.slab_area * 100) / 100
                document.getElementById('b').innerHTML = Math.round(data.concrete_volume * 100) / 100
                document.getElementById('c').innerHTML = Math.round(data.perimeter * 100) / 100
                document.getElementById('d').innerHTML = Math.round(data.side_plate_area * 100) / 100
                document.getElementById('e').innerHTML = Math.round(data.weight * 100) / 100
                document.getElementById('f').innerHTML = Math.round(data.soil_load * 100) / 100
                document.getElementById('g').innerHTML = Math.round(data.total_cost * 100) / 100
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
