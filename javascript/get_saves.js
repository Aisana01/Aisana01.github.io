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
    console.log(id)
    db.collection("saveRequests").doc(id).get().then((doc) => {
        if (doc.exists) {
            console.log("Document data:", doc.data());
        } else {
            // doc.data() will be undefined in this case
            console.log("No such document!");
        }
    }).catch((error) => {
        console.log("Error getting document:", error);
    });
}


