# WebWinkel

## Introductie

Je hebt bij HTML-CSS de frontend gebouwd van een webshop. Die bestanden ga je hier gebruiken om zo een dynamische applicatie te bouwen.

## Opdracht 

Maak onderstaande opdrachten zodat je de frontend (html-css) combineert met je backend (php-mysql).

### Voorbereidingen

1. Kopieer alle bestanden van je HTML-CSS project naar de map __site__
2. Maak in een database een producten tabel aan met de juiste kolommen voor jouw webwinkel
3. Maak in database.php een database-connectie aan met `mysqli`
4. Zorg ervoor dat je de connectie in de verschillende pagina's kunt gebruiken met `require`.


### Product Overzicht

2. Bepaal welke pagina je producten overzicht pagina is en zet de code hiervan in product-index.php
3. De code van alle producten herhaalt zich en deze code gaan we verbouwen.
4. Haal alle dubbele code omtrent je product overzicht weg. Dus stel je hebt 3 producten staan: 

```html
<div class="producten">
    <div class="product-card">
        <div class="product-title">Product 1</div>
        <div class="product-image"><img src="image1.jpg"></div>
        <div class="product-description">Lorem ipsum</div>
    </div>
     <div class="product-card">
        <div class="product-title">Product 2</div>
        <div class="product-image"><img src="image2.jpg"></div>
        <div class="product-description">Lorem ipsum</div>
    </div>
     <div class="product-card">
        <div class="product-title">Product 3</div>
        <div class="product-image"><img src="image3.jpg"></div>
        <div class="product-description">Lorem ipsum</div>
    </div>
</div>
```

Dan haal je dus de code van de onderste twee producten weg:

```html
<div class="producten">
    <div class="product-card">
        <div class="product-title">Product 1</div>
        <div class="product-image"><img src="image1.jpg"></div>
        <div class="product-description">Lorem ipsum</div>
    </div>
     <div class="product-card">
</div>
```

De dat