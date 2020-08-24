$('#final_quantity, #starting_quantity').on('change', function () {
    var finalValue = $('#final_quantity').val();
    var initialValue = $('#starting_quantity').val();
    var elementMessage = $('.difference-between');
    var amount = initialValue - finalValue;

    elementMessage.text('');

    if (amount > 0 ) {
        elementMessage.append('<strong>A diferença da carga é de ' + amount + ' Kg positivo.</strong>');
    }

    if (amount < 0) {
        elementMessage.append('<strong>A diferença da carga é de ' + amount + ' Kg.</strong>');
    }
});
