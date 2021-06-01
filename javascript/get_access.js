var userId = localStorage.getItem("userID");

var divs = document.getElementsByClassName("sub")
var calculationsArray = []
if (userId == null){
    db.collection("calculations").where("access", "==", "free").get().then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            calculationsArray.push(doc.data().calc_title);
        });
    }).then(() => {
        for (var i = 0; i < divs.length; i++){
            divTitle = divs[i].innerText.replace("\n", "").replace("Premium", "").replace(/\s+/g, ' ').trim()
            if (calculationsArray.includes(divTitle)){
                divs[i].removeChild(divs[i].lastElementChild)
                divs[i].lastElementChild.style.padding = "16px";
            }
        }
    })
} else {
    db.collection("users").doc(userId).get().then((doc) => {
        if (doc.exists && doc.data().access == "paid") {
            for (var i = 0; i < divs.length; i++){
                divs[i].removeChild(divs[i].lastElementChild)
                divs[i].lastElementChild.style.padding = "16px";
            }
        } else {
            db.collection("calculations").where("access", "==", "free").get().then((querySnapshot) => {
                querySnapshot.forEach((doc) => {
                    calculationsArray.push(doc.data().calc_title);
                });
            }).then(() => {
                for (var i = 0; i < divs.length; i++){
                    divTitle = divs[i].innerText.replace("\n", "").replace("Premium", "").replace(/\s+/g, ' ').trim()
                    if (calculationsArray.includes(divTitle)){
                        divs[i].removeChild(divs[i].lastElementChild)
                        divs[i].lastElementChild.style.padding = "16px";
                    }
                }
            })
        }
    }).catch((error) => {
        console.log("Error getting document:", error);
    });
}

// $(document).on("click", ".sub", function () {
//     if (this.querySelector(".premium") != null){
//         // ЗДЕСЬ БУДЕТ МОДОЛЬНОЕ ОКНО
        
//     }
// });