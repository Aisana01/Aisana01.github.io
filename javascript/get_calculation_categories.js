class Categories {
    constructor(id, name) {
        this.id = id;
        this.name = name;
    }
}

// Firestore data converter
var categConverter = {
    toFirestore: function (categ) {
        return {
            id: categ.id,
            name: categ.name,
        };
    },
    fromFirestore: function (snapshot, options) {
        const data = snapshot.data(options);
        return new Categories(data.id, data.name);
    }
};

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

var categArray = []
var state = 0

var docRef = db.collection("calcCategories")
docRef.withConverter(categConverter).get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        categArray.push(doc.data());
    });
}).then(() => {
    var ul = document.getElementById("categories_title");
    var calc_types_ul = document.getElementById("calc_types");
    categArray.sort(function (a, b) {
        if (a.name < b.name) {
            return -1;
        }
        if (a.name > b.name) {
            return 1;
        }
        return 0;
    })
    for (var i = 0; i < categArray.length; i++) {
        var categ_title = categArray[i].name;
        var li = document.createElement('li');
        if (i == 0) {
            fillData(categArray[i].id, calc_types_ul);
        }
        li.addEventListener('click', function (e) {
            if (e.target.tagName === 'A') {
                fillData(e.target.id, calc_types_ul); // Check if the element is a A
            }
        });
        state = 1
        var a = document.createElement('a');
        a.setAttribute("id", categArray[i].id);
        a.appendChild(document.createTextNode(categ_title));
        li.appendChild(a);
        ul.appendChild(li);
    }
});

var accessArray = [];

function fillData(id, ul) {
    accessArray = []
    if (state == 1) {
        while (ul.firstChild) {
            ul.removeChild(ul.firstChild);
        }
    }
    var calculationsArray = []
    db.collection("calculations").where("calc_category", "==", id).withConverter(calcConverter).get().then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            calculationsArray.push(doc.data());
        });
    }).then(() => {
        calculationsArray.sort(function (a, b) {
            if (a.number < b.number) {
                return -1;
            }
            if (a.number > b.number) {
                return 1;
            }
            return 0;
        })

        for (var i = 0; i < calculationsArray.length; i++) {
            var calcTypes = calculationsArray[i];
            accessArray.push([calcTypes.calc_code, calcTypes.access]);
            var li = document.createElement('li');
            li.setAttribute("tabindex", "-1");
            li.setAttribute("role", "option");

            var div = document.createElement('div');
            div.setAttribute("class", "custom-control custom-checkbox mb-0");

            var label = document.createElement('label');
            label.setAttribute("for", calcTypes.calc_code);
            label.appendChild(document.createTextNode(calcTypes.calc_title));

            var input = document.createElement('input');
            input.setAttribute("id", calcTypes.calc_code);
            input.setAttribute("value", calcTypes.calc_code);
            input.setAttribute("name", "access-checkbox");
            input.setAttribute("type", "checkbox");
            if (calcTypes.access == "paid") {
                input.setAttribute("checked", "true");
            }

            div.appendChild(label);
            div.appendChild(input);
            li.appendChild(div);
            ul.appendChild(li);
        }
    })
}

function save_access(){
    var newAccessArray = []
    var checkboxes = document.getElementsByName('access-checkbox');
    for (var checkbox of checkboxes)
    {
        if (checkbox.checked) {
            newAccessArray.push([checkbox.value, "paid"])
        } else {
            newAccessArray.push([checkbox.value, "free"])
        }
    }
    console.log(accessArray)
    console.log(newAccessArray)
    for (var i = 0; i < newAccessArray.length; i++){
        if (accessArray[i][1] != newAccessArray[i][1]){
            console.log(accessArray[i])
            db.collection("calculations").doc(newAccessArray[i][0]).update({
                access: newAccessArray[i][1]
            })
            .then(() => {
                console.log("Document successfully updated!");
                accessArray = newAccessArray
            })
            .catch((error) => {
                // The document probably doesn't exist.
                console.error("Error updating document: ", error);
            });
        }
    }
}