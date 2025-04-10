<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPermission;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Crée un nouvel utilisateur avec son rôle et ses permissions.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function createUser(Request $request): JsonResponse
    {
        // Validation des données entrantes
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:ADMIN,USER',
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => $validated['role'],
        ]);

        // Vérification des permissions de l'utilisateur en fonction de son rôle
        $permissions = $this->getPermissionsByRole($user->role);

        foreach ($permissions as $permissionType) {
            // Création de l'entrée pour chaque permission
            UserPermission::create([
                'user_id' => $user->id,
                'permission_type' => $permissionType,
                'enabled' => false, // Par défaut, les permissions sont désactivées
            ]);
        }

        return response()->json([
            'message' => 'Utilisateur créé avec succès!',
            'user' => $user,
            'permissions' => $permissions,
        ], 201);
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
}
