@php
if (!function_exists('getStatusBadgeClass')) {
    function getStatusBadgeClass($status) {
        return match($status) {
            'Pending' => 'text-warning border border-warning',
            'Approved' => 'text-primary border border-primary',
            'Completed' => 'text-success border border-success',
            default => 'text-muted border border-secondary',
        };
    }
}
@endphp


@extends("layouts.admin")


@section("content")
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row gap-0">
            <div class="col-sm-12">
                <div class="page-title-content d-sm-flex justify-content-sm-between align-items-center">
                    <h4 class="page-title mt-3 mt-md-0">Tableau de bord </h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Visitors management</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Reports</li>
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</div>
<!--end page title-->
<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <!-- Counter -->
                <div class="col-12">
                    <x-counters></x-counters>
                </div>
                <!-- end counter -->

                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Visites journalières</h4>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-sm btn-outline-light">
                                                <i class="icofont-download fs-14 me-1"></i>Excel
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#visit-create-modal">
                                                <i class="fa-solid fa-plus me-1"></i> Nouvelle visite
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped align-middle">
                                            <thead>
                                                <tr>
                                                    <th>Visiteur</th>
                                                    <th>Motif</th>
                                                    <th>Email</th>
                                                    <th>Téléphone</th>
                                                    <th>Heure E.</th>
                                                    <th>Heure S</th>
                                                    <th>Durée</th>
                                                    <th>Ese | Adresse</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($visits as $visit)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset($visit->picture_url ?? 'assets/images/users/avatar-1.jpg') }}"
                                                            alt="" class="thumb-sm rounded me-2 d-inline-block">
                                                        {{ $visit->full_name }}
                                                    </td>
                                                    <td>{{ $visit->purpose ?? '-' }}</td>
                                                    <td>{{ $visit->email_address ?? '-' }}</td>
                                                    <td>{{ $visit->contact_number ?? '-' }}</td>
                                                    <td>{{ $visit->time_in ?? '-' }}</td>
                                                    <td>{{ $visit->time_out ?? '-' }}</td>
                                                    <td>{{ $visit->stay_time ?? '-' }}</td>
                                                    <td>{{ $visit->company_or_address ?? '-' }}</td>
                                                    <td>
                                                        <span class="badge {{ getStatusBadgeClass($visit->status) }} px-2">
                                                            {{ ucfirst($visit->status) ?? 'Inconnu' }}
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        @if (Auth::user()->hasPermission("Update"))
                                                        <a href="#"
                                                            class="btn btn-outline-info btn-sm btn-edit-visit rounded-pill shadow-none"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#visit-create-modal"
                                                            data-id="{{ $visit->id }}"
                                                            data-full_name="{{ $visit->full_name }}"
                                                            data-company_or_address="{{ $visit->company_or_address }}"
                                                            data-department="{{ $visit->department }}"
                                                            data-contact_number="{{ $visit->contact_number }}"
                                                            data-email_address="{{ $visit->email_address }}"
                                                            data-id_proof_type="{{ $visit->id_proof_type }}"
                                                            data-id_proof_number="{{ $visit->id_proof_number }}"
                                                            data-visitor_type="{{ $visit->visitor_type }}"
                                                            data-vehicle_number="{{ $visit->vehicle_number }}"
                                                            data-purpose="{{ $visit->purpose }}"
                                                            data-time_in="{{ $visit->time_in }}"
                                                            data-time_out="{{ $visit->time_out }}"
                                                            data-stay_time="{{ $visit->stay_time}}"
                                                            data-status="{{ $visit->status }}"
                                                            data-pass_number="{{ $visit->pass_number }}"
                                                            data-hostname="{{ $visit->hostname }}"
                                                            data-entry_authorized_by ="{{ $visit->entry_authorized_by }}"
                                                            data-remarks="{{ $visit->remarks }}"
                                                            data-picture_url="{{ asset($visit->picture_url ?? 'assets/images/users/default-avatar.png') }}"
                                                            title="Éditer">
                                                            <i class="iconoir-edit"></i>
                                                        </a>
                                                        @endif
                                                        @if (Auth::user()->hasPermission("Delete"))
                                                        <button type="submit" class="btn btn-outline-dark rounded-pill btn-sm shadow-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer">
                                                            <i class="icofont-ui-delete"></i>
                                                        </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" class="text-center text-muted">Aucune visite enregistrée aujourd’hui.</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-lg-flex justify-content-lg-between mt-2 align-items-center">
                                        <div class="mb-2 mb-lg-0">
                                            <!-- <p class="mb-0 text-truncate fw-medium fs-13 text-muted">
                                                {{ $visits->firstItem() }} - {{ $visits->lastItem() }} sur {{ $visits->total() }}
                                            </p> -->
                                        </div>
                                        <div>
                                            {{ $visits->links('pagination::bootstrap-5') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!-- container -->
            <div class="endbar-overlay d-print-none"></div>


            <!-- modal create visit -->
            <x-visit-create-modal></x-visit-create-modal>

            <!--end Rightbar-->
            <!--Start Footer-->
            @include("components.footer")
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    @endsection
