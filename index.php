<?php
//esercizio 1

// function controllaPassword($password)
// {
//     $passwordApprovata = true;
//     $lunghezza  = 8;
    
//     if (!preg_match('°#][{}@%£?^"£§+-', $password)) {

//         echo "Serve un carattere speciale" . "\n";

//         $passwordApprovata = false;
//     }

//     if (!preg_match('@[A-Z]@', $password)) {

//         echo "serve almeno una lettera maiuscola"  . "\n";

//         $passwordApprovata = false;
//     }
//     if (strlen($password) < $lunghezza) {

//         echo "la password deve contenere almeno $lunghezza caratteri" . "\n";
        
//         $passwordApprovata = false;
//     }

//     if (!preg_match('@[0-9]@', $password)) {

//         echo "Serve almeno un numero"  . "\n";

//         $passwordApprovata = false;
//     }

//     if ($passwordApprovata === true) {

//         echo "Password accettata \n";

//         return true;
//     }

//     return false;
// }

// do {

//     $password = readline("Inserisci la tua password:");

// } while (!controllaPassword($password));
















//esercizio 2


class Company {
    public $name;
        public  $location ; 
    public $hiredEmployers = 0;
    
   public function __construct($name,$location,$hiredEmployers)
  


{

$this->name = $name;
$this->location = $location;
$this->hiredEmployers = $hiredEmployers;
}

public function dipendentiInfo()
{
    if ($this->hiredEmployers > 0) {
        echo "L'ufficio $this->name con sede in $this->location ha ben $this->hiredEmployers dipendenti.\n";
    } else {
        echo "L'ufficio $this->name con sede in $this->location non ha dipendenti.\n";
    }
}
public function calcoloTotaleAnnuale()
{
 
    $costoAnnuale = 780;
    return $this->hiredEmployers * $costoAnnuale;
}

public static function calcoloTotaleSpeseAziende(array $companies)
{
    $calcoloTotale = 0;
    foreach ($companies as $company) {
        $calcoloTotale += $company->calcoloTotaleAnnuale();
    }
    return $calcoloTotale;
}

public static function stampaCalcoloTotale(array $companies)
{
    $calcoloTotale = self::calcoloTotaleSpeseAziende($companies);
    echo "Il totale delle spese di tutte le aziende è: $calcoloTotale.\n";
}
}

$company1 = new Company('Aulab', 'Italia', 50);
$company2 = new Company('Gengis', 'Polonia', 78);
$company3 = new Company('Amsterdamcompany', 'Olanda', 55);
$company4 = new Company('amazon', 'grecia', 44);
$company5 = new Company('weblab', 'Georgia', 30);


$company1->dipendentiInfo();
$company2->dipendentiInfo();
$company3->dipendentiInfo();
$company4->dipendentiInfo();
$company5->dipendentiInfo();


echo "Spese annuali per Aulab: {$company1->calcoloTotaleAnnuale()}\n";
echo "Spese annuali per gengis: {$company2->calcoloTotaleAnnuale()}\n";
echo "Spese annuali per Amsterdamcompany: {$company3->calcoloTotaleAnnuale()}\n";
echo "Spese annuali per amazon: {$company4->calcoloTotaleAnnuale()}\n";
echo "Spese annuali per weblab: {$company5->calcoloTotaleAnnuale()}\n";

Company::stampaCalcoloTotale([$company1, $company2, $company3, $company4, $company5]);



?>
