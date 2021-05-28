function Calculate(id) {
    var url = "https://ibuild-api.herokuapp.com/api/calculations/" + id;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            state = 1
            console.log(xhr.status);
            if(xhr.status == 0){
                document.getElementById("loading").remove();
                document.getElementById("loading_back").remove();
                alert("Что то пошло не так, повторите позже")
            }
            var data = JSON.parse(xhr.responseText);
            console.log(data);
            document.getElementById("loading").remove();
            document.getElementById("loading_back").remove();
            matchData(id, data)
        }
    };
    matchSend(id, xhr)
    var gifDiv = document.createElement('div');
    var backDiv = document.createElement('div');
    var html = document.getElementsByTagName("html")[0];
    html.insertBefore(backDiv, html.lastChild)
    html.insertBefore(gifDiv, html.lastChild)
  var heightL =   $(window).innerWidth().toString() + "px";
  
    backDiv.setAttribute("id", "loading_back");
    backDiv.style.background = "rgb(255, 255, 255, 0.6)"
    backDiv.style.position = "absolute"
    backDiv.style.top = "0"
    backDiv.style.left = "0"
    backDiv.style.height = heightL;
    backDiv.style.width = "100%";
    backDiv.style.zIndex = "9999999";

    gifDiv.setAttribute("id", "loading");
    gifDiv.style.background = "url('image/loading-gif.gif') no-repeat center center"
    gifDiv.style.position = "absolute"
    gifDiv.style.top = "0"
    gifDiv.style.left = "0"
    gifDiv.style.height = "100%";
    gifDiv.style.width = "100%";
    gifDiv.style.zIndex = "9999999";
}

function matchSend(calcId, xhr) {
    var myBody = ``
    if (calcId == 'foundation/slab') {
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
    } else if (calcId == 'foundation/lunar') {
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
    } else if (calcId == 'foundation/strip-two') {

    } else if (calcId == 'foundation/strip-three') {

    } else if (calcId == 'foundation/strip-four') {

    } else if (calcId == 'foundation/concrete-ring') {

    } else if (calcId == 'material/insulation') {

    } else if (calcId == 'material/decking') {

    } else if (calcId == 'material/tile') {

    } else if (calcId == 'material/covering') {

    } else if (calcId == 'material/lining') {

    } else if (calcId == 'material/primer') {

    } else if (calcId == 'material/paint') {

    } else if (calcId == 'material/plaster') {

    } else if (calcId == 'material/putty') {

    } else if (calcId == 'material/screed') {

    } else if (calcId == 'material/equalizer') {

    } else if (calcId == 'material/adhesive') {

    } else if (calcId == 'material/wallpaper') {

    } else if (calcId == 'material/plinth') {}

    xhr.send(myBody);
}

function matchData(calcId, data) {
    if (calcId == 'foundation/slab') {
        document.getElementById('ares_a').innerHTML = data.slab_area
        document.getElementById('ares_b').innerHTML = data.concrete_volume
        document.getElementById('ares_c').innerHTML = data.perimeter
        document.getElementById('ares_d').innerHTML = data.side_plate_area
        document.getElementById('ares_e').innerHTML = data.weight
        document.getElementById('ares_f').innerHTML = data.soil_load
        document.getElementById('ares_g').innerHTML = data.total_cost
    } else if (calcId == 'foundation/lunar') {
        document.getElementById('bres_a').innerHTML = data.basement_area
        document.getElementById('bres_b').innerHTML = data.outer_side_area
        document.getElementById('bres_c').innerHTML = data.concrete_volume
        document.getElementById('bres_d').innerHTML = data.outer_perimeter
        document.getElementById('bres_e').innerHTML = data.weight
        document.getElementById('bres_f').innerHTML = data.soil_load
        document.getElementById('bres_g').innerHTML = data.total_cost
    } else if (calcId == 'foundation/strip-two') {

    } else if (calcId == 'foundation/strip-three') {

    } else if (calcId == 'foundation/strip-four') {

    } else if (calcId == 'foundation/concrete-ring') {

    } else if (calcId == 'material/insulation') {

    } else if (calcId == 'material/decking') {

    } else if (calcId == 'material/tile') {

    } else if (calcId == 'material/covering') {

    } else if (calcId == 'material/lining') {

    } else if (calcId == 'material/primer') {

    } else if (calcId == 'material/paint') {

    } else if (calcId == 'material/plaster') {

    } else if (calcId == 'material/putty') {

    } else if (calcId == 'material/screed') {

    } else if (calcId == 'material/equalizer') {

    } else if (calcId == 'material/adhesive') {

    } else if (calcId == 'material/wallpaper') {

    } else if (calcId == 'material/plinth') {}
}
