# OOP BASIC - Objecten en Properties

## taak04 - Public

Bij de vorige taken hebben we het woord `public` gezet voor een property bij het maken van een Class.

```php
class Voertuig{
  public $model;
}
```

Dit woordje geeft aan wáár de property te gebruiken is binnen de code. Het woordje __public__ geeft aan dat de property toegankelijk is vanuit de gehele code. Het is geen kwestie van security maar meer van code structuren.

### voorbeeld

We gebruiken als voorbeeld een Voertuig Class.

```php
class Voertuig{
    public $merk;
    public $type;
    public $bouwjaar;
    
}

$auto = new Voertuig(); // hier maken we het object $auto van de class Voertuig
$auto->merk = "BMW";
$auto->type = "7 serie";
$auto->bouwjaar = 2015;
```

De properties zijn van buiten de class Voertuig aan te passen. Als we geen `public` hadden gebruikt maar bijvoorbeeld `private` dan hadden we geen toegang tot deze properties gehad en dan zouden we een foutmelding krijgen"

```php

class Fiets{
    private $merk;
    private $type;
    private $bouwjaar;
    
}

$fiets = new Fiets(); // hier maken we het object $auto van de class Voertuig

$fiets->merk = "Victoria"; // error!!! We hebben geen toegang tot merk property
$fiets->type = "800";// error!!! We hebben geen toegang tot type property
$fiets->bouwjaar = 2016;// error!!! We hebben geen toegang tot bouwjaar property
```

## Leerdoelen

1. [ ] Ik maak gebruik van de zichtbaarheid-woorden public

## Opdracht

1. Maak een class Computer
2. Geef de volgende properties: merk, hdd_capacity, memory. Zet ze allemaal op public
3. Maak een object met zelf gekozen waardes.

## Bronnen

- [Geek For Geeks - PHP | Classes](https://www.geeksforgeeks.org/php-classes/)
- [Geek For Geeks - PHP | Objects](https://www.geeksforgeeks.org/php-objects/)
