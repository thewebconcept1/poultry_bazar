$(document).ready(function () {
    // Post Request Delete Data variable

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

    // Success response sweet alert
    function SuccessAlert(message) {
        Swal.fire({
            position: "center",
            icon: "success",
            title: `<span class="font-semibold">${message}</span>`,
            showConfirmButton: false,
            timer: 2000,
        });
    }
    // Error response sweet alert

    function WarningAlert(message) {
        Swal.fire({
            position: "center",
            icon: "success",
            title: `<span class="font-semibold text-green-600">${message}</span>`,
            showConfirmButton: false,
            timer: 2000,
        });
    }

    // Reload dataTable function
    function reloadDataTable() {
        // Destroy the existing DataTable instance
        let table = $("#datatable").DataTable();
        table.destroy();
        $("#loading").show();

        // Reload the table body content
        $("#tableBody").load(" #tableBody > *", function () {
            // Reinitialize DataTable after loading new data
            $("#datatable").DataTable();
            $("#loading").hide();
            delDataFun();
            updateDatafun();
        });
    }

    // function delDataFun() {

    //     $(".deleteDataBtn").click(function () {
    //         let id = $(this).attr("delId");
    //         let url = "/deleteCities";
    //         let csrfToken = $('meta[name="csrf-token"]').attr("content");

    //         $.ajax({
    //             type: "POST",
    //             url: url,
    //             data: {
    //                 city_id: id,
    //             },
    //             headers: {
    //                 "X-CSRF-TOKEN": csrfToken,
    //             },
    //             beforeSend: function () {
    //                 $("#loading").show();
    //             },

    //             success: function (response) {
    //                 // $("#tableBody").load(" #tableBody > *");
    //                 $("#loading").hide();
    //                 // Reload the table body content
    //                 reloadDataTable();
    //                 $(document).trigger("formSubmissionResponse", [
    //                     response,
    //                     SuccessAlert(response.message),
    //                 ]);
    //             },
    //         });
    //     });
    // }
    // delDataFun();

    function delDataFun() {
        $(".deleteDataBtn").click(function () {
            let id = $(this).attr("delId");
            let url = "/deleteCities";
            let csrfToken = $('meta[name="csrf-token"]').attr("content");

            // Show SweetAlert confirmation dialog
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, proceed with AJAX request to delete
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            city_id: id,
                        },
                        headers: {
                            "X-CSRF-TOKEN": csrfToken,
                        },
                        beforeSend: function () {
                            $("#loading").show();
                        },
                        success: function (response) {
                            $("#loading").hide();
                            reloadDataTable();

                            const alert = Swal.fire({
                                title: "Deleted!",
                                text: response.message,
                                icon: "success",
                            });

                            $(document).trigger("formSubmissionResponse", [
                                response,
                                alert,
                            ]);
                        },
                        error: function (xhr) {
                            $("#loading").hide();
                            Swal.fire({
                                title: "Error!",
                                text: "There was an error deleting the city.",
                                icon: "error",
                            });
                        },
                    });
                }
            });
        });
    }

    delDataFun();

    // post data ajax request
    $("#postDataForm").submit(function (e) {
        e.preventDefault();
        let url = $(this).attr("action");
        let formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,

            beforeSend: function () {
                BtnSpinnerShow();
                $("#postDataForm")[0].reset();
            },

            success: function (response) {
                // $("#tableBody").load(" #tableBody > *");
                BtnSpinnerHide();

                // Reload the table body content
                reloadDataTable();
                $(document).trigger("formSubmissionResponse", [
                    response,
                    SuccessAlert(response.message),
                ]);
                delDataFun();
            },

            error: function (error) {
                BtnSpinnerHide();
                console.log("Error:", error);
                $(document).trigger("formSubmissionResponse", [
                    response,
                    WarningAlert(response.message),
                ]);
            },
        });
    });
    $("#datatable").on("draw", function () {
        delDataFun();
        updateDatafun();
    });
});
