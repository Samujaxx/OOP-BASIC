# PHP-EXPERT

## 2-OOP

## taak04 - Zichtbaarheid

Sinds je begonnen bent met het onderwerp OOP is het je misschien opgevallen dat het woord `public` wordt gebruikt voor een property. Dit woordje geeft aan waar de property te gebruiken is binnen de code. Het woordje __public__ geeft aan dat de property toegankelijk is vanuit de gehele code, ofwel vanuit alle andere Classes/Objecten. Het is geen kwestie van security maar meer van code structuren, dit wordt ook wel __DRY__ coderen genoemd. DRY staat voor Don't Repeat Yourself.

Er zijn nog twee andere woorden die je vaak zult tegenkomen:

- public
  - Toegankelijk vanuit de gehele applicatie
- protected
  - Alleen toegankelijk vanuit de eigen class of een child class
- private
  - Alleen toegankelijk vanuit de eigen class

Maar wacht eens even, wat is nu een `child class`?

Stel je hebt een Voertuig Class met bepaalde properties zoals type, merk en bouwjaar. Dan kun je van deze Class zogenaamde Child classes maken. Zoals een Vliegtuig Class of een Auto Class. Allebei voertuigen. De eigenschappen van de parent, de Voertuig Class, worden dan geerfd en hoef je niet opnieuw te maken (DRY).

![Visibility](images/visilbility.png)

De properties uit de Class Voertuig zijn bijna allemaal toegankelijk vanuit de Child Classes, er staat een `+` voor wat `public` betekent.

### voorbeeld

We gebruiken als voorbeeld de Voertuig Class. En we hebben een Vliegtuig class

```php
class Voertuig{
    public $merk;
    public $type;
    public $bouwjaar;
}


//Voertuig is een Parent class van Vliegtuig. Je codeert dat zo:

class Vliegtuig extends Voertuig{
   public $lengteVleugel;
}








```

Je ziet dat de laatste twee regels hetzelfde resultaat veroorzaken. In dit geval kan je dus beide regels code gebruiken. In de volgende opdracht zal het verschil duidelijker worden als we het gaan hebben over __zichtbaarheid__.

## Leerdoelen

1. [ ] Ik maak een `get`-methode aan die een propertie ophaald

## Opdracht

1. Maak een class _Robot_
2. Geef de Robot class de volgende properties: naam, geluid, voortstuwing
3. Maak twee objecten aan: $wally en $wolly.
4. Geef de properties van de objecten waardes:
   - $wally: naam="wal-e", geluid="beepboop", voortstuwing=rollend
   - $wolly: naam="wol-e", geluid="boopbeep", voortstuwing=lopend
5. Maak in de class nu een method aan die de propertie geluid kan ophalen en tonen op het scherm. Noem deze method `getSound()` en gebruik return
6. Maak gebruik van de method `getSound()` om van beide objecten het geluid op het scherm te tonen

## Bronnen

- [Geek For Geeks - PHP | Classes](https://www.geeksforgeeks.org/php-classes/)
- [Geek For Geeks - PHP | Objects](https://www.geeksforgeeks.org/php-objects/)
