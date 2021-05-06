var userId = localStorage.getItem("userID");

class UserSave {
    constructor (user_id, save_title, calc_category, save_code, save_date, save_doc_id, total_cost ) {
        this.user_id = user_id;
        this.save_title = save_title;
        this.calc_category = calc_category;
        this.save_code = save_code;
        this.save_date = save_date;
        this.save_doc_id = save_doc_id;
        this.total_cost = total_cost;
    }

    copy(docID) {
        return new UserSave(this.user_id, this.save_title, this.calc_category, this.save_code, this.save_date, docID, this.total_cost);
    }
    
}

// Firestore data converter
var saveConverter = {
    toFirestore: function(save) {
        return {
            user_id: save.user_id,
            save_title: save.save_title,
            calc_category: save.calc_category,
            save_code: save.save_code,
            save_date: save.save_date,
            save_doc_id: save.save_doc_id,
            total_cost: save.total_cost
            };
    },
    fromFirestore: function(snapshot, options){
        const data = snapshot.data(options);
        return new UserSave(data.user_id, data.save_title, data.calc_category, data.save_code, data.save_date, data.save_doc_id, data.total_cost);
    }
};

var saveArray = []

var docRef = db.collection("saves").where("user_id", "==", userId)
console.log("UserId: " + userId)
docRef.withConverter(saveConverter).get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        saveArray.push(doc.data().copy(doc.id));
        // doc.data() is never undefined for query doc snapshots
        console.log(doc.id, " => ", doc.data().copy(doc.id));
    });
}).then(() => {
    console.log(saveArray)
    var ul = document.getElementById("saves_title");

    for (var i = 0; i < saveArray.length; i++) {
        var save_title = saveArray[i].save_title;
        var li = document.createElement('li');
        
        li.addEventListener('click', function(e) {
            if (e.target.tagName === 'A'){
                fillData(e.target.id);  // Check if the element is a LI
            }
        });
        var a = document.createElement('a');
        a.setAttribute("id", saveArray[i].save_doc_id);
        a.appendChild(document.createTextNode(save_title));
        li.appendChild(a);
        ul.appendChild(li);
    }
});

function fillData(id){
    var saveCode = ''
    var saveRequest = ''
    console.log(id)
    db.collection("saves").doc(id).get().then((doc) => {
        if (doc.exists) {
            var saveDoc = doc.data()
            console.log("Save data:", saveDoc);
            saveCode = saveDoc.save_code
        } else {
            // doc.data() will be undefined in this case
            console.log("No such document!");
        }
    }).catch((error) => {
        console.log("Error getting document:", error);
    });

    db.collection("saveRequests").doc(id).get().then((doc) => {
        if (doc.exists) {
            saveRequest = doc.data()
            console.log("Request data:", saveRequest);
        } else {
            // doc.data() will be undefined in this case
            console.log("No such document!");
        }
    }).catch((error) => {
        console.log("Error getting document:", error);
    });

    db.collection("saveResponses").doc(id).get().then((doc) => {
        if (doc.exists) {
            var saveResponse = doc.data()
            console.log("Response data:", saveResponse);
            fillDataInner(saveRequest, saveResponse, saveCode)
        } else {
            // doc.data() will be undefined in this case
            console.log("No such document!");
        }
    }).catch((error) => {
        console.log("Error getting document:", error);
    });
}

function fillDataInner(saveRequest, saveResponse, saveCode){
    if(saveCode == 'fundamentFirst') {
        chooseBlock('index.php #block1', function() {
        
            document.getElementById('aa').value = saveRequest.a_length
            document.getElementById('ab').value = saveRequest.b_length
            document.getElementById('ac').value = saveRequest.c_length
            document.getElementById('ad').value = saveRequest.cost

            document.getElementById('ares_a').innerHTML = saveResponse.slab_area
            document.getElementById('ares_b').innerHTML = saveResponse.concrete_volume
            document.getElementById('ares_c').innerHTML = saveResponse.perimeter
            document.getElementById('ares_d').innerHTML = saveResponse.side_plate_area
            document.getElementById('ares_e').innerHTML = saveResponse.weight
            document.getElementById('ares_f').innerHTML = saveResponse.soil_load
            document.getElementById('ares_g').innerHTML = saveResponse.total_cost
        })
    } else if(saveCode == 'fundamentSecond') {
        chooseBlock('index.php #block2', function() {
        
            document.getElementById('ba').value = saveRequest.a_length
            document.getElementById('bb').value = saveRequest.b_length
            document.getElementById('bc').value = saveRequest.c_length
            document.getElementById('bd').value = saveRequest.d_length
            document.getElementById('be').value = saveRequest.cost

            document.getElementById('bres_a').innerHTML = saveResponse.basement_area
            document.getElementById('bres_b').innerHTML = saveResponse.outer_side_area
            document.getElementById('bres_c').innerHTML = saveResponse.concrete_volume
            document.getElementById('bres_d').innerHTML = saveResponse.outer_perimeter
            document.getElementById('bres_e').innerHTML = saveResponse.weight
            document.getElementById('bres_f').innerHTML = saveResponse.soil_load
            document.getElementById('bres_g').innerHTML = saveResponse.total_cost
        })
    } else if(saveCode == 'fundamentThird') {

    } else if(saveCode == 'fundamentFourth') {

    } else if(saveCode == 'fundamentFifth') {

    } else if(saveCode == 'fundamentSixth') {

    } else if(saveCode == 'fundamentSeventh') {

    } else if(saveCode == 'material/decking') {

    } else if(saveCode == 'material/tile') {

    } else if(saveCode == 'material/covering') {

    } else if(saveCode == 'material/lining') {

    } else if(saveCode == 'material/primer') {

    } else if(saveCode == 'material/paint') {

    } else if(saveCode == 'material/plaster') {

    } else if(saveCode == 'material/putty') {

    } else if(saveCode == 'material/screed') {

    } else if(saveCode == 'material/equalizer') {

    } else if(saveCode == 'material/adhesive') {

    } else if(saveCode == 'material/wallpaper') {

    } else if(saveCode == 'material/plinth') {
    }
}

function chooseBlock(calcCode, _callback){
    $("#apend").load("http://localhost/ibuild-web/" + calcCode, function() {
        document.getElementsByClassName("button_primary")[0].remove();
        document.getElementsByClassName("result_calc_title")[0].style.display = "none";
        var inputs = document.getElementsByClassName("form_control_calc")
        for(var i = 0; i < inputs.length; i++) {
            inputs[i].disabled = true;
        }
        var Divbtn = document.getElementsByClassName("main_section")[0];
        var btn = document.createElement('button');
        btn.setAttribute("id", "button_primary");
        btn.classList.add("button_primary");
        btn.appendChild(document.createTextNode("Распечатать"));
        btn.setAttribute("onclick","demoFromHTML();");
        Divbtn.appendChild(btn);
        // console.log(btn);
        btn.style = "margin-top: 0;";
        var target = document.getElementsByClassName("target")[0];
        target.style = "padding: 41px; display:block;";
        var trg_d = document.getElementsByClassName("title_section")[0];
        var landing_right = document.getElementsByClassName("landing_large_calc")[0];
        landing_right.style = "width:100%;";
        var landing_left = document.getElementsByClassName("result_calc_words")[0];
        landing_left.style = "width:100%;";
        // trg_d.style.display = "none";
        _callback();
    })
}



