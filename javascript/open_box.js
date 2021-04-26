function openbox(id) {
    display = document.getElementById(id).style.display;
    if (display == 'none') {
        document.getElementById(id).style.display = 'flex';
    } else {
        document.getElementById(id).style.display = 'none';
    }
}
