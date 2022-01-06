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
            echo '<input type="text" class="form-input"  name="' . $key . '" value="'. $this->getValue($key).'"> '; 

        }

        public function createInputPhone($key) {
            echo '<label for='. $key . '>'. $key .' : </label>';
            echo '<input type="number" class="form-input"  name="' . $key . '" value="'. $this->getValue($key).'"> '; 

        }

        public function createTextarea($key) {
            echo '<label class="form-label" for='. $key . '>'. $key .' : </label>';
            echo '<textarea class="form-input" id="feedback-2-message"  name="' . $key . '" value="'. $this->getValue($key).'"> '; 

        }

        public function createSubmit($text) {
            echo '<button type="submit"  class="button button-block button-primary">'.$text.'</button>';
        }
 
    }

