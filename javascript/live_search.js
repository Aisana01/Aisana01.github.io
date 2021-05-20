var ul = document.getElementById("search_list");
db.collection("calculations").where('calc_category', 'in', ['foundation', 'material', 'wall', 'lumber', 'roof', 'armature', 'earthen']).get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        // console.log(doc.id, " => ", doc.data());
        var li = document.createElement('li');
        li.setAttribute("id", doc.data().calc_category + " " + doc.data().number);
        li.addEventListener('click', function (e) {
            if (e.target.tagName === 'LI') {
                choosePage(e.target.id); // Check if the element is a LI
            }
        });
        li.appendChild(document.createTextNode(doc.data().calc_title));
        ul.appendChild(li);
    });
});

document.querySelector('#elastic').oninput = function () {
    let val = this.value.trim().toLowerCase();
    let elasticItems = document.querySelectorAll('.elastic li');
    var block_drp = document.getElementById('drop_dwn');
    if (val != '') {
        elasticItems.forEach(function (elem) {
            if (elem.innerText.search(val) == -1) {
                elem.classList.add('hide');
                block_drp.classList.add('hide');
                elem.innerHTML = elem.innerText;

            } else {
                elem.classList.remove('hide');
                let str = elem.innerText;
                elem.innerHTML = insertMark(str.toLowerCase(), elem.innerText.search(val.toLowerCase()), val.length);
            }
        });
    } else {
        elasticItems.forEach(function (elem) {
            elem.classList.remove('hide');
            block_drp.classList.remove('hide');
            elem.innerHTML = elem.innerText;
        });
    }
}

function insertMark(string, pos, len) {
    return string.slice(0, pos) + '<mark>' + string.slice(pos, pos + len) + '</mark>' + string.slice(pos + len) + '<mark>' + string.slice(pos, 0);

}

function choosePage(calc_data){
    var category = calc_data.split(" ")[0]
    var number = calc_data.split(" ")[1]
    var page_index = ""
    if (category == "foundation") page_index = "index.php"
    else if (category == "material") page_index = "index5.php"
    else if (category == "wall") page_index = "index2.php"
    else if (category == "lumber") page_index = "index3.php"
    else if (category == "roof") page_index = "index6.php"
    else if (category == "armature") page_index = "index7.php"
    else if (category == "earthen") page_index = "index4.php"
    else page_index = "index.php"

    window.location.href = page_index + "#block" + number;
}