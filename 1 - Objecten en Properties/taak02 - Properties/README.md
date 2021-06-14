# OOP BASIC - Objecten en Properties

## taak02 - Properties

Je gebruikt in deze opdracht de properties die je hebt gemaakt bij de class.

### Properties een waarde geven

Je weet hoe je een variabele declareert (aanroept) en een waarde geeft:

```php
$voornaam = 'Mohammed';
$achternaam = "Sadiq";
echo $voornaam; //Mohammed
echo $achternaam; //Sadiq

```

Wij weten nu dat in dit voorbeeld de waarde van `$voornaam` en de waarde van `$achternaam` (`Mohammed Sadiq`) bij elkaar horen. Maar als je heel veel variabelen hebt dan wordt je code al gauw onoverzichtelijk.
We groeperen de stukken code om het zo overzichtelijker te maken. Daarnaast wordt code gestructureerder.

```php
class Student{
    public $voornaam;
    public $achternaam;
}

// het woord public komen we later op terug

$nieuweStudent = new Student(); // hier maken we een object $nieuweStudent aan door gebruik te maken van de class Student
$nieuweStudent->voornaam = 'Marcel';
$nieuweStudent->achternaam = 'Steenhoven';
echo $nieuweStudent->voornaam; //Marcel
```

Maar je zult wel denken, die laatste manier is veel omslachtiger (uitgebreider). De reden is: de waardes `Marcel Steenhoven` zijn aan elkaar gekoppeld door het object __$nieuweStudent__. Bij `Mohammed Sadiq` is dat niet bekend.

## Leerdoelen

1. [ ] Ik geef waardes aan de properties van een gemaakt object

## Opdracht

1. Bij taak1 heb je een class gemaakt voor een auto met daarbij een aantal properties. Geef nu waardes aan deze properties:
   - merk: Tesla
   - kleur: rood
   - type: model 3
   - uitvoering: cabrio
   - brandstof: elektrisch
2. Toon de waardes op het scherm met een echo.

## Bronnen

- [Geek For Geeks - PHP | Classes](https://www.geeksforgeeks.org/php-classes/)
- [Geek For Geeks - PHP | Objects](https://www.geeksforgeeks.org/php-objects/)
