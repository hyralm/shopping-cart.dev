Stripe.setPublishableKey('pk_test_dmVsNGzb3qHUsEYGBaGOWmbK');

let $form = $('#checkout-form');

$form.submit(function(event) {
    $('#payment-errors').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken($form, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {
    let $form = $('#checkout-form');
    if (response.error) {
        $('#payment-errors').removeClass('hidden')
            .text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        let token = response.id;
        $form.append($('<input type="hidden" name="stripeToken">').val(token));
        $form.get(0).submit();
    }
}