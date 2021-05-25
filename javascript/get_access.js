class CalcTypes {
    constructor(calc_title, calc_code, number, calc_category, access) {
        this.calc_title = calc_title;
        this.calc_code = calc_code;
        this.number = number;
        this.calc_category = calc_category;
        this.access = access;
    }
}

// Firestore data converter
var calcConverter = {
    toFirestore: function (calculation) {
        return {
            calc_title: calculation.calc_title,
            calc_code: calculation.calc_code,
            number: calculation.number,
            calc_category: calculation.calc_category,
            access: calculation.access,
        };
    },
    fromFirestore: function (snapshot, options) {
        const data = snapshot.data(options);
        return new CalcTypes(data.calc_title, data.calc_code, data.number, data.calc_category, data.access);
    }
};
var divs = document.getElementsByClassName("sub")
var calculationsArray = []
db.collection("calculations").where("access", "==", "free").withConverter(calcConverter).get().then((querySnapshot) => {
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

$(document).on("click", ".sub", function () {
    if (this.querySelector(".premium") != null){
        // ЗДЕСЬ БУДЕТ МОДОЛЬНОЕ ОКНО
        
    }
});