$(document).ready(function () {
    // submit btn loading spinner show function
    function BtnSpinnerShow() {
        $("#btnSpinner").removeClass("hidden");
        $("#btnText").addClass("hidden");
        $("#submitBtn").attr("disabled", true);
    }
    // submit btn loading spinner hide function
    function BtnSpinnerHide() {
        $("#btnSpinner").addClass("hidden");
        $("#btnText").removeClass("hidden");
        $("#submitBtn").attr("disabled", false);
    }

    // post data ajax request
    $("#dataForm").submit(function (e) {
        e.preventDefault();
        let url = $(this).attr("action");
        let formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,

            beforeSend: function () {
                BtnSpinnerShow();
                $("#dataForm")[0].reset();
            },

            success: function (response) {
                BtnSpinnerHide();

                $("#tableBody").load(" #tableBody > *");
                const Alert = Swal.fire({
                    position: "center",
                    icon: "success",
                    title: `<span class="font-semibold text-green-600">${response.message}</span>`,
                    showConfirmButton: false,
                    timer: 2000,
                });
                $(document).trigger("formSubmissionResponse", [
                    response,
                    Alert,
                ]);
            },

            error: function (error) {
                BtnSpinnerHide();

                const Alert = Swal.fire({
                    position: "center",
                    icon: "success",
                    title: `<span class="font-semibold text-green-600">${response.message}</span>`,
                    showConfirmButton: false,
                    timer: 2000,
                });
                console.log("Error:", error);
                $(document).trigger("formSubmissionResponse", [
                    response,
                    Alert,
                ]);
            },
        });
    });
});
