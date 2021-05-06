function Calculate(id) {
    var url = "https://ibuild-api.herokuapp.com/api/calculations/" + id;
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            console.log(xhr.status);
            var data = JSON.parse(xhr.responseText);
            console.log(data);
            matchData(id, data)
        }
    };
    matchSend(id, xhr)
}

function matchSend(calcId, xhr){
    var myBody = ``
    if(calcId == 'foundation/slab') {
        var a = parseFloat(document.getElementById('aa').value)
        var b = parseFloat(document.getElementById('ab').value)
        var c = parseFloat(document.getElementById('ac').value)
        var d = parseFloat(document.getElementById('ad').value)

        myBody = `{
            "a_length": ${a},
            "b_length": ${b},
            "c_length": ${c},
            "cost": ${d}
        }`;
    } else if(calcId == 'foundation/lunar') {
        var a = parseFloat(document.getElementById('ba').value)
        var b = parseFloat(document.getElementById('bb').value)
        var c = parseFloat(document.getElementById('bc').value)
        var d = parseFloat(document.getElementById('bd').value)
        var e = parseFloat(document.getElementById('be').value)

        myBody = `{
            "a_length": ${a},
            "b_length": ${b},
            "c_length": ${c},
            "d_length": ${d}
            "cost": ${e}
        }`;
    } else if(calcId == 'foundation/strip-two') {

    } else if(calcId == 'foundation/strip-three') {

    } else if(calcId == 'foundation/strip-four') {

    } else if(calcId == 'foundation/concrete-ring') {

    } else if(calcId == 'material/insulation') {

    } else if(calcId == 'material/decking') {

    } else if(calcId == 'material/tile') {

    } else if(calcId == 'material/covering') {

    } else if(calcId == 'material/lining') {

    } else if(calcId == 'material/primer') {

    } else if(calcId == 'material/paint') {

    } else if(calcId == 'material/plaster') {

    } else if(calcId == 'material/putty') {

    } else if(calcId == 'material/screed') {

    } else if(calcId == 'material/equalizer') {

    } else if(calcId == 'material/adhesive') {

    } else if(calcId == 'material/wallpaper') {

    } else if(calcId == 'material/plinth') {
    }

    xhr.send(myBody);
}

function matchData(calcId, data){
    if(calcId == 'foundation/slab') {
        document.getElementById('ares_a').innerHTML = data.slab_area
        document.getElementById('ares_b').innerHTML = data.concrete_volume
        document.getElementById('ares_c').innerHTML = data.perimeter
        document.getElementById('ares_d').innerHTML = data.side_plate_area
        document.getElementById('ares_e').innerHTML = data.weight
        document.getElementById('ares_f').innerHTML = data.soil_load
        document.getElementById('ares_g').innerHTML = data.total_cost
    } else if(calcId == 'foundation/lunar') {
        document.getElementById('bres_a').innerHTML = data.basement_area
        document.getElementById('bres_b').innerHTML = data.outer_side_area
        document.getElementById('bres_c').innerHTML = data.concrete_volume
        document.getElementById('bres_d').innerHTML = data.outer_perimeter
        document.getElementById('bres_e').innerHTML = data.weight
        document.getElementById('bres_f').innerHTML = data.soil_load
        document.getElementById('bres_g').innerHTML = data.total_cost
    } else if(calcId == 'foundation/strip-two') {

    } else if(calcId == 'foundation/strip-three') {

    } else if(calcId == 'foundation/strip-four') {

    } else if(calcId == 'foundation/concrete-ring') {

    } else if(calcId == 'material/insulation') {

    } else if(calcId == 'material/decking') {

    } else if(calcId == 'material/tile') {

    } else if(calcId == 'material/covering') {

    } else if(calcId == 'material/lining') {

    } else if(calcId == 'material/primer') {

    } else if(calcId == 'material/paint') {

    } else if(calcId == 'material/plaster') {

    } else if(calcId == 'material/putty') {

    } else if(calcId == 'material/screed') {

    } else if(calcId == 'material/equalizer') {

    } else if(calcId == 'material/adhesive') {

    } else if(calcId == 'material/wallpaper') {

    } else if(calcId == 'material/plinth') {
    }
}
