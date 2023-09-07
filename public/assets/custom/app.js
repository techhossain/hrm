(function ($){

    $(document).ready(function(){

        // Click 'delete' button
        $('.delete-btn').on('click', function(e) {
            e.preventDefault();
            $(this).next('#delete-form').children('.modal').addClass('is-active');

        });


        // Click 'delete no' button
        $('.delete-no').on('click', function(e) {
            e.preventDefault();
            $('#delete-form .modal').removeClass('is-active');
        });





    });

})(jQuery);

