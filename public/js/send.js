$(document).ready(function () {

    $("#InputPhone").focus(function (evt) {
        $('#InputPhone').css('background-color', '#fff');
        $('#InputLastName').css('background-color', '#CECECE');
        $('#InputLastName').val('');
        $('#inputHidden').val('InputPhone');
    });

    $("#InputLastName").focus(function (evt) {
        $('#InputLastName').css('background-color', '#fff');
        $('#InputPhone').css('background-color', '#CECECE');
        $('#InputPhone').val('');
        $('#inputHidden').val('InputLastName');
    });

    function validateAddContact() {
        var valid = true;
        var regExLastName = "^([a-zA-Z 'àâéèêôùûçÀÂÉÈÔÙÛÇ-]{1,50})$";
        var regExPhoneNumber = /^0[1-9]\d{8}$/;
        $("#InputLastName-info").hide();
        $("#InputPhone-info").hide();

        if (!$("#InputLastName").val() || $("#InputLastName").val().match(regExLastName) == null) {
            $("#InputLastName-info").show();
            $("#InputLastName-info").html(" (required)");
            $("#InputLastName-info").css('color', 'red');
            $("#InputLastName").css('background-color', '#FFFFDF');

            $("#InputLastName").val("");
            valid = false;
        }

        if (!$("#InputTel").val() || $("#InputTel").val().match(regExPhoneNumber) == null) {
            $("#InputPhone-info").show();
            $("#InputPhone-info").html(" (required)");
            $("#InputPhone-info").css('color', 'red');
            $("#InputTel").css('background-color', '#FFFFDF');

            $("#InputTel").val("");
            valid = false;
        }
        return valid;
    };

    function validateSearchForm() {
        var validateSearchForm = true;
        var regExLastName = "^([a-zA-Z 'àâéèêôùûçÀÂÉÈÔÙÛÇ-]{1,50})$";
        var regExPhoneNumber = /^0[1-9]\d{8}$/;
        $("#InputSearchPhone-info").hide();
        $("#InputSearchLastName-info").hide();

        if ($('#inputHidden').val() == "InputPhone") {
            if ($("#InputPhone").val().length == 0 || $("#InputPhone").val().match(regExPhoneNumber) == null) {
                $("#InputSearchPhone-info").show();
                $("#InputSearchPhone-info").html(" (required)");
                $("#InputSearchPhone-info").css('color', 'red');
                $("#InputSearchPhone").css('background-color', '#FFFFDF');
                validateSearchForm = false;
            }
        }
        if ($('#inputHidden').val() == "InputLastName") {
            if ($("#InputLastName").val().length == 0 || $("#InputLastName").val().match(regExLastName) == null) {
                $("#InputSearchLastName-info").show();
                $("#InputSearchLastName-info").html(" (required)");
                $("#InputSearchLastName-info").css('color', 'red');
                $("#InputLastName").css('background-color', '#FFFFDF');
                validateSearchForm = false;
            }
        }
        return validateSearchForm;
    };

    $('#searchForm').submit(function () {
        var validSearch;
        $('#response').hide();
        validSearch = validateSearchForm();
        if (validSearch) {
            $('.response').html("<b>Loading response...</b>");
            $.ajax({
                type: 'POST',
                url: 'src/form/search.php',
                data: $(this).serialize()
            })
                .done(function (data) {
                    $('#response').show();
                    $('#response').html(data);

                })
                .fail(function () {
                    alert("Posting failed.");

                });
        }
        return false;
    });

    $('#addForm').submit(function () {
        var valid;
        valid = validateAddContact();
        if (valid) {
            $('.response').html("<b>Loading response...</b>");
            $.ajax({
                type: 'POST',
                url: 'src/form/add.php',
                data: $(this).serialize()
            })
                .done(function (data) {
                    $('.response').html(data);

                })
                .fail(function () {
                    alert("Posting failed.");

                });
        }
        return false;
    });
});