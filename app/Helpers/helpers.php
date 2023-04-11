<?php

use App\Models\Admin\Pay;
use App\Models\Admin\Chat;
use App\Models\Admin\User;
use App\Models\Admin\Offre;
use App\Models\Admin\Client;
use App\Models\Admin\Service;
use App\Models\Admin\Commande;
use App\Models\Admin\Abonnement;
use App\Models\Admin\SousService;
use App\Models\Admin\Professionel;
use App\Models\Partenaire\Magazin;
use App\Models\Partenaire\Materiel;
use Illuminate\Support\Facades\Auth;

use App\Models\Admin\ZoneIntervention;
use App\Models\Partenaire\Fournisseur;
use App\Models\Admin\DemandePrestation;
use Illuminate\Support\Facades\Artisan;
use App\Models\Admin\ChampsPersonnalise;

// Extension des fichier backend
const EXT = ".apx";

// Affiche les informations de l'utilisateur connecté
function userFullName()
{
    return Auth::user()->prenom . ' ' . Auth::user()->nom;
}

// Affiche le libellé d'un service en fonction de son identifiant
function getServiceLibelle($id)
{
    $service = Service::find($id);
    if ($service) {
        return $service->libelle;
    }
}

function mmm(){
    return "qqqqqqq";
}

// Affiche le nombre de nouveau message non lue de chaque professionnel
function countMessageChateNoReadProfessionnels($id)
{
    return Chat::where('professionel_id', $id)->where('read', Chat::CHAT_READ_NO_OK)->where('user_id', 0)->get()->count();
//    return $chats;
}

// Affiche le dernier ou le premier message de chaque professionnel
/**
 * Undocumented function
 *
 * @param [type] $professionel
 * @return void
 */
function getMessageChateProfessionnel($professionel)
{
    foreach ($professionel as $key => $chat) {
        $point = ' ...';
        if ($key == count($professionel) - 1){
            if($chat->read == Chat::CHAT_READ_ON || $chat->read == Chat::CHAT_READ_NO_OK){
                if (strlen($chat->message) >= 40){
                    return substr($chat->message, 0, 40) . $point;
                }
                else {
                    return $chat->message ;
                }
            }
        }

        if ($key != count($professionel) - 1){
            if($chat->read == Chat::CHAT_READ_NO_OK){
                if (strlen($chat->message) >= 40){
                    return substr($chat->message, 0, 40) . $point;
                }
                else {
                    return $chat->message ;
                }
            }
        }
    }
}

// Affiche le libellé d'un sous service en fonction de son identifiant
function getOffreLibelle($id)
{
    $offre = Offre::find($id);
    if ($offre) {
        return $offre->libelle;
    }
}

// Affiche le libellé d'un sous service en fonction de son identifiant
function getSousServiceLibelle($id)
{
    $sous_service = SousService::find($id);
    if ($sous_service) {
        return $sous_service->libelle;
    }
}

// Affiche le nom d'uj magazin en fonction de son identifiant
function getMagazinLibelle($id)
{
    $magazin = Magazin::find($id);
    if ($magazin) {
        return $magazin->libelle;
    }
}

// Affiche le libelle d'un sous-service d'une demande de prestation à partie du devis
function DemandePrestationLibelleForDevi($id)
{
    $demande_prestation = DemandePrestation::find($id);
    if ($demande_prestation) {
        return $demande_prestation->sous_service->libelle;
    }
}

// Affiche la description ou le lieu d'une demande de prestation
function getDemandePrestationDescriptionOrLieu($id, $type)
{
    $demande_prestation = DemandePrestation::find($id);
    if ($demande_prestation) {
        if ($type == 'lieu') {
            return $demande_prestation->lieu_reception;
        }
        if ($type == 'description') {
            return $demande_prestation->description;
        }
    }
}

// Affiche les informations sur un materiel
function getMaterielLibelleOrPrix(...$array_id)
{
    $des = $array_id[0];

    if ($des == '') {
        return 'Aucun';
    }

    $array_id = explode(',', $des);
    $symbole = 'FCFA';

    if (count($array_id)) {
        $new_array_id = [];
        foreach ($array_id as $key => $value) {
            array_push($new_array_id, $value);
        }

        $new_array_libelle = [];
        foreach ($new_array_id as $key => $value) {
            $materiel = Materiel::where('id', $value)->first();

            $materiel_prix = $materiel->prix ?? '';
            $materiel_libelle = $materiel->libelle ?? '';

            if ($key != count($new_array_id) - 1) {
                $delimiteur = ',';
            }
            if ($key == count($new_array_id) - 1) {
                $delimiteur = '';
            }

            if ($materiel_prix) {
                $result =
                    $materiel_libelle .
                    ' ' .
                    $materiel_prix .
                    $symbole .
                    $delimiteur;
            } else {
                $result = $materiel_libelle . $delimiteur;
            }

            array_push($new_array_libelle, $result);
        }

        $rr = implode(' ', $new_array_libelle);
        return $rr;
    }
}

