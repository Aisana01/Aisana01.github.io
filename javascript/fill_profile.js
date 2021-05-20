var userId = localStorage.getItem("userID");

db.collection("users").doc(userId).get().then((doc) => {
    if (doc.exists) {
        var userData = doc.data()
        console.log("User data:", userData);
        document.getElementById('user_id').value = userData.uid
        document.getElementById('user_name').value = userData.name
        document.getElementById('user_surname').value = userData.surname
        document.getElementById('user_email').value = userData.email
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
    }
}).catch((error) => {
    console.log("Error getting document:", error);
});