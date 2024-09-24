<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
/*
        let d = parseInt(prompt("Podaj liczbę dni"), 10);
        let k = parseFloat(prompt("Podaj kwotę"), 10);

        let suma = 0;

        for (let i = 1; i < d+1; i++) {
            suma += k;
            document.write("Dzien: "+i+ " " + " kwota: "+k+ " "+ "suma:"+suma)
            document.write("<br>")
            k += 2;     
        }
        document.write("Wynik to: " + suma); */

        //Wypisac wszystkie liczby 3 cyfrowe nieparzyste i pogrubic te podzielne przez 11


        /*for(let i = 100;i<1000;i++){
            if(i%2===1){
                if(i%11===0){
                    document.write("<b>"+ i+"</b>");
                        document.write(" ");
                }
                else{
                    document.write(i);
                    document.write(" ");
                }
            }

        } */

        //Pobierz od uzytkownika ocene z matematyki (cyfrowa) i przy pomocy switcha zamien ja na nazwe

         /*var ocena = Number(prompt("Podaj swoja ocene"));

        switch(ocena){
            case  1: 
                ocena = "Niedostateczna";
            break;
            case 2: 
            ocena = "Dopuszczajaca";
            break;
            case 3: 
            ocena = "Dostateczna";
            break;
            case 4: 
            ocena = "Dobra";
            break;
            case 5: 
            ocena = "Bardzo dobra";
            break;
            case 6: 
            ocena = "Celowa";
            break;
            
            default: document.write("Podaj jeszcze raz dobra ocene");
            break;
        }

            document.write("otrzymales ocene "+ocena) */

        //Pobierz od uzytkownika dwie liczby calkowite oraz dzialanie jakie chcesz na nich wykonac i wynik w czytelnej postaci wypisz na stronie
        //dzialanie pobieramy w formie znaku, wynik uzaleznic od dzialania i wykonac go switchem

        /*let a = prompt("Podaj pierwsza liczbe");
        let b = prompt("Podaj druga liczbę");
        a = parseInt(a);
        b= parseInt(b);
        let znak = prompt("Podaj znak ktory bedzie potrzebny do dzialania")
        let wynik = 0;
        switch(znak){
            case  "+": 
            wynik = a+b;
            break;
            case "-": 
            wynik = a-b;
            break;
            case "*": 
            wynik = a*b;
            break;
            case "/": 
            wynik = a/b;
            break;
            default: document.write("Podales zly znak");
            break;
        }
        document.write("Twoj wynik dzialania oraz samo dzialanie to:"+a+znak+b+"="+wynik)
        */

        //Od uzytkownika pobierz 3 wartosci liczbowe wyznacz ich srednia arytmetyczna jezeli jest ona wieksza od 10 to policz jej 3 krotnosc


        let a = prompt("Podaj pierwsza liczbe");
        let b = prompt("Podaj druga liczbę");
        let c = prompt("Podaj trzecia liczbę");
        a = parseFloat(a);
        b = parseFloat(b);
        c = parseFloat(c);

        let wynik = (a+b+c)/3;

        if(wynik >= 10){
            document.write("srednia a to"+ wynik)
            wynik = wynik *3;
            document.write(" 3 krotnosc to: "+ wynik)
        }
        else{
            document.write("Wynik to:"+ wynik)
        }

    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Początki JS</title>
</head>
<body>
    <script>
        //Pobierz od uzytkownika poczatkowa kwote deponowana w banku, okres oszczedzania liczony w latach tez pobieramy od uzytkownik
        //Bank oferuje oprocentowanie 5%  w skali roku z kapitalizacja polroczna
        //Teraz wykonaj zestawienie po kazdym polroczu zaoszczedzonym pieniedzy

