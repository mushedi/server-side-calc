/*
 * Your comment header here
 */

function validNum(str) {
    // tests for any valid integer or float
    // number must start with a number or - sign
    // no other characters are allowed
    var re = /^(-?\d+\.\d+)$|^(-?\d+)$/;
    return re.test(str);
}

function validate(){

    let errMsg = '';
    let n1 = $('#num1').val().trim();
    let n2 = $('#num2').val().trim();

    $('#num1').val(n1);
    $('#num2').val(n2);

    if( n1 == '' || n2 == ''){
        errMsg += "Inputs cannot be empty! Please enter a number. <br>";
    } else if(!validNum(n1)){
        errMsg += "Please enter a valid number. EX: 8756 <br>";
    } else if(!validNum(n2)){
        errMsg += "Please enter a valid number. EX: 8756 <br>";
    }

    return errMsg;

}
$(document).ready(function () {

    $("#calculate").click(function() {
        let check = validate();
        let submit = '';
        if(check == ''){
            submit = true;
        } else{
            $("#msg").html(check + "<br>");
            submit = false;
        }
        return submit;
    });

});