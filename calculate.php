<?php
/*
 * Your comment header here
 */


/*
 * this next line is just for debugging. it takes the $_POST variable
 * "dumps" it out and sends it back to the client.
 * Try it in the client and you will see it in both the page
 * and in the console. The $_POST variable is an associative array
 * that corresponds to the line 14 from main.js--> data: {num1: n1, num2: n2, oper: op}
 * notice that $_POST is just an array with the keys "num1", "num2", and "oper"
 * so (for example) if you want to print num1 here, you would: echo $_POST["num1"]
 */
var_dump($_POST);

/* Test this next part to see how $_POST works...
 * comment out the line above and then uncomment the following lines
 * test it and see what happens in browser. notice that the "return"
 * for a server side program is to just print. whatever you print here will
 * go back to the browser.
 */
//echo $_POST["num1"] . PHP_EOL;
//echo $_POST["num2"] . PHP_EOL;
//echo $_POST["oper"] . PHP_EOL;

/*
 * Now get rid of all those debug lines and comments (save them somewhere else if
 * you want to reference them later) and follow these instructions...
 */

/************************************************
**************IMPORTANT**************************
ALL code you ever write, no matter the language, no matter the system,
no matter what, must always follow one simple pattern...

Input -> Validate -> Process -> Output

In this application, follow this process as described below.
*************************************************
************************************************/

// STEP 1 INPUT: get the values of $_POST into local variables
/* place each of the $_POST variables into a local variable. for example...
 * $n1 = $_POST["num1"]; will put the value of $_POST["num1"] in $n1
 * You always do this first to get away from $_POST as fast as possible
 *
 *  **** Keep in mind, these values will all be strings! ****
 */

// STEP 2 VALIDATION <-- MOST IMPORTANT STEP!!!:
/*
 * perform all of the following on your local variables
 *  - trim them (remove white space from beginning and end of the strings)
 *  - validate what should be numbers (num1 and num2) actually contain a string
 *    that corresponds to what will be a valid integer or float
 *    if they don't then make the values 0
 *  - Convert the strings in num1 and num2 to floats
 *  - validate the oper contains only the valid strings "add", "sub", "mul", "div"
 *    if it doesn't default to "add"
 * The reason you do all this is if someone tries
 * to hack your form, all they will get back is 0+0
 */

//STEP 3 PROCESS:
/*
 * use a switch statement based on "add", "sub", "mul", "div" to do the
 * appropriate math and get the answer
 */


//STEP 4 OUTPUT:
/*
 * echo the answer back to the client
 */

