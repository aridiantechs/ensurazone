$(document).ready(function () {
    // Create an instance of Elements.
    var elements = stripe.elements();
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
    // Create an instance of the card Element.
    var card = elements.create('card', { style: style });
    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function (event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
    // Handle form submission.
    var form = document.getElementById('payment-section');
    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;
    cardButton.addEventListener('click', async (e) => {
        event.preventDefault();
        const { paymentMethod, error } = await stripe.createPaymentMethod(
            'card', card, {
            billing_details: { name: cardHolderName.value }
        }
        );
        if (error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            stripeTokenHandler(paymentMethod);
        }

    });
})

// Submit the form with the token ID.
function stripeTokenHandler(paymentMethod) {
    // Insert the token ID into the form so it gets submitted to the server
    var pay_section = document.getElementById('payment-section');
    var form = document.getElementById('initial-survey');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'paymentMethod');
    hiddenInput.setAttribute('value', paymentMethod.id);
    pay_section.appendChild(hiddenInput);
    // Submit the form
    form.submit();
}