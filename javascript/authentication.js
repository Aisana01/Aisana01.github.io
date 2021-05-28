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

firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        var signedIn = document.getElementById("signedIn");
        var signedOut = document.getElementById("signedOut");
        if (signedIn != null){
            signedIn.style.display = "flex";
            signedOut.style.display = "none";
        }

        console.log("User signed in: " + user.uid + "~")
        localStorage.setItem("userID", user.uid);
    } else {
        var signedIn = document.getElementById("signedIn");
        var signedOut = document.getElementById("signedOut");
        if (signedIn != null){
            signedIn.style.display = "none";
            signedOut.style.display = "block";
        }
        console.log("No user is signed in.")
    }
  });

function login() {
    var email = document.getElementById("login").value
    var password = document.getElementById("password").value

    firebase.auth().signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Signed in
            var user = userCredential.user;
            if (user.email != 'admin@gmail.com') {
                window.location.href = "AboutUs.html";
            } else {
                window.location.href = "adminpg.html";
            }
            
        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            alert(errorMessage)
            console.log(errorMessage)
        });
}

function registration() {
    var name = document.getElementById("name").value
    var lastname = document.getElementById("lastname").value
    var email = document.getElementById("login").value
    var password = document.getElementById("password").value
    var password2 = document.getElementById("password2").value

    if (password == password2){
        firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Signed in
            var user = userCredential.user;
            db.collection("users").doc(user.uid).set({
                email: email,
                name: name,
                surname: lastname,
                uid: user.uid
            })
            .then((docRef) => {
                window.location.href = "index.html";
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

function logout(){
    firebase.auth().signOut().then(() => {
        localStorage.clear();
        console.log("User signed out")
      }).catch((error) => {
        // An error happened.
      });
}
