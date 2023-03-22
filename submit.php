


<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$db_Name= "cc";
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $db_Name);

// Vérifier la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}


// Récupérer les données du formulaire
// $matricule = $_POST["matricule"];
// $nom = $_POST["nom"];
// $prenom = $_POST["prenom"];
// $adresse = $_POST["adresse"];
// $ville = $_POST["ville"];
// $NCin = $_POST["NCin"];
// $NCnss = $_POST["NCnss"];
// $Nmutuel = $_POST["Nmutuel"];
// $NCimr = $_POST["NCimr"];
// $compte_bancaire = $_POST["compte_bancaire"];
// $agence_bancaire = $_POST["agence_bancaire"];
// $date_entree = $_POST["date_entree"];
// $salaire = $_POST["salaire"];
// $mode_paiement = $_POST["mode_paiement"];

// Préparer la requête SQL pour insérer les données dans la base de données
// $sql = "INSERT INTO employees (matricule, nom, prenom, adresse, ville, NCin, NCnss, Nmutuel, NCimr, compte_bancaire, agence_bancaire, date_entree, salaire, mode_paiement)
//         VALUES ('$matricule', '$nom', '$prenom', '$adresse', '$ville', '$NCin', '$NCnss', '$Nmutuel', '$NCimr', '$compte_bancaire', '$agence_bancaire', '$date_entree', '$salaire', '$mode_paiement')";

// Exécuter la requête SQL
if ($connexion= mysqli_connect($serveur, $utilisateur, $mot_de_passe, $db_Name)) {
    echo "Les données ont été enregistrées avec succès !";
} else {
    echo "Une erreur est survenue : " . mysqli_error($connexion);
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $matricule = $_POST["matricule"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $ville = $_POST["ville"];
    $N_Cin = $_POST["N_Cin"];
    $N_Cnss = $_POST['N_Cnss'];
    $N_mutuel = $_POST['N_mutuel'];
    $N_Cimr = $_POST['N_Cimr'];
    $compte_bancaire = $_POST['compte_bancaire'];
    $agence_bancaire = $_POST['agence_bancaire'];
    $date_entree = $_POST['date_entree'];
    $salaire = $_POST['salaire'];
    $mode_paiement = $_POST['mode_paiement'];

    // Ouvrir le fichier texte en mode écriture
    $fichier = fopen('donnees.txt', 'a');

    // Écrire les données dans le fichier
    fwrite($fichier, "Matricule : $matricule\n");
    fwrite($fichier, "Nom : $nom\n");
    fwrite($fichier, "Prénom : $prenom\n");
    fwrite($fichier, "Adresse : $adresse\n");
    fwrite($fichier, "Ville : $ville\n");
    fwrite($fichier, "N°CIN : $N_Cin\n");
    fwrite($fichier, "N°CNSS : $N_Cnss\n");
    fwrite($fichier, "N°Mutuel : $N_mutuel\n");
    fwrite($fichier, "N°CIMR : $N_Cimr\n");
    fwrite($fichier, "Compte bancaire : $compte_bancaire\n");
    fwrite($fichier, "Agence bancaire : $agence_bancaire\n");
    fwrite($fichier, "Date d'entrée : $date_entree\n");
    fwrite($fichier, "Salaire : $salaire\n");
    fwrite($fichier, "Mode de paiement : $mode_paiement\n\n\n\n");
   

    // Fermer le fichier
    fclose($fichier);

    // Afficher un message de confirmation
    echo "Les données ont été enregistrées dans le fichier donnees.txt.";
}
?>