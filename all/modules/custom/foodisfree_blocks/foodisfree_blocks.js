(function($) {
    $(document).ready(function(){
        var form  = $("#donateBlockForm")[0],
            nextButton = $("#donateBlockForm .nextButton")[0],
            amountInput = $("#donateBlockForm :input[name='amount']")[0],
            submitted = false,

            validateFormat = function(inputVal){
                if (submitted) return false;

                if (!inputVal || isNaN(inputVal) || inputVal < 0){
                    alert("Please enter a valid dollar amount. Thank you!");
                    return false;
                }

                amountInput.value = parseFloat(inputVal, 10).toFixed(2);
                submitted = true;
                return true;
            };

        form.onsubmit = function(){
            return validateFormat(amountInput.value);
        };
        nextButton.onclick = function(e) {
            if (validateFormat(amountInput.value)) form.submit();
        };
    });
})(jQuery);