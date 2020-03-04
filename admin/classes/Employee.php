<?php
    class Employee{
        private $manv,$name,$gender,$indentification,$phone,$address,$role;

        public function __destruct()
        {
            // TODO: Implement __destruct() method.
        }


        /**
         * Employee constructor.
         * @param $manv
         * @param $name
         * @param $gender
         * @param $indentification
         * @param $phone
         * @param $address
         * @param $role
         */
        public function __construct($manv, $name, $gender, $indentification, $phone, $address, $role)
        {
            $this->manv = $manv;
            $this->name = $name;
            $this->gender = $gender;
            $this->indentification = $indentification;
            $this->phone = $phone;
            $this->address = $address;
            $this->role = $role;
        }

    }