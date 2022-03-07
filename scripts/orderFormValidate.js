//orderFormValidate.js
//Now, since the actual validation has been shifted to the
//pattern attribute of the input elements in the HTML file,
//all this script has to do is report that all went well and,
//if required, mention that e-mail replies are not yet available.

function orderFormValidate()
{
    textToDisplay = "<p>Thank you for your order!<br>You may close the browser now.</p>"
    var feedbackDisplay = window.open("", "",
        "width=250, height=100, top=300, left=300");
    feedbackDisplay.document.write(textToDisplay);
}