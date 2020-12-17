
$('#confirmPassword').on('keyup', function () {
    if ($('#password').val() === $('#confirmPassword').val()) {
        $('#messages').html('Password match').css('color', 'green');
        $('#submitBtn').prop('disabled', false);
    } else {
        $('#messages').html('Password did not match').css('color', 'red');
        $('#submitBtn').prop('disabled', true);
    }
});

$('#email').on('keyup', function (){
    fetch('http://localhost/fitness/api/check/email/' + $('#email').val())
    .then(response => response.json())
    .then(data => {
        if(data.exist){
            $('#message').html("Email Already Exist").css('color','red');
            $('#submitBtn').prop('disabled', true);
            
        }else{
            $('#message').html("");
            $('#submitBtn').prop('disabled', false);
        }
       
    });
});