// Affiche les informations sur un materiel
function getMaterielLibelleAndPrix(...$array_id)
{
    $des = $array_id[0];

    if ($des == '') {
        return 'Aucun';
    }

    $array_id = explode('|||', $des);
    $symbole = 'FCFA';

    if (count($array_id)) {
        $new_array_id = [];
        foreach ($array_id as $key => $value) {
            array_push($new_array_id, $value);
        }

        $new_array_libelle = [];
        foreach ($new_array_id as $key => $value) {
            $materiel = Materiel::where('libelle', $value)->first();

            $materiel_prix = $materiel->prix ?? '';
            $materiel_libelle = $materiel->libelle ?? '';

            if ($key != count($new_array_id) - 1) {
                $delimiteur = ',';
            }
            if ($key == count($new_array_id) - 1) {
                $delimiteur = '';
            }

            if ($materiel_prix) {
                $result =
                    $materiel_libelle .
                    ' ' .
                    $materiel_prix . ' '.
                    $symbole .
                    $delimiteur;
            } else {
                $result = $materiel_libelle . $delimiteur;
            }

            array_push($new_array_libelle, $result);
        }

        $rr = implode(' ', $new_array_libelle);
        return $rr;
    }
}

// Affiche les informations sur un materiel
function getMaterielPrix(...$array_id)
{
    $des = $array_id[0];

    if ($des == '') {
        return 'Aucun Prix';
    }

    $array_id = explode('|||', $des);
    $symbole = 'FCFA';

    if (count($array_id)) {
        $new_array_id = [];
        foreach ($array_id as $value) {
            array_push($new_array_id, $value);
        }

        $new_array_prix = [];
        foreach ($new_array_id as $value) {
            $materiel = Materiel::where('libelle', $value)->first();

            $materiel_prix = $materiel->prix ?? '';

            if ($materiel_prix) {
                $result = $materiel_prix ;
            } else{
                $result = 0;
            }

            array_push($new_array_prix, $result);
        }

        $rr = array_sum($new_array_prix);
        return $rr . ' ' . $symbole;
    }
}

// Affiche le type d'un champ personnalisé
function getChampType($id)
{
    $champsPersonnalise = ChampsPersonnalise::find($id);
    if ($champsPersonnalise->type == ChampsPersonnalise::CHAMP_TYPE_INTEGER) {
        return 'Nombre';
    }
    if ($champsPersonnalise->type == ChampsPersonnalise::CHAMP_TYPE_STRING) {
        return 'Texte court';
    }
    if ($champsPersonnalise->type == ChampsPersonnalise::CHAMP_TYPE_FILE) {
        return 'Ficher';
    }
    if ($champsPersonnalise->type == ChampsPersonnalise::CHAMP_TYPE_TEXT) {
        return 'Texte long';
    }
    if ($champsPersonnalise->type == ChampsPersonnalise::CHAMP_TYPE_IMAGE) {
        return 'Image';
    }
    if ($champsPersonnalise->type == ChampsPersonnalise::CHAMP_TYPE_DATE) {
        return 'Date';
    }
}

// Affiche le statut de la commande  en fonction de l'identifiant
function getCommandeStatut($id)
{
    $commande = Commande::find($id);
    if ($commande) {
        if ($commande->statut == Commande::COMMANDE_STATUT_ANNULER) {
            echo '<a style="font-size: 15px; font-weight: lighter; border-radius: 5px; padding: 5px; text-decoration: none;
 background-color: rgba(242, 15, 15, 0.631);"> Annuler';
            echo '</a>';
        }
        if ($commande->statut == Commande::COMMANDE_STATUT_ENCOURE) {
            echo '<a style="font-size: 15px; font-weight: lighter; border-radius: 5px; padding: 5px; text-decoration: none;
 background-color: rgba(223, 217, 35, 0.618);"> En cours';
            echo '</a>';
        }
        if ($commande->statut == Commande::COMMANDE_STATUT_TERMINER) {
            echo '<a style="font-size: 15px; font-weight: lighter; border-radius: 5px; padding: 5px; text-decoration: none;
 background-color: rgba(80, 223, 67, 0.7);"> Terminer';
            echo '</a>';
        }
    }
}

