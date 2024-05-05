<?php

/***
 *      #####     #                                       #        #                                      #
 *     #     #   # #   #    # ##### #    #  ####  #####  ###      # #     ##   #####   ####  #    #      # #    ####  ###### #    # ######  ####
 *     # ### #  #   #  #    #   #   #    # #    # #    #  #      #   #   #  #  #    # #    # ##   #     #   #  #    # #      #    # #      #
 *     # ### # #     # #    #   #   ###### #    # #    #        #     # #    # #    # #    # # #  #    #     # #      #####  #    # #####   ####
 *     # ####  ####### #    #   #   #    # #    # #####   #     ####### ###### #####  #    # #  # #    ####### #      #      #    # #           #
 *     #       #     # #    #   #   #    # #    # #   #  ###    #     # #    # #   #  #    # #   ##    #     # #    # #       #  #  #      #    #
 *      #####  #     #  ####    #   #    #  ####  #    #  #     #     # #    # #    #  ####  #    #    #     #  ####  ######   ##   ######  ####
 *
 *      #####                                 #
 *     #     # ###### #    #   ##   # #      ###      ##     ##   #####   ####  #    #       ##    ####  ###### #    # ######  ####       ##   #####     ####  #    #   ##   # #           ####   ####  #    #
 *     # ### # #      ##  ##  #  #  # #       #      #  #   #  #  #    # #    # ##   #      #  #  #    # #      #    # #      #          #  #    #      #    # ##  ##  #  #  # #          #    # #    # ##  ##
 *     # ### # #####  # ## # #    # # #             #    # #    # #    # #    # # #  #     #    # #      #####  #    # #####   ####     #    #   #      #      # ## # #    # # #          #      #    # # ## #
 *     # ####  #      #    # ###### # #       #     ###### ###### #####  #    # #  # # ### ###### #      #      #    # #           #    ######   #      #  ### #    # ###### # #      ### #      #    # #    #
 *     #       #      #    # #    # # #      ###    #    # #    # #   #  #    # #   ## ### #    # #    # #       #  #  #      #    #    #    #   #      #    # #    # #    # # #      ### #    # #    # #    #
 *      #####  ###### #    # #    # # ######  #     #    # #    # #    #  ####  #    # ### #    #  ####  ######   ##   ######  ####     #    #   #       ####  #    # #    # # ###### ###  ####   ####  #    #
 *
 */
 
/*
* Usage without Arguments: php rpnCalculator.php
* Return without arguments calculate and return the result of '3 4 + 2 * 7 /'
* Usage with arguments: php rpnCalculator.php '6 8 + 2 * 2 /'
*/

require "Stack.php";
require "Queue.php";

function evaluateRPN($operators) {
  $stack = new Stack();
  foreach ($operators as $operator) {
    if ( is_numeric($operator) ) {
      $stack->push($operator);
    } else {

      if ( !in_array($operator, ["+", "-", "*", "/"]) ) {
        echo "Unsupported arithmetic operator \n\r";
        exit;
      }

      $right = $stack->pop();
      $left = $stack->pop();
      $stack->push( eval("return $left $operator $right;") );
    }
  }
  return $stack->pop();
}

// Example usage:
$expression = empty($argv[1]) ? '3 4 + 2 * 7 /' : $argv[1]; //Equivalent Math to (3 + 4) * 2 / 7
$operators = explode(' ', $expression);
$result = evaluateRPN($operators);
echo "$result \n\r"; // Outputs the result of the expression
