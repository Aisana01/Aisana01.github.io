var ul = document.getElementById("search_list");
db.collection("calculations").get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        // console.log(doc.id, " => ", doc.data());
        var li = document.createElement('li');
        li.appendChild(document.createTextNode(doc.data().calc_title));
        ul.appendChild(li);
    });
});

document.querySelector('#elastic').oninput = function(){
    let val = this.value.trim().toLowerCase();
    let elasticItems = document.querySelectorAll('.elastic li');
    var block_drp = document.getElementById('drop_dwn');
    if (val !=''){
        elasticItems.forEach(function (elem){
            if(elem.innerText.search(val)==-1){
                elem.classList.add('hide');
                block_drp.classList.add('hide');
                elem.innerHTML = elem.innerText;
                
            }
            else{
                elem.classList.remove('hide');
                let str = elem.innerText;
                elem.innerHTML = insertMark(str.toLowerCase(),elem.innerText.search(val.toLowerCase()),val.length);
            }
        });
    }
    else{
        elasticItems.forEach(function(elem){
            elem.classList.remove('hide');
            block_drp.classList.remove('hide');
            elem.innerHTML = elem.innerText;
        });
    }
}

function insertMark(string,pos,len){
    return string.slice(0,pos) + '<mark>' + string.slice(pos,pos+len)+'</mark>' + string.slice(pos+len)+'<mark>' + string.slice(pos,0);

}