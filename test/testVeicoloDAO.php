<?php

include_once __DIR__.'/../dao/VeicoloDAO.php';

/* getVeicolo()  - OK
$veicolo = VeicoloDAO::getVeicolo(2);
$marca = $veicolo->getMarca();
$tipo = $veicolo->getTipo();
$targa = $veicolo->getTarga();
$idAssicurazione = $veicolo->getIdAssicurazione();
$idPersona = $veicolo->getIdPersona();

echo "$marca <br>
    $tipo <br>
    $targa <br>
    $idAssicurazione <br>
    $idPersona ";*/

//----------------------------------------------------

/* getElencoTipiUtente() - OK
$elencoVeicoli = VeicoloDAO::getElencoVeicoli();
foreach ($elencoVeicoli as $veicolo) {
    echo "Id = " . $veicolo->getIdVeicolo() . " - ";
    echo "Marca = " .$veicolo->getMarca()." - ";
    echo "Tipo = " .$veicolo->getTipo(). "<br>";
    echo "Targa = " .$veicolo->getTarga(). "<br>";
    echo "idAssicurazione = " .$veicolo->getIdAssicurazione(). "<br>";
    echo "IdPersona = " .$veicolo->getIdPersona(). "<br>";
} */

//----------------------------------------------------

/* aggiungiVeicolo() - OK
//L'id non è importante perché poi non verrà utilizzato, ma si seguirà l'AUTO_INCREMENT
//Da ricordare che bisogna passare l'idCitta, quindi via frontend bisogna ottenerlo
$veicolo = new Veicolo(null,'Test','Tesla', '196FV52', 1, 1);
$add = VeicoloDAO::aggiungiVeicolo($veicolo);
echo "$add";
*/

//----------------------------------------------------

/* aggiornaVeicolo() - OK
$veicolo = new Veicolo(7,'Test01','TeslOne','SJKDASIJJDSA', '1','1');
$o = VeicoloDAO::aggiornaVeicolo($veicolo);
echo "$o";
*/

//----------------------------------------------------
/* cancellaVeicolo() - OK
$cancella = VeicoloDAO::cancellaVeicolo(5);
echo "$cancella";
*/
//----------------------------------------------------