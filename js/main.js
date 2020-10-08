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


/*
 * code inside the docready lister is automatically
 * executed when the document is completely downloaded
 * and rendered in the browser. put your event handlers
 * inside a docready lister for safety.
 */
$(document).ready(function () {
    // this is an even handler that says what to do when
    // the calculate button is pressed
    $("#calculate").click(function () {

        /*
         *  this does no error checking and simply returns true so as to
         *  make the form submit. Complete all server side validation first
         *  then come back here and add client-side code to do validation
         *  prior to submission. Erase 
         */
        return true;
        
    });
});
