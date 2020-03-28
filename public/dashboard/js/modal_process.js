$(document).ready(function() {
    $("button#submit").click(function() {
        var useremail = $('#subscriberemail').val();
        var username = $('#subscribername').val();
        var usercategory = $('#subscribercategory').val();

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!useremail.match(mailformat)) {
            sweetAlert("Oops...", "You have entered an invalid email address!", "error");
            return false;
        }


        if (useremail != '' && username != '' && usercategory != '') {
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
                        swal("Oops!", message, "error");
                    }
                },
                error: function() {
                    swal("Oops!", "Something went wrong! Please try again", "error").then(function() {
                        location.reload();
                    });
                }
            });
        } else {
            if (useremail == '') {
                sweetAlert("Oops...", "Email is  required", "error");
            } else if (username == '') {
                sweetAlert("Oops...", "Name is  required", "error");
            } else {
                sweetAlert("Oops...", "Category is  required", "error");
            }
        }
    });

    $("button#category").click(function() {
        var category = $('#newcategory').val();

        if (category != '') {
            $.ajax({
                type: "POST",
                url: "/EmailCampaign/Category/add",
                data: 'category=' + category,
                success: function(message) {
                    if (message == 'ok') {
                        swal("Congrats!", category + " added to list", "success").then(function() {
                            $('#subscribercategory').prepend(`<option value="${category}"> 
                            ${category} 
                       </option>`);
                            var x = document.getElementById("categoryform");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }


                        });
                    } else {
                        swal("Oops!", "Category already added", "error").then(function() {
                            var x = document.getElementById("categoryform");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        });
                    }
                },
                error: function() {
                    swal("Oops!", "Something went wrong! Please try again", "error");
                }
            });
        } else {
            sweetAlert("Oops...", "Category is required", "error");
        }
    });

    $("button#submitEdit").click(function() {
        var useremail = $('#subscriberemail').val();
        var username = $('#subscribername').val();
        var usercategory = $('#subscribercategory').val();
        var subemail = $('#subEmail').val();

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!useremail.match(mailformat)) {
            sweetAlert("Oops...", "You have entered an invalid email address!", "error");
            return false;
        }


        if (useremail != '' && username != '' && usercategory != '') {
            $.ajax({
                type: "POST",
                url: "/EmailCampaign/Subscriber/edit",
                data: 'name=' + username + '&email=' + useremail + '&category=' + usercategory + '&subemail=' + subemail,
                success: function(message) {
                    if (message == 'ok') {
                        $("#example").modal('hide');
                        swal("Congrats!", "Information Successfully Updated", "success").then(function() {
                            location.reload();
                        });
                    } else {
                        swal("Oops!", message, "error");
                    }
                },
                error: function() {
                    swal("Oops!", "Something went wrong! Please try again", "error").then(function() {
                        location.reload();
                    });
                }
            });
        } else {
            if (useremail == '') {
                sweetAlert("Oops...", "Email is  required", "error");
            } else if (username == '') {
                sweetAlert("Oops...", "Name is  required", "error");
            } else {
                sweetAlert("Oops...", "Category is  required", "error");
            }
        }
    });
});