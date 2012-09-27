<?php

  class robot {
    
    function sayHello() {
      echo 'robot: Hello!';
      echo '<br />';
    }
    
    function sayCiao() {
      echo 'robot: Ciao!';
      echo '<br />';
    }
    
  }
  
  class child {
    function speak() {
      echo 'child: Ciao, giochiamo?!';
      echo '<br />';
    }
  }
?>