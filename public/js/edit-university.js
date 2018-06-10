$(document).ready(function () {
    $(document).on('click', 'button.delete-admission-detail', function () {
        let target = $(this).attr('data-target');
        $(target).remove();
    });

    $(document).on('click', 'button.add-admission-detail', function () {
        $('#admission_detail_body').append(`
            <tr id="admission_detail_${admissionDetails}">
                <td>
                    <input type="text" required name="admission_detail[${admissionDetails}][course_name]" class="form-control">
                </td>
                <td>
                    <select name="admission_detail[${admissionDetails}][course_level]" class="form-control" required>
                        <option value="">Please Select</option>
                        <option value="bachelors">Bachelors</option>
                        <option value="masters">Masters</option>
                        <option value="phd">Ph.D</option>
                    </select>
                </td>
                <td>
                    <input type="date" name="admission_detail[${admissionDetails}][date]" class="form-control" required>
                </td>
                <td>
                    <textarea name="admission_detail[${admissionDetails}][eligibility]" class="form-control" required></textarea>
                </td>
                <td>
                    <button type="button" class="btn btn-danger text-center delete-admission-detail" data-target="#admission_detail_${admissionDetails}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        `);
        admissionDetails++;
    });
});