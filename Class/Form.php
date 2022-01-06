<?php
    
        
    /**
     * Form
     * 
     * Voici ma classe Form 
     */
    class Form {
        
        private $data;
        
                
        public function __construct($data) {
            $this->data = $data;
        }

        public function getData() {
            return $this->data;
        }
        
        private function getValue($key) {
            if(isset($this->data[$key])) {
                return $this->data[$key];
            } else {
                return NULL;
            }
        }

        private function setValue($key, $value) {
            
        }

        public function createInput($key) {
            echo '<label for='. $key . '>'. $key .' : </label>';
            echo '<input type="text" class="form-control"  name="' . $key . '" value="'. $this->getValue($key).'"> '; 

        }

        public function createSubmit($text) {
            echo '<button type="submit"  class="btn btn-primary">'.$text.'</button>';
        }


       
    }

