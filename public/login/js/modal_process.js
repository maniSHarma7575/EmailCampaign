$(document).ready(function() {
    $("button#sub").click(function() {
        var useremail = $('#emailm').val();
        if (useremail != '') {
            $.ajax({
                type: "POST",
                url: "../ForgotPassword/verify",
                data: 'email=' + useremail,
                success: function(message) {

                    if (message == 'ok') {
                        $("#exampleModalCenter").modal('hide');
                        swal("Congrats!", "Password Reset link sent to" + useremail, "success").then(function() {
                            location.reload();
                        });
                    } else if (message == 'noac') {

                    }


                    switch (message) {
                        case 'ok':
                            $("#exampleModalCenter").modal('hide');
                            swal("Congrats!", "Password Reset link sent to" + useremail, "success").then(function() {
                                location.reload();
                            });
                            break;
                        case 'noac':
                            $("#exampleModalCenter").modal('hide');
                            swal("Oops!", "Account dosen't exists!" + message, "error").then(function() {
                                location.reload();
                            });
                            break;
                        case 'no':
                            $("#exampleModalCenter").modal('hide');
                            swal("Oops!", "Account dosen't exists!" + message, "error").then(function() {
                                location.reload();
                            });
                            break;



                    }



                },
                error: function() {
                    swal("Oops!", "Something went wrong! Please try again", "error").then(function() {
                        location.reload();
                    });
                }
            });
        } else {
            $("#exampleModalCenter").modal('hide');
            sweetAlert("Oops...", "Email is required", "error").then(function() {
                location.reload();
            });
        }
    });

});