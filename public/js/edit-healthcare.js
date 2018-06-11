$(document).ready(function () {
    $(document).on('click', 'button.delete-department-detail', function () {
        let target = $(this).attr('data-target');
        $(target).remove();
    });

    $(document).on('click', 'button.add-department-detail', function () {
        $('#department_detail_body').append(`
            <tr id="department_detail_${departmentDetails}">
                <td>
                    <input placeholder="e.g. Emergency" type="text" required name="department_detail[${departmentDetails}][name]" class="form-control">
                </td>
                <td>
                    <input type="text" name="department_detail[${departmentDetails}][phone]" class="form-control">
                </td>
                <td>
                    <input type="text" placeholder="e.g. 24 Hours" name="department_detail[${departmentDetails}][available_time]" class="form-control" required>
                </td>
                <td>
                    <button type="button" class="btn btn-danger text-center delete-department-detail" data-target="#department_detail_${departmentDetails}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        `);
        departmentDetails++;
    });
});