
function chng_modal(modalID,spanID) {
        var span = document.getElementsByClassName("close" + spanID)[0];
        modalID.style.display = "block";
        span.onclick = function () {
            modalID.style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target == modalID) {
                modalID.style.display = "none";
            }
        }

}