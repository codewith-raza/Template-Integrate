/**
 * Created by mosaddek on 1/24/18.
 */

$(document).ready(function() {
    var table = $('#show-hide').DataTable( {
        "scrollY": "400px",
        "paging": false
    } );

    $('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();

        // Get the column API object
        var column = table.column( $(this).attr('data-column') );

        // Toggle the visibility
        column.visible( ! column.visible() );
    } );
} );
