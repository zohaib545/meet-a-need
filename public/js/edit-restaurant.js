$(document).ready(function () {
    $(document).on('click', 'button.delete-restaurant-detail', function () {
        let target = $(this).attr('data-target');
        $(target).remove();
    });

    $(document).on('click', 'button.add-restaurant-detail', function () {
        $('#restaurant_detail_body').append(`
            <tr id="restaurant_detail_${restaurantDetails}">
                <td>
                    <input placeholder="e.g. Mexican" type="text" required name="restaurant_detail[${restaurantDetails}][cuisine]" class="form-control">
                </td>
                <td>
                    <button type="button" class="btn btn-danger text-center delete-restaurant-detail" data-target="#restaurant_detail_${restaurantDetails}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        `);
        restaurantDetails++;
    });
});