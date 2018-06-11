$(document).ready(function () {
    $(document).on('click', 'button.delete-hotel-detail', function () {
        let target = $(this).attr('data-target');
        $(target).remove();
    });

    $(document).on('click', 'button.add-hotel-detail', function () {
        $('#hotel_detail_body').append(`
            <tr id="hotel_detail_${hotelDetail}">
                <td>
                    <input placeholder="e.g. Double or Twin" type="text" required name="hotel_detail[${hotelDetail}][room_type]" class="form-control">
                </td>
                <td>
                    <textarea name="hotel_detail[${hotelDetail}][options]" placeholder="e.g. Free Wifi" class="form-control"></textarea>
                </td>
                <td>
                    <input type="number" placeholder="e.g. 2800" name="hotel_detail[${hotelDetail}][price_per_night]" class="form-control"
                        required>
                </td>
                <td>
                    <button type="button" class="btn btn-danger text-center delete-hotel-detail" data-target="#hotel_detail_${hotelDetail}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        `);
        hotelDetail++;
    });
});