// Affiche la date de fin de la commande  en fonction de l'identifiant
function getCommandeEnd($id)
{
    $commande = Commande::find($id);
    if ($commande) {
        if ($commande->job_end) {
            return $commande->job_end;
        }
        if (!$commande->job_end) {
            echo '<a style="font-size: 15px; margin-top: 15px; font-weight: lighter; border-radius: 5px; padding: 5px; text-decoration: none;
 background-color: rgba(223, 217, 35, 0.618);"> En cours';
            echo '</a>';
        }
    }
}

// Affiche le temps d'execution en heure d'une commande  en fonction de l'identifiant de la commande
function ConverteNumberInTime($id)
{
    $commande = Commande::find($id);
    if ($commande->estimate_time) {
        $init = $commande->estimate_time;
        if ($init != null || $init != 0 || $init == '') {
            $hours = floor($init / 3600);
            $minutes = floor(($init / 60) % 60);
            $seconds = $init % 60;

            $h = 'h';
            $m = 'm';
            $s = 's';
            $temp_final =
                $hours . $h . ' : ' . $minutes . $m . ' : ' . $seconds . $s;
            return $temp_final;
        }
    }

    if (
        $commande->estimate_time == null ||
        $commande->estimate_time == 0 ||
        $commande->estimate_time == ''
    ) {
        return 'Aucun temps';
    }
}

// Affiche le role de l'utilisateur connecté
function getRolesName()
{
    return Auth::user()->role->nom;
}

//Obetinr le nom complet d'un utlisateur dans la vue de gestion des utilsareurs
function getUserManageFullNoSlugName($id)
{
    $user = User::find($id);
    if ($user) {
        return $user->nom . ' ' . $user->prenom;
    }
}

//Obetinr le nom complet d'un utlisateur dans la vue de gestion des utilsareurs
function getUserManageFullName(User $user)
{
    if ($user) {
        return $user->nom . ' ' . $user->prenom;
    }
}

//Obetinr le nom complet d'un utlisateur dans la vue de gestion des utilsareurs
function getPaysLibelle($id)
{
    $pays = Pay::find($id);
    if ($pays) {
        return $pays->libelle;
    }
}

//Obetinr le nom complet d'un utlisateur dans la vue de gestion des utilsareurs
function getZoneIntervention($id)
{
    $zone_ntervention = ZoneIntervention::find($id);
    if ($zone_ntervention) {
        return $zone_ntervention->lieu;
    }
}

//Obetinr la zone du magazin d'un materiel
function getMagazinZone($id)
{
    $magazin = Magazin::find($id);
    if ($magazin) {
        if ($magazin->zone_id) {
            return getZoneIntervention($magazin->zone_id);
        }
    }
}

//Obetinr la zone du magazin d'un materiel
function getMagazinFournisseur(Magazin $magazin)
{
    if ($magazin) {
        if ($magazin->fournisseur_id) {
            return $magazin->fournisseur->nom . ' '.  $magazin->fournisseur->prenom;
        }
    }
}

//Obetinr le code d'une commande
function getCodeCommande($id)
{
    $commande = Commande::find($id);
    if ($commande) {
        return $commande->code;
    }
}

//Obetinr le nom complet d'un client dans la vue de gestion des clients
function getClientManageFullName($id)
{
    $client = Client::find($id);
    if ($client) {
        if($client->nom == null && $client->prenoms == null){
            return 'Nom renseigné';
        }
        return $client->nom . ' ' . $client->prenoms;
    }

}

//Obetinr le nom complet d'un client dans la vue de gestion des clients
function getClientEmail($id)
{
    $client = Client::find($id);
    if ($client) {
        if ($client->email) {
            return $client->email;
        } else {
            return 'Non renseigné';
        }
    }
}

//Obetinr le nom complet d'un client dans la vue de gestion des clients
function getClientContact($id)
{
    $client = Client::find($id);
    if ($client) {
        return $client->tel ?? '';
    }
}

//Obetinr le nom complet d'un professionel dans la vue de gestion des professionel
function getProfessionelManageFullName($id)
{
    $professionel = Professionel::find($id);
    if ($professionel) {
        return $professionel->nom . ' ' . $professionel->prenoms;
    }
}

//Obetinr le numero d'un professionel dans la vue de gestion des professionel
function getProfessionnelContact($id)
{
    $professionel = Professionel::find($id);
    if ($professionel) {
        return $professionel->tel ?? '';
    }
}

//Obetinr le nom complet d'un fournisseur dans la vue de gestion des professionel
function getFournisseurManageFullName(Fournisseur $fournisseur)
{
    if ($fournisseur) {
        return $fournisseur->nom . ' ' . $fournisseur->prenom;
    }
}

