<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CreateView
 *
 * @author apdil
 */
class CreateView {
    public $tweet;
    
    function __construct($tweet) {
        $this->tweet = $tweet;
    }

        function divStruc (){
        echo '<article>'. $this->tweet .'</article>';
    }
    
}
