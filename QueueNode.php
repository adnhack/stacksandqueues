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
* Queue Node
* @Author Aaron Aceves
*/

class QueueNode {

    public $data;
    public $next;

    /*
    * Initialize the Queue node
    * @param String | Int
    * @return void
    */
    public function __construct( $data )
    {
      $this->data = $data;
      $this->next = null;
    }
}
