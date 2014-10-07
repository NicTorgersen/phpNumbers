<?php

    class Numbers {
        private $_file,
                $_missingNumber,
                $_start;

        // Takes a string
        public function __construct ($file, $start) {
            $this->_file = $file;
            $this->_start = $start;
            $this->_missingNumber = $start;
        }

        // Gets file from mem
        // returns number
        // if number is not found???
        // false
        public function getMissingNumber () {
            // checks if file is not null
            if ($this->_file) {
                $file = fopen($this->_file, 'r');
                // explodes on newline to get every line in it's own array element
                $fields = explode(", ", fread($file, filesize($this->_file)));
                // loop each field to get a number we KNOW SHOULD exist
                foreach ($fields as $key => $number) {
                    if ($number != $key + 1) {
                        $this->_missingNumber = $key+1;
                        return $this->_missingNumber;
                    }
                }
            }
            return false;
        }
    }