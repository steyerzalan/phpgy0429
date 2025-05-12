<?php
class HTMLTablazat extends Tablazat
{
    //* szín megadása rgb-ben
    private $r="255";
    private $g="255";
    private $b="255";

    private $cellaMargo="10px";

    function __construct($oszlop_Nevek, $r=0, $g=0, $b=0)
    {
        Tablazat :: __construct($oszlop_Nevek);
        $this->r=$r;
        $this->g=$g;
        $this->b=$b;
    }

    public function cellaMargoAllit($margo)
    {
        $this->cellaMargo=$margo;
    } 

    public function getR()
    {
        return $this->r;
    }

    public function getG()
    {
        return $this->g;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getCellaMargo()
    {
        return $this->cellaMargo;
    }

    function kiir()
    {
        print "<table class='tabla'>\n";
        print "<tr>\n";
        foreach($this->oszlop_Nevek as $oszlop_Nev)
        {
            print "<th class='fejlec'>$oszlop_Nev</th>\n";
        }
        print "<\tr>\n";

        foreach($this->tablazat_Sorai as $cellak)
        {
            print "<tr>\n";
            foreach($cellak as $x_Cella)
            {
                print "<td class='cella'> $x_Cella</td\n>";
            }
            print "<\tr>\n";       
        }
        print "</table>\n";    
    }

}
?>