/*
let poczatkowaKwota = parseFloat(prompt("Podaj początkową kwotę deponowaną w banku (w PLN):"));
let lata = parseInt(prompt("Podaj okres oszczędzania (w latach):"));
let oprocentowanie = 5; 

let okres = lata * 2; 
let stawka = oprocentowanie / 100 / 2; 

let oszczednosci = poczatkowaKwota;
document.write("Stawka poczatkowa to: "+poczatkowaKwota+" PLN"+"<br>")
document.write("Stawka oprocentowania "+oprocentowanie+"%")
document.write("Lata: "+lata)
document.write("<br>")
for (let i = 1; i <= okres; i++) {
    
    oszczednosci *= (1 + stawka);
    document.write("Po "+i +" półroczu: "+oszczednosci+" PLN <br>");
}
    //Od uzytkownika pobrac nazwisko zapytac go czy jest uczniem jesli tak to poprosic go o podanie nazwe szkoly i na stronie wyswietlic nazwe szkoly natomiast jesli nie jest uczniem przy
    //pomocy okienka wypisac komunikat "przykro strona jest tylko dla uczniow"

    const nazwisko = prompt("Podaj swoje nazwisko:");
        const odpowiedz = confirm("Czy jesteś uczniem? (tak/nie)");

        if (odpowiedz === yes) {
            const nazwaSzkoly = prompt("Podaj nazwę szkoły:");
            document.body.innerHTML = `<h1>Witaj, ${nazwisko}!</h1><p>Twoja szkoła to: ${nazwaSzkoly}</p>`;
        } else {
            alert("Przykro, strona jest tylko dla uczniów.");
        }

        //Od uzytkownika pobieramy liczbe naturalna wypisujemy wszystkie liczby od 1 do pobranej liczby wlacznie
        //pogrubiamy nieparzyste i wynaczamy ich sume

        let liczba  = parseInt(prompt("Podaj liczbę naturalną: "));
        let suma = parseInt(0 );
 
        for(let i=1;i<=liczba;i++)
        {
            if(i==1 || i%2==1)
            {
                document.write("<b>"+i+"</b> ");
                suma+=i;
            }
            else
            {
                document.write(i+" ");
            }
        }
        document.write("Suma wynosi: "+suma);

        //Napisz funkcje wyznaczajaca potege z liczby nastepnie wywolaj ta funkcje dla dwoch licbz pobranych od uzytkownika
        //Jezeli wynik potegi jest wiekszy od 100 to wyswietl go na czerwono a jak nie przekracza 100 to na zielono
        function potega(l,m)
    {
        let w = 1;
        for(let i= 0; i < m;i++)
        {
            w = w*l;
        }
 
        return w;
    }
    let a = prompt("Podaj podstawe");
    let b = prompt("Podaj wykładnik potęgi");
    let p = potega(a,b);
    if(p > 100)
    {
        document.write("<font color='red'>" + p)
    }
    else if(p<100)
    {
        document.write("<font color='lightgreen'>" + p)
    }


    //W zaleznosci od wyboru uzytkownika wyznacz kwadrat lub szescian podanej liczby i uzyj switcha 


    function potega(x, y) {
        let wynik = 1;
        for (let i = 0; i < y; i++) 
        { 
            wynik *= x;
        }
        return wynik;
    }
 
    let x = parseFloat(prompt("Podaj podstawę potęgi: "));
    let y = prompt("Wybierz wykładnik potęgi(k - kwadrat/s - szescian): ");
    switch(y)
    {
        case "k":
        document.write(potega(x,2));
        break;
        case "s":
        document.write(potega(x,3));
        break;
        default:
        alert("Błąd");
    }
        */


        //Napisz funkcje ktora dla dowolnej liczby dwucyfrowej zwraca liczbe dwucyfrowa ktora liczba jednosci i dziesiatek sa zamienione w stosunku do wartosci liczby wyjsciowej
        // 65==56 ale jak jest 50 to zamiast 05 to 5
        let liczba = prompt("Podaj liczbę dwucyfrową:");
        function zamienCyfry(liczba) {
        let jednosci = liczba % 10; 
        let dziesiatki = (liczba - jednosci) / 10; 
        let nowaLiczba = jednosci * 10 + dziesiatki;
        document.write(nowaLiczba);  
}

zamienCyfry(liczba); 


 
    </script>
</body>
</html>