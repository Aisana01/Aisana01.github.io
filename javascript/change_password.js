function changePassword() {
    var userId = localStorage.getItem("userID");
    db.collection("users").doc(userId).get().then((doc) => {
        if (doc.exists) {
            var userData = doc.data()
            var oldPass = document.getElementById('old_password').value
            firebase.auth().signInWithEmailAndPassword(userData.email, oldPass)
                .then((userCredential) => {
                    var newPass1 = document.getElementById('new_password1').value
                    var newPass2 = document.getElementById('new_password2').value
                    if (newPass1 == newPass2) {
                        var user = firebase.auth().currentUser;

                        user.updatePassword(newPass1).then(function () {
                            alert("Пароль обновлен успешно!")
                            window.location.href = "profile.html";
                        }).catch(function (error) {
                            alert(error)
                        });
                    } else {
                        alert("Не одинаковые пароли!")
                    }

                })
                .catch((error) => {
                    alert("Старый пароль введен не правильно!")
                });

        } else {
            // doc.data() will be undefined in this case
            console.log("No such document!");
        }
    }).catch((error) => {
        console.log("Error getting document:", error);
    });
}