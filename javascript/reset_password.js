function resetPassword(){
    var auth = firebase.auth();
    var userEmail = document.getElementById('user_email').value

    auth.sendPasswordResetEmail(userEmail).then(function() {
        alert("Вам отправлено сообщение на почту")
        location.reload();
      }).catch(function(error) {
        alert(error)
      });
}