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
        var a = parseFloat(document.getElementById('ca').value)
        var b = parseFloat(document.getElementById('cb').value)
        var c = parseFloat(document.getElementById('cc').value)
        var d = parseFloat(document.getElementById('cd').value)
        var e = parseFloat(document.getElementById('ce').value)

        myBody = `{
            "a_length": ${a},
            "b_length": ${b},
            "c_length": ${c},
            "d_length": ${d},
            "cost": ${e}
        }`;
    } else if (calcId == 'foundation/strip-three') {
        var a = parseFloat(document.getElementById('da').value)
        var b = parseFloat(document.getElementById('db').value)
        var c = parseFloat(document.getElementById('dc').value)
        var d = parseFloat(document.getElementById('dd').value)
        var e = parseFloat(document.getElementById('de').value)
        var f = parseFloat(document.getElementById('df').value)

        myBody = `{
            "a_length": ${a},
            "b_length": ${b},
            "c_length": ${c},
            "d_length": ${d},
            "e_length": ${e},
            "cost": ${f}
        }`;
    } else if (calcId == 'foundation/strip-four') {
        var a = parseFloat(document.getElementById('ea').value)
        var b = parseFloat(document.getElementById('eb').value)
        var c = parseFloat(document.getElementById('ec').value)
        var d = parseFloat(document.getElementById('ed').value)
        var e = parseFloat(document.getElementById('ee').value)

        myBody = `{
            "a_length": ${a},
            "b_length": ${b},
            "c_length": ${c},
            "d_length": ${d},
            "cost": ${e}
        }`;
    } else if (calcId == 'foundation/concrete-ring') {
        var a = parseFloat(document.getElementById('ga').value)
        var b = parseFloat(document.getElementById('gb').value)
        var c = parseFloat(document.getElementById('gc').value)

        myBody = `{
            "diameter": ${a},
            "height": ${b},
            "thickness": ${c}
        }`;
    } else if (calcId == 'material/insulation') {
        var a = parseFloat(document.getElementById('aa').value)
        var b = parseFloat(document.getElementById('ab').value)
        var c = parseFloat(document.getElementById('ac').value)
        var d = parseFloat(document.getElementById('ad').value)
        var e = parseFloat(document.getElementById('ae').value)
        var f = parseFloat(document.getElementById('af').value)
        var g = parseFloat(document.getElementById('ag').value)
        var h = parseFloat(document.getElementById('ah').value)

        myBody = `{
            "a_length": ${a},
            "b_length": ${b},
            "c_length": ${c},
            "length": ${d},
            "width": ${e},
            "insulation_amount": ${f},
            "cost": ${g},
            "density": ${h}
        }`;
    } else if (calcId == 'material/decking') {
        var a = parseFloat(document.getElementById('ba').value)
        var b = parseFloat(document.getElementById('bb').value)
        var c = parseFloat(document.getElementById('bc').value)
        var d = parseFloat(document.getElementById('bd').value)
        var e = parseFloat(document.getElementById('be').value)
        var f = parseFloat(document.getElementById('bf').value)

        myBody = `{
            "a_side": ${a},
            "b_side": ${b},
            "length": ${c},
            "width": ${d},
            "thickness": ${e},
            "c_length": ${f}
        }`;
    } else if (calcId == 'material/tile') {
        var a = parseFloat(document.getElementById('ca').value)
        var b = parseFloat(document.getElementById('cb').value)
        var c = parseFloat(document.getElementById('cc').value)
        var d = parseFloat(document.getElementById('cd').value)
        var e = parseFloat(document.getElementById('ce').value)
        var f = parseFloat(document.getElementById('cf').value)
        var g = parseFloat(document.getElementById('cg').value)

        myBody = `{
            "tile_length": ${a},
            "tile_width": ${b},
            "surface_length": ${c},
            "surface_width": ${d},
            "seam_thickness": ${e},
            "pruning": ${f},
            "cost": ${g}
        }`;
    } else if (calcId == 'material/covering') {
        var a = parseFloat(document.getElementById('da').value)
        var b = parseFloat(document.getElementById('db').value)
        var c = parseFloat(document.getElementById('dc').value)
        var d = parseFloat(document.getElementById('dd').value)

        myBody = `{
            "covering_length": ${a},
            "covering_width": ${b},
            "floor_length": ${c},
            "floor_width": ${d}
        }`;
    } else if (calcId == 'material/lining') {
        var a = parseFloat(document.getElementById('ea').value)
        var b = parseFloat(document.getElementById('eb').value)
        var c = parseFloat(document.getElementById('ec').value)
        var d = parseFloat(document.getElementById('ed').value)
        var e = parseFloat(document.getElementById('ee').value)
        var f = parseFloat(document.getElementById('ef').value)
        var g = parseFloat(document.getElementById('eg').value)
        var h = parseFloat(document.getElementById('eh').value)

        myBody = `{
            "a_length": ${a},
            "b_width": ${b},
            "thickness": ${c},
            "tenon_length": ${d},
            "amount_in_package": ${e},
            "surface_height": ${f},
            "surface_width": ${g},
            "package_cost": ${h}
        }`;
    } else if (calcId == 'material/primer') {
        var a = parseFloat(document.getElementById('fa').value)
        var b = parseFloat(document.getElementById('fb').value)
        var c = parseFloat(document.getElementById('fc').value)
        var d = parseFloat(document.getElementById('fd').value)

        myBody = `{
            "primer_type": ${a},
            "layer_amount": ${b},
            "rubble_length": ${c},
            "rubble_width": ${d}
        }`;
    } else if (calcId == 'material/paint') {
        var a = parseFloat(document.getElementById('ga').value)
        var b = parseFloat(document.getElementById('gb').value)
        var c = parseFloat(document.getElementById('gc').value)
        var d = parseFloat(document.getElementById('gd').value)
        var e = parseFloat(document.getElementById('ge').value)
        var f = parseFloat(document.getElementById('gf').value)

        myBody = `{
            "paint_waste": ${a},
            "layer_amount": ${b},
            "length": ${c},
            "width": ${d},
            "bank_volume": ${e},
            "bank_cost": ${f}
        }`;
    } else if (calcId == 'material/plaster') {
        var a = parseFloat(document.getElementById('ha').value)
        var b = parseFloat(document.getElementById('hb').value)
        var c = parseFloat(document.getElementById('hc').value)
        var d = parseFloat(document.getElementById('hd').value)
        var e = parseFloat(document.getElementById('he').value)
        var f = parseFloat(document.getElementById('hf').value)

        myBody = `{
            "waste": ${a},
            "layer_thickness": ${b},
            "length": ${c},
            "width": ${d},
            "package_weight": ${e},
            "package_cost": ${f}
        }`;
    } else if (calcId == 'material/putty') {
        var a = parseFloat(document.getElementById('ia').value)
        var b = parseFloat(document.getElementById('ib').value)
        var c = parseFloat(document.getElementById('ic').value)
        var d = parseFloat(document.getElementById('id').value)
        var e = parseFloat(document.getElementById('ie').value)
        var f = parseFloat(document.getElementById('if').value)

        myBody = `{
            "waste": ${a},
            "layer_thickness": ${b},
            "length": ${c},
            "width": ${d},
            "package_weight": ${e},
            "package_cost": ${f}
        }`;
    } else if (calcId == 'material/screed') {
        var a = parseFloat(document.getElementById('ga').value)
        var b = parseFloat(document.getElementById('gb').value)
        var c = parseFloat(document.getElementById('gc').value)
        var d = parseFloat(document.getElementById('gd').value)
        var e = parseFloat(document.getElementById('ge').value)
        var f = parseFloat(document.getElementById('gf').value)

        myBody = `{
            "waste": ${a},
            "layer_thickness": ${b},
            "length": ${c},
            "width": ${d},
            "package_weight": ${e},
            "package_cost": ${f}
        }`;
    } else if (calcId == 'material/equalizer') {
        var a = parseFloat(document.getElementById('ka').value)
        var b = parseFloat(document.getElementById('kb').value)
        var c = parseFloat(document.getElementById('kc').value)
        var d = parseFloat(document.getElementById('kd').value)
        var e = parseFloat(document.getElementById('ke').value)
        var f = parseFloat(document.getElementById('kf').value)

        myBody = `{
            "waste": ${a},
            "layer_thickness": ${b},
            "length": ${c},
            "width": ${d},
            "package_weight": ${e},
            "package_cost": ${f}
        }`;
    } else if (calcId == 'material/adhesive') {
        var a = parseFloat(document.getElementById('la').value)
        var b = parseFloat(document.getElementById('lb').value)
        var c = parseFloat(document.getElementById('lc').value)
        var d = parseFloat(document.getElementById('ld').value)
        var e = parseFloat(document.getElementById('le').value)
        var f = parseFloat(document.getElementById('lf').value)

        myBody = `{
            "waste": ${a},
            "layer_thickness": ${b},
            "length": ${c},
            "width": ${d},
            "package_weight": ${e},
            "package_cost": ${f}
        }`;
    } else if (calcId == 'material/wallpaper') {
        var a = parseFloat(document.getElementById('ma').value)
        var b = parseFloat(document.getElementById('mb').value)
        var c = parseFloat(document.getElementById('mc').value)
        var d = parseFloat(document.getElementById('md').value)
        var e = parseFloat(document.getElementById('me').value)
        var f = parseFloat(document.getElementById('mf').value)

        myBody = `{
            "roll_width": ${a},
            "roll_length": ${b},
            "draw_step": ${c},
            "roll_cost": ${d},
            "wall_width": ${e},
            "wall_height": ${f}
        }`;
    } else if (calcId == 'material/plinth') {
        var a = parseFloat(document.getElementById('na').value)
        var b = parseFloat(document.getElementById('nb').value)
        var c = parseFloat(document.getElementById('nc').value)
        var d = parseFloat(document.getElementById('nd').value)

        myBody = `{
            "plinth_width": ${a},
            "room_length": ${b},
            "room_width": ${c},
            "cost": ${d}
        }`;
    } else if (calcId == 'plumber/volume') {
        var a = parseFloat(document.getElementById('aa').value)
        var b = parseFloat(document.getElementById('ab').value)
        var c = parseFloat(document.getElementById('ac').value)
        var d = parseFloat(document.getElementById('ad').value)
        var e = parseFloat(document.getElementById('ad').value)

        myBody = `{
            "plinth_width": ${a},
            "room_length": ${b},
            "room_width": ${c},
            "cost": ${d},
            "cost": ${e}
        }`;
    } else if (calcId == 'plumber_amount') {
        var a = parseFloat(document.getElementById('aa').value)
        var b = parseFloat(document.getElementById('ab').value)
        var c = parseFloat(document.getElementById('ac').value)
        var d = parseFloat(document.getElementById('ad').value)
        var e = parseFloat(document.getElementById('ad').value)

        myBody = `{
            "plinth_width": ${a},
            "room_length": ${b},
            "room_width": ${c},
            "cost": ${d},
            "cost": ${e}
        }`;
    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    } else if (calcId == '') {

    }

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
        document.getElementById('cres_a').innerHTML = data.basement_area
        document.getElementById('cres_b').innerHTML = data.outer_side_area
        document.getElementById('cres_c').innerHTML = data.concrete_volume
        document.getElementById('cres_d').innerHTML = data.outer_perimeter
        document.getElementById('cres_e').innerHTML = data.weight
        document.getElementById('cres_f').innerHTML = data.soil_load
        document.getElementById('cres_g').innerHTML = data.total_cost
    } else if (calcId == 'foundation/strip-three') {
        document.getElementById('dres_a').innerHTML = data.basement_area
        document.getElementById('dres_b').innerHTML = data.outer_side_area
        document.getElementById('dres_c').innerHTML = data.concrete_volume
        document.getElementById('dres_d').innerHTML = data.outer_perimeter
        document.getElementById('dres_e').innerHTML = data.weight
        document.getElementById('dres_f').innerHTML = data.soil_load
        document.getElementById('dres_g').innerHTML = data.total_cost
    } else if (calcId == 'foundation/strip-four') {
        document.getElementById('eres_a').innerHTML = data.basement_area
        document.getElementById('eres_b').innerHTML = data.outer_side_area
        document.getElementById('eres_c').innerHTML = data.concrete_volume
        document.getElementById('eres_d').innerHTML = data.outer_perimeter
        document.getElementById('eres_e').innerHTML = data.weight
        document.getElementById('eres_f').innerHTML = data.soil_load
        document.getElementById('eres_g').innerHTML = data.total_cost
    } else if (calcId == 'foundation/concrete-ring') {
        document.getElementById('gres_a').innerHTML = data.concrete_volume
        document.getElementById('gres_b').innerHTML = data.inner_diameter
        document.getElementById('gres_c').innerHTML = data.inner_volume
        document.getElementById('gres_d').innerHTML = data.mesh_height
        document.getElementById('gres_e').innerHTML = data.mesh_width
        document.getElementById('gres_f').innerHTML = data.mesh_area
        document.getElementById('gres_g').innerHTML = data.weight
    } 
    

    else if (calcId == 'material/insulation') {
        document.getElementById('ares_a').innerHTML = data.sheet_area
        document.getElementById('ares_b').innerHTML = data.sheet_volume
        document.getElementById('ares_c').innerHTML = data.sheet_amount_one
        document.getElementById('ares_d').innerHTML = data.surface_area
        document.getElementById('ares_e').innerHTML = data.insulation_thickness
        document.getElementById('ares_f').innerHTML = data.insulation_volume
        document.getElementById('ares_g').innerHTML = data.sheet_amount
        document.getElementById('ares_h').innerHTML = data.total_cost
        document.getElementById('ares_i').innerHTML = data.total_weight
    } else if (calcId == 'material/decking') {
        document.getElementById('bres_a').innerHTML = data.flooring_area
        document.getElementById('bres_b').innerHTML = data.flooring_board_amount
        document.getElementById('bres_c').innerHTML = data.flooring_board_volume
    } else if (calcId == 'material/tile') {
        document.getElementById('cres_a').innerHTML = data.surface_area
        document.getElementById('cres_b').innerHTML = data.tile_amount
        document.getElementById('cres_c').innerHTML = data.tile_amount_square
        document.getElementById('cres_d').innerHTML = data.waste
    } else if (calcId == 'material/covering') {
        document.getElementById('dres_a').innerHTML = data.minimal_waste
        document.getElementById('dres_b').innerHTML = data.minimal_waste_square
    } else if (calcId == 'material/lining') {
        document.getElementById('eres_a').innerHTML = data.surface_area
        document.getElementById('eres_b').innerHTML = data.lining_amount
        document.getElementById('eres_c').innerHTML = data.package_amount
        document.getElementById('eres_d').innerHTML = data.cost
    } else if (calcId == 'material/primer') {
        document.getElementById('fres_a').innerHTML = data.surface_area
        document.getElementById('fres_b').innerHTML = data.material_waste
        document.getElementById('fres_c').innerHTML = data.material_weight
    } else if (calcId == 'material/paint') {
        document.getElementById('gres_a').innerHTML = data.surface_area
        document.getElementById('gres_b').innerHTML = data.paint_volume
        document.getElementById('gres_c').innerHTML = data.bank_amount
        document.getElementById('gres_d').innerHTML = data.cost_one
        document.getElementById('gres_e').innerHTML = data.cost
    } else if (calcId == 'material/plaster') {
        document.getElementById('hres_a').innerHTML = data.surface_area
        document.getElementById('hres_b').innerHTML = data.material_waste
        document.getElementById('hres_c').innerHTML = data.material_weight
        document.getElementById('hres_d').innerHTML = data.package_amount
        document.getElementById('hres_e').innerHTML = data.cost
    } else if (calcId == 'material/putty') {
        document.getElementById('ires_a').innerHTML = data.surface_area
        document.getElementById('ires_b').innerHTML = data.material_waste
        document.getElementById('ires_c').innerHTML = data.material_weight
        document.getElementById('ires_d').innerHTML = data.package_amount
        document.getElementById('ires_e').innerHTML = data.cost
    } else if (calcId == 'material/screed') {
        document.getElementById('jres_a').innerHTML = data.surface_area
        document.getElementById('jres_b').innerHTML = data.material_waste
        document.getElementById('jres_c').innerHTML = data.material_weight
        document.getElementById('jres_d').innerHTML = data.package_amount
        document.getElementById('jres_e').innerHTML = data.cost
    } else if (calcId == 'material/equalizer') {
        document.getElementById('kres_a').innerHTML = data.surface_area
        document.getElementById('kres_b').innerHTML = data.material_waste
        document.getElementById('kres_c').innerHTML = data.material_weight
        document.getElementById('kres_d').innerHTML = data.package_amount
        document.getElementById('kres_e').innerHTML = data.cost
    } else if (calcId == 'material/adhesive') {
        document.getElementById('lres_a').innerHTML = data.surface_area
        document.getElementById('lres_b').innerHTML = data.material_waste
        document.getElementById('lres_c').innerHTML = data.material_weight
        document.getElementById('lres_d').innerHTML = data.package_amount
        document.getElementById('lres_e').innerHTML = data.cost
    } else if (calcId == 'material/wallpaper') {
        document.getElementById('mres_a').innerHTML = data.wall_area
        document.getElementById('mres_b').innerHTML = data.roll_amount
        document.getElementById('mres_c').innerHTML = data.sheet_amount
        document.getElementById('mres_d').innerHTML = data.sheet_length
        document.getElementById('mres_e').innerHTML = data.cost
    } else if (calcId == 'material/plinth') {
        document.getElementById('nres_a').innerHTML = data.plinth
        document.getElementById('nres_b').innerHTML = data.room_area
        document.getElementById('nres_c').innerHTML = data.total_cost
    }
    

    else if (calcId == 'plumber/volume') {
        document.getElementById('ares_a').innerHTML = data.wall_area
        document.getElementById('ares_b').innerHTML = data.roll_amount
        document.getElementById('ares_c').innerHTML = data.sheet_amount
        document.getElementById('ares_d').innerHTML = data.sheet_length
        document.getElementById('ares_e').innerHTML = data.cost
    } else if (calcId == 'plumber/amount') {
        document.getElementById('bres_a').innerHTML = data.wall_area
        document.getElementById('bres_b').innerHTML = data.roll_amount
        document.getElementById('bres_c').innerHTML = data.sheet_amount
        document.getElementById('bres_d').innerHTML = data.sheet_length
        document.getElementById('bres_e').innerHTML = data.cost
    }
}