//Obetinr le contact  d'un fournisseur dans la vue de gestion des professionel
function getFournisseurManageContact(Fournisseur $fournisseur)
{
    // $fournisseur = Fournisseur::find($id);
    if ($fournisseur) {
        return $fournisseur->contact ?? ' ';
    }
}

// La methode met le premier lettre de chaque mot en majuscule
function getFirsAndLasttNameAttribute($value)
{
    return ucfirst($value);
}

//fonction change la couleur de fond de la page login de façon aleatoire
function themeLoginFontMode()
{
    if (rand(0, 1)) {
        return $switchfont = null;
    } else {
        return $switchfont = 'dark-mode';
    }
}

// Obtenir le libellé de l'abonnement en fonction de l'identifiant passeé
function getAbonnementLibelle($id)
{
    $abonnement = Abonnement::where('id', $id)->first();
    if ($abonnement) {
        return $abonnement->libelle;
    } else {
        return ' ';
    }
}

// la fonction affiche l'etat du statut d'un client
function getClientStatut($variable)
{
    if ($variable == Client::CLIENT_STATUT_NO_CONNECT) {
        echo '<a style="font-size: 15px; font-weight: lighter; border-radius: 5px; padding: 5px; text-decoration: none;
 background-color: rgba(223, 217, 35, 0.618);"> Non connecté';
        echo '</a>';
    }
    if ($variable == Client::CLIENT_STATUT_CONNECT) {
        echo '<a style="font-size: 15px;  font-weight: lighter; border-radius: 5px; padding: 5px; text-decoration: none;
 background-color: rgba(36, 40, 235, 0.775);"> Connecté';
        echo '</a>';
    }
}

// la fonction affiche l'etat du statut d'un prefessionnel
function getProfessionelStatut($variable)
{
    if ($variable == Professionel::PROFESSIONNEL_STATUT_NO_CONNECT) {
        echo '<a style="font-size: 15px; font-weight: lighter; border-radius: 5px; padding: 5px; text-decoration: none;
 background-color: rgba(223, 217, 35, 0.618);"> Non connecté';
        echo '</a>';
    }
    if ($variable == Professionel::PROFESSIONNEL_STATUT_CONNECT) {
        echo '<a style="font-size: 15px;  font-weight: lighter; border-radius: 5px; padding: 5px; text-decoration: none;
 background-color: rgba(36, 40, 235, 0.775);"> Connecté';
        echo '</a>';
    }
}

// la fonction suprime les carractère speciaux sur les nom d'image
function utf8($text)
    $utf8 = [
        '[á]' => 'a',
        '[à]' => 'a',
        '[â]' => 'a',
        '[ã]' => 'a',
        '[ª]' => 'a',
        '[ä]' => 'a',
        '[Á]' => 'A',
        '[À]' => 'A',
        '[Â]' => 'A',
        '[Ã]' => 'A',
        '[Ä]' => 'A',
        '[Ï]' => 'I',
        '[Î]' => 'I',
        '[Ì]' => 'I',
        '[Í]' => 'I',
        '[í]' => 'i',
        '[ì]' => 'i',
        '[î]' => 'i',
        '[ï]' => 'i',
        '[ë]' => 'e',
        '[ê]' => 'e',
        '[è]' => 'e',
        '[é]' => 'e',
        '[Ë]' => 'E',
        '[Ê]' => 'E',
        '[È]' => 'E',
        '[É]' => 'E',
        '[ö]' => 'o',
        '[º]' => 'o',
        '[õ]' => 'o',
        '[ô]' => 'o',
        '[ò]' => 'o',
        '[ó]' => 'o',
        '[Ö]' => 'O',
        '[Õ]' => 'O',
        '[Ô]' => 'O',
        '[Ò]' => 'O',
        '[Ó]' => 'O',
        '[ú]' => 'u',
        '[ù]' => 'u',
        '[û]' => 'u',
        '[û]' => 'u',
        '[ü]' => 'u',
        '[Ú]' => 'U',
        '[Ù]' => 'U',
        '[Û]' => 'U',
        '[Ü]' => 'U',
        '[ç]' => 'c',
        '[Ç]' => 'C',
        '[/]' => '-',
        '["\"]' => '-',
        '[ñ]' => 'n',
        '[Ñ]' => 'N',
        '[]' => '',
        '[°]' => 'No_',
        '[  ]' => '',
        '[«»]' => '',
        '[//]' => '',
        '[«»]' => '',
        '[%]' => 'pourcent',
        '[`]' => '-',
    ];

    return preg_replace(array_keys($utf8), array_values($utf8), $text);
}
