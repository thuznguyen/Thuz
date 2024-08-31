function validatePaymentForm() {
    let firstName = document.forms["paymentForm"]["firstName"].value;
    let lastName = document.forms["paymentForm"]["lastName"].value;
    let email = document.forms["paymentForm"]["email"].value;
    let invoiceId = document.forms["paymentForm"]["invoiceId"].value;
    let payForChecked = false;

    let checkboxes = document.forms["paymentForm"]["payFor[]"];
    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            payForChecked = true;
            break;
        }
    }

    if (firstName == "" || lastName == "" || email == "" || invoiceId == "") {
        alert("Các trường Name, Last Name, Email và Invoice ID đều bắt buộc.");
        return false;
    }

    if (isNaN(invoiceId)) {
        alert("Invoice ID phải là một số.");
        return false;
    }

    if (!payForChecked) {
        alert("Bạn phải chọn ít nhất một mục trong Pay For.");
        return false;
    }

    return true;
}