var firebaseConfig = {
    apiKey: "AIzaSyBU--GVpn2IAuPzpf3s4kY_-U0g64fFLLM",
    authDomain: "ibuild-diploma.firebaseapp.com",
    projectId: "ibuild-diploma",
    storageBucket: "ibuild-diploma.appspot.com",
    messagingSenderId: "443480308247",
    appId: "1:443480308247:web:7be535d0f1db6002ad3a52"
};

firebase.initializeApp(firebaseConfig);

var db = firebase.firestore();

function save_calculation(saveTitle, saveCode) {
    var a_length = document.getElementById('a_length').value
    var b_length = document.getElementById('b_length').value
    var c_length = document.getElementById('c_length').value
    var cost = document.getElementById('cost').value

    var a = document.getElementById('a').value
    var b = document.getElementById('b').value
    var c = document.getElementById('c').value
    var d = document.getElementById('d').value
    var e = document.getElementById('e').value
    var f = document.getElementById('f').value
    var g = document.getElementById('g').value

    var currentdate = new Date(); 
    var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();

    db.collection("saves").add({
        user_id: firebase.auth().uid,
        save_title: saveTitle,
        save_code: saveCode,
        save_date: datetime,
        save_doc_id: "",
        calc_category: "Плита фундамента",
        total_cost: g
        })
        .then((docRef) => {
            console.log("Document written with ID: ", docRef.id);
        })
        .catch((error) => {
            console.error("Error adding document: ", error);
        });
}