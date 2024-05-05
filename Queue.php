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
 
require "QueueNode.php";

/*
* Queue Class
* @Author Aaron Aceves
*/

class Queue {

    protected $myFront; //pointer to the front of the queue
    protected $myBack; //pointer to the back of the queue
    protected $length; //length of the Queue

    /*
    * Initialize the Queue creating a new node
    * @param
    * @return void
    */
    public function __construct()
    {
      $this->length = 0;
    }

    /*
    * return true if Queue is empty, otherwise return false
    * @return Boolean
    */
    public function empty() :bool
    {
      return 0 == $this->length ? true : false;
    }

    /*
    * add a new value to the back of the Queue
    * @param $x string | Int
    * @return void
    */
    public function addQ( $x ) :void
    {
      $newQueueNode = new QueueNode( $x );
      if ( true == $this->empty() ) {
        $this->myFront = $this->myBack = $newQueueNode;
      } else {
        $this->myBack = $this->myBack->next = $newQueueNode;
      }
      $this->length++;
    }

    /*
    * retrieve the data at the front of the Queue
    * @return void
    */
    public function front() :string
    {
      return current($this->myFront);
    }


    /*
    * remove the value at the front of the Queue
    * @param
    * @return void
    */
    public function removeQ()
    {
      if ( true == $this->empty() ) {
          return null;
      }

      $current = $this->myFront;

      if ( 1 == $this->length ) {
        $this->myBack = $this->myFront = null;
      } else {
        $this->myFront = $this->myFront->next;
        $current->next = null;
      }
      $this->length--;
      return $current;
    }

    /*
    * Displays the data stored in the Queue (front to back)
    * @param
    * @return void
    */
    public function display() :void
    {
      while ( null != $this->myFront ) {
        echo $this->myFront->data."\n";
        $this->myFront = $this->myFront->next;
      }
    }
}
