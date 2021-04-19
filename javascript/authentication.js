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

function login() {
    var email = document.getElementById("login").value
    var password = document.getElementById("password").value

    firebase.auth().signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Signed in
            var user = userCredential.user;
            window.location.href = "index.php";
        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            alert(errorMessage)
            console.log(errorMessage)
        });
}

function registration() {
    var fullname = document.getElementById("full_name").value
    var email = document.getElementById("login").value
    var password = document.getElementById("password").value
    var password2 = document.getElementById("password2").value

    if (password == password2){
        firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Signed in
            var user = userCredential.user;
            alert(user.uid)
            db.collection("users").doc(user.uid).add({
                email: email,
                name: fullname,
                surname: "Teeeст",
                uid: user.uid
            })
            .then((docRef) => {
                console.log("Document written with ID: ", docRef.id);
                window.location.href = "index.php";
            })
            .catch((error) => {
                console.error("Error adding document: ", error);
            });
            
        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            alert(errorMessage)
            console.log(errorMessage)
        });
    } else {
        alert("Пароли не совпадают!")
    }
}