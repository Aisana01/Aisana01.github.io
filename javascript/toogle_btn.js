$('.toggle-password').on('click', function() {
    $(this).toggleClass('fa-eye fa-eye-slash');
    var input = document.getElementById('password');
    if (input.type == 'password') {
        input.type = 'text';
    } else {
        input.type = 'password';
    }
});

$('.toggle-password2').on('click', function() {
$(this).toggleClass('fa-eye fa-eye-slash');
var input2 = document.getElementById('password2');
if (input2.type == 'password') {
    input2.type = 'text';
} else {
    input2.type = 'password';
}
});

