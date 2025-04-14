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
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-3 border-b border-e border-bo">
                                <div class="card-body bg-info-subtle">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <div class="d-flex">
                                                <div class="bg-info text-white d-flex justify-content-center align-items-center thumb-md align-self-center  rounded-circle">
                                                    <i class="iconoir-archery fs-20 align-self-center"></i>
                                                </div>
                                                <div class="flex-grow-1 text-truncate align-self-center ms-2">
                                                    <p class="text-dark mb-0 fw-semibold">Projects</p>
                                                    <p class="mb-0 text-truncate fs-13 text-muted"><i class="las la-check-circle me-1 text-success"></i>26 Project Complete</p>
                                                </div><!--end media body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-auto align-self-center">
                                            <h4 class="text-dark mb-0 fw-semibold fs-22">81</h4>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div> <!--end col-->
                            <div class="col-md-6 col-lg-3 border-b border-e border-bo">
                                <div class="card-body bg-primary-subtle">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <div class="d-flex">
                                                <div class="bg-primary text-white d-flex justify-content-center align-items-center thumb-md align-self-center  rounded-circle">
                                                    <i class="iconoir-task-list fs-20 align-self-center"></i>
                                                </div>
                                                <div class="flex-grow-1 text-truncate align-self-center ms-2">
                                                    <p class="text-dark mb-0 fw-semibold">Tasks</p>
                                                    <p class="mb-0 text-truncate fs-13 text-muted"><span class="badge text-success border-0 bg-soft-success fs-9 px-2">Active</span> Weekly Avg.Sessions</p>
                                                </div><!--end media body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-auto align-self-center">
                                            <h4 class="text-dark mb-0 fw-semibold fs-22">104</h4>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div> <!--end col-->
                            <div class="col-md-6 col-lg-3 border-b border-e">
                                <div class="card-body bg-info-subtle">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <div class="d-flex">
                                                <div class="bg-info text-white d-flex justify-content-center align-items-center thumb-md align-self-center  rounded-circle">
                                                    <i class="iconoir-community fs-20 align-self-center"></i>
                                                </div>
                                                <div class="flex-grow-1 text-truncate align-self-center ms-2">
                                                    <p class="text-dark mb-0 fw-semibold">Members</p>
                                                    <p class="mb-0 text-truncate fs-13 text-muted">Working hard</p>
                                                </div><!--end media body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-auto align-self-center">
                                            <h4 class="text-dark mb-0 fw-semibold fs-22">82</h4>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div> <!--end col-->
                            <div class="col-md-6 col-lg-3 ">
                                <div class="card-body bg-primary-subtle">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <div class="d-flex">
                                                <div class="bg-primary text-white d-flex justify-content-center align-items-center thumb-md align-self-center  rounded-circle">
                                                    <i class="iconoir-multiple-pages fs-20 align-self-center"></i>
                                                </div>
                                                <div class="flex-grow-1 text-truncate align-self-center ms-2">
                                                    <p class="text-dark mb-0 fw-semibold">Invoices</p>
                                                    <p class="mb-0 text-truncate fs-13 text-muted">Soon to be cleared</p>
                                                </div><!--end media body-->
                                            </div><!--end media-->
                                        </div><!--end col-->
                                        <div class="col-auto align-self-center">
                                            <h4 class="text-dark mb-0 fw-semibold fs-22">51</h4>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div><!--end card-->
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
                                                        <img src="{{ asset($visit->picture_url ?? 'assets/images/users/default-avatar.png') }}"
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
                                                        <button type="submit" class="btn btn-outline-dark rounded-pill btn-sm shadow-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer">
                                                            <i class="icofont-ui-delete"></i>
                                                        </button>
                                                        <button type="submit" class="btn btn-outline-primary rounded-pill btn-sm  shadow-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Historique">
                                                            <i class="fa fa-clock-rotate-left"></i>
                                                        </button>
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

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Visits Details</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="">
                                            <tr>
                                                <th>URL</th>
                                                <th class="text-end">Views</th>
                                                <th class="text-end">Uniques</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>htpps:/</td>
                                                <td class="text-end">9.2k</td>
                                                <td class="text-end">7.9k</td>
                                            </tr>
                                            <tr>
                                                <td>.com/dashboard</td>
                                                <td class="text-end">7.7k</td>
                                                <td class="text-end">6.2k</td>
                                            </tr>
                                            <tr>
                                                <td>.com/ecommerce-index</td>
                                                <td class="text-end">6.8k</td>
                                                <td class="text-end">5.5k</td>
                                            </tr>
                                            <tr>
                                                <td>.com/apps/projects-overview</td>
                                                <td class="text-end">5k</td>
                                                <td class="text-end">4.9k</td>
                                            </tr>
                                            <tr>
                                                <td>.com/blog/crypto/exchange</td>
                                                <td class="text-end">4.3k</td>
                                                <td class="text-end">3.3k</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">By Social Media</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="">
                                            <tr>
                                                <th>Source</th>
                                                <th class="text-end">Views</th>
                                                <th class="text-end">Uniques</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Twitter</td>
                                                <td class="text-end">9.2k</td>
                                                <td class="text-end">7.9k</td>
                                            </tr>
                                            <tr>
                                                <td>Facebook</td>
                                                <td class="text-end">7.7k</td>
                                                <td class="text-end">6.2k</td>
                                            </tr>
                                            <tr>
                                                <td>Instagram</td>
                                                <td class="text-end">6.8k</td>
                                                <td class="text-end">5.5k</td>
                                            </tr>
                                            <tr>
                                                <td>LinkedIn</td>
                                                <td class="text-end">5k</td>
                                                <td class="text-end">4.9k</td>
                                            </tr>
                                            <tr>
                                                <td>WhatsApp</td>
                                                <td class="text-end">4.3k</td>
                                                <td class="text-end">3.3k</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
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