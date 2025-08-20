<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Department;
use App\Models\ProfType;
use App\Models\User;
use App\Models\UserPermission;
use App\Models\VisitorType;
use App\Models\VisitPurpose;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Create Organization account
     * @param Request $request
     * @return mixed
    */
    public function createAccount(Request $request){

         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'. $request->user_id,
            'password' => 'required|string|min:6',
            'account_name'=>'required|string',
            'address'=> 'nullable|string',
            'phone' => 'nullable|string'
        ]);

        $account = Account::create([
            "name"=>$validated["account_name"],
            "address"=>$validated["address"],
            "phone"=>$validated["phone"],
        ]);

        if($account){
            // Création de l'utilisateur
            $user = User::create(
                [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'role' => 'ADMIN',
                'account_id'=>$account->id
            ]);
            // Vérification des permissions de l'utilisateur en fonction de son rôle
            $permissions = $this->getPermissionsByRole('ADMIN');

            foreach ($permissions as $permissionType) {
                // Création de l'entrée pour chaque permission
                UserPermission::create(
                    [
                    'user_id' => $user->id,
                    'permission_type' => $permissionType,
                    'enabled' => true,
                    'account_id'=>$account->id
                ]);
            }
            $this->createDefaultData($account->id);
            return redirect()->route('login')->with('success', 'Nouveau compte créé avec succès.');
        }
    }


     /**
     * Récupère les permissions en fonction du rôle de l'utilisateur.
     *
     * @param string $role
     * @return array
     */
    private function getPermissionsByRole(string $role): array
    {
        switch ($role) {
            case 'ADMIN':
                return ['Update', 'Delete', 'Export'];
            case 'USER':
                return ['Update'];
            default:
                return [];
        }
    }

    private function createDefaultData($accountId){
        foreach([
            "Réunion",
            "Entretien",
            "Livraison",
            "Support",
            "Séminaire",
            "Proposition commerciale",
            "Réparation",
            "Inspection",
            "Consultation",
            "Formation",
        ] as $purpose){
            VisitPurpose::create(["libelle"=>$purpose, "account_id"=>$accountId]);
        }

        foreach([
            "Ressources Humaines",
            "Informatique",
            "Administration",
            "Ventes",
            "Support Technique",
            "Juridique",
            "Marketing",
            "Maintenance",
            "Opérations"
        ] as $dpt){
            Department::create(["libelle"=>$dpt, "account_id"=>$accountId]);
        }

        foreach([
            "Fournisseur",
            "Candidat",
            "Coursier",
            "Client",
            "Invité",
            "Technicien",
            "Auditeur",
            "Employé",
        ] as $vtype){
            VisitorType::create(["libelle"=>$vtype,"account_id"=>$accountId]);
        }

        foreach([
            "Carte d'Electeur",
            "Permis de conduire",
            "Carte de Service",
            "Passeport"
        ] as $profType){
            ProfType::create(["libelle"=>$profType, "account_id"=>$accountId]);
        }
    }
}
