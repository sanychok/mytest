
$('.reserved').on('click', function () {
    var id = $(this).attr("data-id");
    $.ajax({
        url: 'sector1/index',
        data: {id: id} ,
        type: 'GET',
        success: function(res) {
            console.log(res);
        }
    })
});
