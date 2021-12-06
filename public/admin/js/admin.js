$(document).ready(function () {

// ======================================= Order table page ==================================================================
    $('.delete-search').on('click', function () {
        $(this).siblings().val('');
    });
    // id form category admin
    $('#delete-cate').on('click', function () {
        $(this).siblings().val('');
    });
    $('.icon-search').on('click', function () {
        $('#form-search').submit();
    });
    $('.sortOrder').change(function () {
        this.form.submit();
    });
    $('.sortProduct').change(function () {
        this.form.submit();
    });
    $('#select-category').change(function () {
        this.form.submit();
    });
    //date picker flatpick}}

    $('#picker').daterangepicker({
            opens: 'left'
        }, function (startDate, endDate, label) {
            $('#startDate').val(startDate.format('YYYY-MM-DD'));
            $('#endDate').val(endDate.format('YYYY-MM-DD'));
        });
    //update status
    $('.status-update').change(function () {
        this.form.submit();
    });




















});
