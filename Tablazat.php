<?php
    class Tablazat
    {
        protected $oszlop_Szam;
        protected $oszlop_Nevek=array();
        protected $tablazat_Sorai = array();

        //konstruktor
        function __construct($oszlop_Nevek)
        {
            //Táblázat kezdetekor fejlécet kap
            $this->oszlop_Nevek=$oszlop_Nevek;
            $this->oszlop_Szam=count($oszlop_Nevek);
        }

        function uj_Sor($sor)
        {
            if (count($sor)==$this->oszlop_Szam)
            {
                // ha rendben van felvesszük az új sort
                array_push($this->tablazat_Sorai, $sor);
                return true;
            }
            else
            {
                return false;
            }   
        }
        function kiir()
        {
            print "<pre>";
            // fejléc bejárása és kiírása
            foreach($this->oszlop_Nevek as $oszlop_Nev)
            {
                print "$oszlop_Nev";
            }
            print "<br>";
            //táblázat adatainak bejárása ( var $tablazat_Sorai = array())
            foreach($this->tablazat_Sorai as $t_Sorai)
            {
                foreach($t_Sorai as $x_Cella)
                {
                    print " $x_Cella";
                }
                print "<br>";        
            }
            print "</pre>";
        }
    }
?>