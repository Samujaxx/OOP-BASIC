<?php

class Luchtvaartuig
{
    public $soort;
    public $brandstof;
    private $bouwjaar;
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
