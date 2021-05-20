var userId = localStorage.getItem("userID");

function save_calculation(saveTitle, saveCode) {

    console.log("UserId: " + userId)
    db.collection("saves").add(buildObject(saveCode, saveTitle))
        .then((docRef) => {
            var docID = docRef.id
            db.collection("saveRequests").doc(docID).set(
                    buildSaveRequest(saveCode)
                )
                .then((docRef) => {
                    console.log("Document written with ID: ", docRef.id);
                })
                .catch((error) => {
                    console.error("Error adding document: ", error);
                });

            db.collection("saveResponses").doc(docID).set(
                    buildSaveResponse(saveCode)
                )
                .then((docRef) => {
                    console.log("Document written with ID: ", docRef.id);
                })
                .catch((error) => {
                    console.error("Error adding document: ", error);
                });
        })
        .catch((error) => {
            console.error("Error adding document: ", error);
        });
}

function buildObject(saveCode, saveTitle) {
    var object = {}
    if (saveCode == 'fundamentFirst') {
        var title = document.getElementById("calculation_title1").innerText
        var res_g = parseFloat(document.getElementById('ares_g').value)
        object = {
            user_id: userId,
            save_title: saveTitle,
            save_code: saveCode,
            save_date: getDate(),
            save_doc_id: "",
            calc_category: title,
            total_cost: res_g
        }
    } else if (saveCode == 'fundamentSecond') {
        var title = document.getElementById("calculation_title2").innerText
        var res_g = parseFloat(document.getElementById('bres_g').value)
        object = {
            user_id: userId,
            save_title: saveTitle,
            save_code: saveCode,
            save_date: getDate(),
            save_doc_id: "",
            calc_category: title,
            total_cost: res_g
        }
    } else if (saveCode == 'fundamentThird') {

    } else if (saveCode == 'fundamentFourth') {

    } else if (saveCode == 'fundamentFifth') {

    } else if (saveCode == 'fundamentSixth') {

    } else if (saveCode == 'fundamentSeventh') {

    }

    return object;
}

function buildSaveRequest(saveCode) {
    var object = {}
    if (saveCode == 'fundamentFirst') {
        var a = parseFloat(document.getElementById('aa').value)
        var b = parseFloat(document.getElementById('ab').value)
        var c = parseFloat(document.getElementById('ac').value)
        var d = parseFloat(document.getElementById('ad').value)
        object = {
            a_length: a,
            b_length: b,
            c_length: c,
            cost: d,
        }
    } else if (saveCode == 'fundamentSecond') {
        var a = parseFloat(document.getElementById('ba').value)
        var b = parseFloat(document.getElementById('bb').value)
        var c = parseFloat(document.getElementById('bc').value)
        var d = parseFloat(document.getElementById('bd').value)
        var e = parseFloat(document.getElementById('be').value)
        object = {
            a_length: a,
            b_length: b,
            c_length: c,
            d_length: d,
            cost: e,
        }
    } else if (saveCode == 'fundamentThird') {

    } else if (saveCode == 'fundamentFourth') {

    } else if (saveCode == 'fundamentFifth') {

    } else if (saveCode == 'fundamentSixth') {

    } else if (saveCode == 'fundamentSeventh') {

    }

    return object;
}

function buildSaveResponse(saveCode) {
    var object = {}
    if (saveCode == 'fundamentFirst') {
        var res_a = parseFloat(document.getElementById('ares_a').value)
        var res_b = parseFloat(document.getElementById('ares_b').value)
        var res_c = parseFloat(document.getElementById('ares_c').value)
        var res_d = parseFloat(document.getElementById('ares_d').value)
        var res_e = parseFloat(document.getElementById('ares_e').value)
        var res_f = parseFloat(document.getElementById('ares_f').value)
        var res_g = parseFloat(document.getElementById('ares_g').value)
        object = {
            slab_area: res_a,
            concrete_volume: res_b,
            perimeter: res_c,
            side_plate_area: res_d,
            weight: res_e,
            soil_load: res_f,
            total_cost: res_g
        }
    } else if (saveCode == 'fundamentSecond') {
        var res_a = parseFloat(document.getElementById('bres_a').value)
        var res_b = parseFloat(document.getElementById('bres_b').value)
        var res_c = parseFloat(document.getElementById('bres_c').value)
        var res_d = parseFloat(document.getElementById('bres_d').value)
        var res_e = parseFloat(document.getElementById('bres_e').value)
        var res_f = parseFloat(document.getElementById('bres_f').value)
        var res_g = parseFloat(document.getElementById('bres_g').value)
        object = {
            basement_area: res_a,
            outer_side_area: res_b,
            concrete_volume: res_c,
            outer_perimeter: res_d,
            weight: res_e,
            soil_load: res_f,
            total_cost: res_g
        }
    } else if (saveCode == 'fundamentThird') {

    } else if (saveCode == 'fundamentFourth') {

    } else if (saveCode == 'fundamentFifth') {

    } else if (saveCode == 'fundamentSixth') {

    } else if (saveCode == 'fundamentSeventh') {

    }

    return object;
}

function getDate() {
    var currentdate = new Date();
    var month = currentdate.getMonth() + 1;
    var day = (currentdate.getDate() < 10) ? ("0" + currentdate.getDate()) : currentdate.getDate();
    month = (month < 10) ? ("0" + month) : month;
    var hour = (currentdate.getHours() < 10) ? ("0" + currentdate.getHours()) : currentdate.getHours();
    var minute = (currentdate.getMinutes() < 10) ? ("0" + currentdate.getMinutes()) : currentdate.getMinutes();
    var second = (currentdate.getSeconds() < 10) ? ("0" + currentdate.getSeconds()) : currentdate.getSeconds();
    var datetime = day + "/" +
        month + "/" +
        currentdate.getFullYear() + " " +
        hour + ":" +
        minute + ":" +
        second;
    return datetime;
}