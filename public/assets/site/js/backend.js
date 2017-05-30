/**
 * Created by Mina on 5/30/2017.
 */
jQuery(document).ready(function ($) {

    $(function () {

        // Get the form.
        var form = $('#ajax-contact');

        // Get the messages div.
        var formMessages = $('#contactSuccess');
        var failMessages = $('#contactError');

        // Set up an event listener for the contact form.
        $(form).submit(function (e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(form).serialize();
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
                .done(function () {
                    // Make sure that the formMessages div has the 'success' class.
                    var response = "Thank you for contacting us .. We will get back to you soon"
                    $(formMessages).removeClass('hidden');


                    // Set the message text.
                    $(formMessages).text(response);

                    // Clear the form.
                    $('#name').val('');
                    $('#email').val('');
                    $('#phone').val('');
                    $('#message').val('');
                })
                .fail(function (data) {
                    // Make sure that the formMessages div has the 'error' class.
                    var response = "Sorry There Was An Error !!"
                    $(failMessages).removeClass('hidden');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(formMessages).text(response);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });

        });


    });
});