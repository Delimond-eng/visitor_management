<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\VisitHistory;
use App\Models\Visitor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
    // ===============================
    // VISITOR CRUD
    // ===============================

    /**
     * Create a new visitor entry.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function createVisitor(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'company_or_address' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:50',
            'email_address' => 'nullable|email',
            'id_proof_type' => 'nullable|string|max:100',
            'id_proof_number' => 'nullable|string|max:100',
            'vehicle_number' => 'nullable|string|max:100'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $visitor = Visitor::create($request->all());
        return response()->json($visitor);
    }

    /**
     * Update an existing visitor.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function updateVisitor(Request $request, $id): JsonResponse
    {
        $visitor = Visitor::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'full_name' => 'sometimes|required|string|max:255',
            'company_or_address' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:50',
            'email_address' => 'nullable|email',
            'id_proof_type' => 'nullable|string|max:100',
            'id_proof_number' => 'nullable|string|max:100',
            'vehicle_number' => 'nullable|string|max:100'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $visitor->update($request->all());
        return response()->json($visitor);
    }

    /**
     * Delete a visitor by ID.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function deleteVisitor($id): JsonResponse
    {
        Visitor::findOrFail($id)->delete();
        return response()->json(['message' => 'Visiteur supprimé']);
    }

    /**
     * List all visitors.
     *
     * @return JsonResponse
     */
    public function listVisitors(): JsonResponse
    {
        return response()->json(Visitor::all());
    }



    // ===============================
    // VISIT CRUD
    // ===============================

    /**
     * Create a new visit entry.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function createVisit(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'visitor_id' => 'required|exists:visitors,id',
            'purpose' => 'required|string|max:255',
            'visit_date' => 'required|date',
            'time_in' => 'required|date_format:H:i',
            'time_out' => 'nullable|date_format:H:i',
            'stay_time' => 'nullable|string|max:50',
            'entry_authorized_by' => 'nullable|string|max:255',
            'pass_number' => 'nullable|string|max:50',
            'status' => 'nullable|string|max:50',
            'remarks' => 'nullable|string|max:500',
            'picture_url' => 'nullable|string|max:255',
            'updated_by' => 'nullable|string|max:255',
            'update_timestamp' => 'nullable|date'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $visit = Visit::create($request->all());
        return response()->json($visit);
    }




    /**
     * Update a visit and store history of changes.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function updateVisit(Request $request, int $id): JsonResponse
    {
        $visit = Visit::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'purpose' => 'sometimes|required|string|max:255',
            'time_in' => 'sometimes|date_format:H:i',
            'time_out' => 'sometimes|date_format:H:i',
            'stay_time' => 'nullable|string|max:50',
            'entry_authorized_by' => 'nullable|string|max:255',
            'pass_number' => 'nullable|string|max:50',
            'status' => 'nullable|string|max:50',
            'remarks' => 'nullable|string|max:500',
            'picture_url' => 'nullable|string|max:255',
            'updated_by' => 'nullable|string|max:255',
            'update_timestamp' => 'nullable|date'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $old = $visit->getOriginal();
        $visit->update($request->all());

        VisitHistory::create([
            'visit_id' => $visit->id,
            'updated_by' => Auth::user()->id ?? 'system',
            'update_timestamp' => now(),
            'changes' => array_diff_assoc($visit->getAttributes(), $old),
        ]);

        return response()->json($visit);
    }

    /**
     * Delete a visit by ID.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function deleteVisit(int $id): JsonResponse
    {
        Visit::findOrFail($id)->delete();
        return response()->json(['message' => 'Visite supprimée']);
    }

    /**
     * List all visits with related visitor data.
     *
     * @return JsonResponse
     */
    public function listVisits(): JsonResponse
    {
        return response()->json(Visit::with('visitor')->get());
    }




    // ===============================
    // AFFICHAGES SPÉCIFIQUES
    // ===============================

    /**
     * Get all visits on a specific date.
     *
     * @param string $date
     * @return JsonResponse
     */
    public function dailyEntries(string $date): JsonResponse
    {
        return response()->json(
            Visit::with('visitor')
                ->whereDate('visit_date', $date)
                ->orderBy('time_in')
                ->get()
        );
    }

    /**
     * Get all visits for a specific visitor.
     *
     * @param int $visitorId
     * @return JsonResponse
     */
    public function entriesByVisitor(int $visitorId): JsonResponse
    {
        return response()->json(
            Visit::with('visitor')
                ->where('visitor_id', $visitorId)
                ->get()
        );
    }

    /**
     * Get history logs of a specific visit.
     *
     * @param int $visitId
     * @return JsonResponse
     */
    public function visitHistories($visitId): JsonResponse
    {
        return response()->json(
            VisitHistory::where('visit_id', $visitId)
                ->orderByDesc('update_timestamp')
                ->get()
        );
    }
}
