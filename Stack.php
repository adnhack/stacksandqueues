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
 
require "Node.php";

/*
* Stack Class
* @Author Aaron Aceves
*/

class Stack {

    protected $top;
    protected $height;

    /*
    * Create an empty Stack
    * @param
    * @return void
    */
    public function __construct()
    {
      $this->height = 0;
    }

    /*
    * return true if stack is empty, otherwise return false
    * @return bnoolean
    */
    public function empty() :bool
    {
      return 0 == $this->height ? true : false;
    }

    /*
    * add a new value to the top of the stack
    * @param $x string | Int
    * @return void
    */
    public function push( $x ) :void
    {
      $newNode = new Node( $x );
      $newNode->next = true == $this->empty() ? null : $this->top;
      $this->top = $newNode;
      $this->height++;
    }

    /*
    * retrieves the data that is at the top of the stack
    * @return string
    */
    public function top() :string
    {
      return current($this->top);
    }

    /*
    * removes the value at the top of the stack
    * @return Node Object
    */
    public function pop() :string
    {
      if ( 0 == $this->height ) {
        return null;
      }

      $current = $this->top;
      $this->top = $this->top->next;
      $current->next = null;
      $this->height--;
      return $current->data;
    }

    /*
    * displays the data stored in the stack
    * @return string
    */
    public function display() :void
    {
      while ( null != $this->top ) {
        echo $this->top->data."\n";
        $this->top = $this->top->next;
      }
    }
}
