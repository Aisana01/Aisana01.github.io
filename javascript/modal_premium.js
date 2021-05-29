
function premium_get(thisID) {
    var elem = document.getElementById(thisID);
    // console.log(elem);
    if (elem.querySelector(".premium") != null) {
        var modal = document.getElementById("myModalPremium");
        var span = document.getElementsByClassName("close_Premium")[0];
        modal.style.display = "block";
        span.onclick = function () {
            modal.style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }
}