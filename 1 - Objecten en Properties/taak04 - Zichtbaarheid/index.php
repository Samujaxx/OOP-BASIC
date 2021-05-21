<?php
/**
 * Maak van elke class een object. En gebruik alle properties waartoe het object toegang tot heeft.
 * Goed lezen wat de child-parent relatie is
 * Goed lezen of de property toegankelijk is
 */
class Luchtvaartuig
{
    public $soort;
    public $brandstof;
    protected $bouwjaar;
    private $serienNummer;
}

class Vliegtuig extends Luchtvaartuig
{
    public $merk;
    public $lengteVleugel;
}

class Helicopter extends Vliegtuig //let op Helicopter heeft een andere Parent
{
    public $aantalRotoren;
}

class Luchtballon extends Luchtvaartuig
{
    public $kleur;
}
