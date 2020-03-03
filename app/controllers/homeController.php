<?php

    class homeController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'Nuami Framework',
                'bg'    =>  'white'
            ];
            View::render('Nuami', $data);   
        }

        function test(){
            $data =
            [
                'title' => 'Nuami Framework',
                'bg'    =>  'dark'
            ];
            echo '<pre>';
            /*
                try{

                    $user = new  usuarioModel();
                    $user->name         =   'Nain';
                    $user->email        =   'nain.acero@gmail.com';
                    $user->password     =   password_hash("nuamiFramework", PASSWORD_BCRYPT);
                    $user->created_ad   =   now();

                    $id = $user->add();
                    echo $id;


                    $user = new  usuarioModel();
                    $user->id           =   1;
                    $user->name         =   'Nain';
                    $user->email        =   'nain.acero@gmail.com';
                    $user->password     =   password_hash("nuamiFramework", PASSWORD_BCRYPT);
                    $user->created_ad   =   now();

                    print_r($user->update());

                } catch(Exception $e){
                    echo 'Hubo un error : '.$e->getMessage();
                }
            */
            echo '</pre>';
            try{
                $user = new usuarioModel();
                $data = $user->all();
                var_dump($data);
                die();
            }catch(Exception $e){
                echo 'Hubo un error : '.$e->getMessage();
            }

            View::render('test', $data);
        }

        function flash(){
            View::render('flash');
        }

        public function registerUser(){
            try{
                $user = new usuarioModel();
                $user->firstName = "Nain Neptali";
                $user->lastName = "Acero Mamani";
                $user->dni = "74575544";
                $user->cellPhone = "931375941";
                $user->email = "nain.acero24@gamil.com";
                $user->yearStudent = "2020";
                $user->country = "Perú";
                $user->city = "Tacna";
                $user->tipo = "Estudiante";
                $user->institution = "UNJBG";
                $user->grade = "4";
                $user->voucher = "12";
                $user->add();
            }catch(Exception $e){
                echo 'Hubo un error : '.$e->getMessage();
            }
        }

    }
