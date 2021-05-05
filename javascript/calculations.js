function Calculate(id) {
    var host = "https://ibuild-api.herokuapp.com/"
    if(id == "slab_fund"){
        var url = host + "api/calculations/foundation/slab";
        
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url);
        
        xhr.setRequestHeader("Accept", "application/json");
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                console.log(xhr.status);
                var data = JSON.parse(xhr.responseText);

                document.getElementById('res_a').innerHTML = data.slab_area
                document.getElementById('res_b').innerHTML = data.concrete_volume
                document.getElementById('res_c').innerHTML = data.perimeter
                document.getElementById('res_d').innerHTML = data.side_plate_area
                document.getElementById('res_e').innerHTML = data.weight
                document.getElementById('res_f').innerHTML = data.soil_load
                document.getElementById('res_g').innerHTML = data.total_cost
            }
        };

        var a = parseFloat(document.getElementById('a').value)
        var b = parseFloat(document.getElementById('b').value)
        var c = parseFloat(document.getElementById('c').value)
        var d = parseFloat(document.getElementById('d').value)

        var myBody = `{
            "a_length": ${a},
            "b_length": ${b},
            "c_length": ${c},
            "cost": ${d}
        }`;
        
        xhr.send(myBody);
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
