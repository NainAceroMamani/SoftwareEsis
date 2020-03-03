<?php

    class usuarioModel extends Model{

        public $id;
        public $firstName;
        public $lastName;
        public $dni;
        public $cellPhone;
        public $email;
        public $yearStudent;
        public $country;
        public $city;
        public $tipo;
        public $institution;
        public $grade;
        public $voucher;
        /**
         *
         * Model Usuario
         * @return @id
         */

        public function all(){
            $sql = 'SELECT * from v_preinscripcion;';
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }
        public function add(){
            $sql = "CALL Insertar_preins(
                '" . $this->firstName . "', 
                '" . $this->lastName . "', 
                '" . $this->dni . "', 
                '" . $this->cellPhone . "', 
                '" . $this->email . "',   
                '" . $this->country . "', 
                '" . $this->city . "',
                '" . $this->tipo . "', 
                '" . $this->yearStudent . "',
                '" . $this->institution . "',
                '" . $this->grade . "',
                '" . $this->voucher . "');";

            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
        * Model Usuario
        *
        * @return bool
        */
        public function update()
        {
            $sql = 'UPDATE users SET name=:name, email=:email, password=:password, created_ad=:created_ad WHERE id=:id';
            $user =
            [
                'id'        =>  $this->id,
                'name'      =>  $this->name,
                'email'     =>  $this->email,
                'password'  =>  $this->password,
                'created_ad'=>  $this->created_ad
            ];

            try {
            return (parent::query($sql, $user)) ? true : false;
            } catch (Exception $e) {
            throw $e;
            }
        }
    }
