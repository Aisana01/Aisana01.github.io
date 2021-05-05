var userId = localStorage.getItem("userID");

function save_calculation(saveTitle, saveCode) {
    var a = parseFloat(document.getElementById('a').value)
    var b = parseFloat(document.getElementById('b').value)
    var c = parseFloat(document.getElementById('c').value)
    var d = parseFloat(document.getElementById('d').value)

    var res_a = parseFloat(document.getElementById('res_a').value)
    var res_b = parseFloat(document.getElementById('res_b').value)
    var res_c = parseFloat(document.getElementById('res_c').value)
    var res_d = parseFloat(document.getElementById('res_d').value)
    var res_e = parseFloat(document.getElementById('res_e').value)
    var res_f = parseFloat(document.getElementById('res_f').value)
    var res_g = parseFloat(document.getElementById('res_g').value)

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
    console.log("UserId: " + userId)
    db.collection("saves").add({
            user_id: userId,
            save_title: saveTitle,
            save_code: saveCode,
            save_date: datetime,
            save_doc_id: "",
            calc_category: "Плита фундамента",
            total_cost: res_g
        })
        .then((docRef) => {
            var docID = docRef.id
            db.collection("saveRequests").doc(docID).set({
                    a_length: a,
                    b_length: b,
                    c_length: c,
                    cost: d,
                })
                .then((docRef) => {
                    console.log("Document written with ID: ", docRef.id);
                })
                .catch((error) => {
                    console.error("Error adding document: ", error);
                });

            db.collection("saveResponses").doc(docID).set({
                    slab_area: res_a,
                    concrete_volume: res_b,
                    perimeter: res_c,
                    side_plate_area: res_d,
                    weight: res_e,
                    soil_load: res_f,
                    total_cost:res_g
                })
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