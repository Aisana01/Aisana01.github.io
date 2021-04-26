var userId = localStorage.getItem("userID");

function save_calculation(saveTitle, saveCode) {
    var a_length = parseFloat(document.getElementById('a_length').value)
    var b_length = parseFloat(document.getElementById('b_length').value)
    var c_length = parseFloat(document.getElementById('c_length').value)
    var cost = parseFloat(document.getElementById('cost').value)

    var a = parseFloat(document.getElementById('a').value)
    var b = parseFloat(document.getElementById('b').value)
    var c = parseFloat(document.getElementById('c').value)
    var d = parseFloat(document.getElementById('d').value)
    var e = parseFloat(document.getElementById('e').value)
    var f = parseFloat(document.getElementById('f').value)
    var g = parseFloat(document.getElementById('g').value)

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
            total_cost: g
        })
        .then((docRef) => {
            var docID = docRef.id
            db.collection("saveRequests").doc(docID).set({
                    a_length: a_length,
                    b_length: b_length,
                    c_length: c_length,
                    cost: cost,
                })
                .then((docRef) => {
                    console.log("Document written with ID: ", docRef.id);
                })
                .catch((error) => {
                    console.error("Error adding document: ", error);
                });

            db.collection("saveResponses").doc(docID).set({
                    slab_area: a,
                    concrete_volume: b,
                    perimeter: c,
                    side_plate_area: d,
                    weight: e,
                    soil_load: f,
                    total_cost: g
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