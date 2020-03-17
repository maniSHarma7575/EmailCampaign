$(document).ready(function() {
    $("button#submit").click(function() {
        var useremail = $('#subscriberemail').val();
        var username = $('#subscribername').val();
        var usercategory = $('#subscribercategory').val();

        if (useremail != '') {
            $.ajax({
                type: "POST",
                url: "/EmailCampaign/Subscriber/add",
                data: 'name=' + username + '&email=' + useremail + '&category=' + usercategory,
                success: function(message) {
                    if (message == 'ok') {
                        $("#example").modal('hide');
                        swal("Congrats!", username + " added to your subscriber list", "success").then(function() {
                            location.reload();
                        });
                    } else {
                        $("#example").modal('hide');
                        swal("Oops!", message, "error").then(function() {
                            location.reload();
                        });
                    }
                },
                error: function() {
                    swal("Oops!", "Something went wrong! Please try again", "error").then(function() {
                        location.reload();
                    });
                }
            });
        } else {
            $("#example").modal('hide');
            sweetAlert("Oops...", "Email is required", "error").then(function() {
                location.reload();
            });
        }
    });
});