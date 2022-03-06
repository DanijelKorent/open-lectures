<?php
function selectUstanove(){
    global $db;
    $query = $db->query("SELECT *
    FROM ustanove u 
    INNER JOIN zaposlenje z ON u.idUstanove = z.ustanova
    INNER JOIN predavaci p ON p.idPredavac = z.predavac
    INNER JOIN lekcije l on l.predavac = p.idPredavac
    INNER JOIN predavanja pred ON pred.idPredavanja = l.predavanja
    INNER JOIN pripadnost_kategoriji prip ON pred.idPredavanja = prip.predavanje
    INNER JOIN kategorije k ON k.idKategorije = prip.kategorije;");
    $statement = $db->prepare($query);
    $statement->execute();
    $array = $statement->fetchAll();
    $statement->closeCursor();

    return $array;
};

function selectKategorije(){
    global $db;
    $query = $db->query("SELECT *
    FROM ustanove u 
    INNER JOIN zaposlenje z ON u.idUstanove = z.ustanova
    INNER JOIN predavaci p ON p.idPredavac = z.predavac
    INNER JOIN lekcije l on l.predavac = p.idPredavac
    INNER JOIN predavanja pred ON pred.idPredavanja = l.predavanja
    INNER JOIN pripadnost_kategoriji prip ON pred.idPredavanja = prip.predavanje
    INNER JOIN kategorije k ON k.idKategorije = prip.kategorije;");
    $statement = $db->prepare($query);
    $statement->execute();
    $array = $statement->fetchAll();
    $statement->closeCursor();

    return $array;
};

function selectPredavaci(){
    global $db;
    $query = $db->query("SELECT *
    FROM ustanove u 
    INNER JOIN zaposlenje z ON u.idUstanove = z.ustanova
    INNER JOIN predavaci p ON p.idPredavac = z.predavac
    INNER JOIN lekcije l on l.predavac = p.idPredavac
    INNER JOIN predavanja pred ON pred.idPredavanja = l.predavanja
    INNER JOIN pripadnost_kategoriji prip ON pred.idPredavanja = prip.predavanje
    INNER JOIN kategorije k ON k.idKategorije = prip.kategorije;");
    $statement = $db->prepare($query);
    $statement->execute();
    $array = $statement->fetchAll();
    $statement->closeCursor();

    return $array;
};

function selectOpisPred (){
    global $db;
    $query = $db->query("SELECT pred.naziv_predavanja, u.naziv_ustanove,
    p.ime, p.prezime,  pred.jezik, pred.broj_predavanja, 
    pred.ukupno_trajanje, pred.oznaka, pred.oznaka
    FROM ustanove u 
    INNER JOIN zaposlenje z ON u.idUstanove = z.ustanova
    INNER JOIN predavaci p ON p.idPredavac = z.predavac
    INNER JOIN lekcije l on l.predavac = p.idPredavac
    INNER JOIN predavanja pred ON pred.idPredavanja = l.predavanja
    INNER JOIN pripadnost_kategoriji prip ON pred.idPredavanja = prip.predavanje
    INNER JOIN kategorije k ON k.idKategorije = prip.kategorije;
    ");
    $statement = $db->prepare($query);
    $statement->execute();
    $array = $statement->fetchAll();
    $statement->closeCursor();

    return $array;
};

function selectAll(){
    global $db;
    $query = $db->query("SELECT *
    FROM ustanove u 
    INNER JOIN zaposlenje z ON u.idUstanove = z.ustanova
    INNER JOIN predavaci p ON p.idPredavac = z.predavac
    INNER JOIN lekcije l on l.predavac = p.idPredavac
    INNER JOIN predavanja pred ON pred.idPredavanja = l.predavanja
    INNER JOIN pripadnost_kategoriji prip ON pred.idPredavanja = prip.predavanje
    INNER JOIN kategorije k ON k.idKategorije = prip.kategorije;
    ");
    $statement = $db->prepare($query);
    $statement->execute();
    $array = $statement->fetchAll();
    $statement->closeCursor();

    return $array;
};
