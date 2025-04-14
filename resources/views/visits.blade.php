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
                    <h4 class="page-title mt-3 mt-md-0">Visites Managements</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Materialy</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item"><a href="#">Apps</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Contacts</li>
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</div><!--end page title-->

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Liste des visites</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <form class="row g-2">
                                        <div class="col-auto">
                                            <a class="btn btn-sm bg-primary-subtle text-primary dropdown-toggle d-flex align-items-center arrow-none"
                                                data-bs-toggle="dropdown" href="#" role="button"
                                                aria-haspopup="false" aria-expanded="false"
                                                data-bs-auto-close="outside">
                                                <i class="iconoir-filter-alt me-1"></i> Filter
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <div class="p-2">
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" checked
                                                            id="filter-all">
                                                        <label class="form-check-label" for="filter-all">
                                                            All
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" checked
                                                            id="filter-one">
                                                        <label class="form-check-label" for="filter-one">
                                                            New
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" checked
                                                            id="filter-two">
                                                        <label class="form-check-label" for="filter-two">
                                                            Active
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" checked
                                                            id="filter-three">
                                                        <label class="form-check-label" for="filter-three">
                                                            Inactive
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-auto">
                                            <button type="button" class="btn btn-sm btn-primary"
                                                data-bs-toggle="modal" data-bs-target="#visit-create-modal"><i
                                                    class="fa-solid fa-plus me-1"></i> Add Contact</button>
                                        </div><!--end col-->
                                    </form>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">

                            <div class="table-responsive">
                                <table class="table mb-0 checkbox-all" id="datatable_1">
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
                                        @foreach($visits as $visit)
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
                                                    data-entry_authorized_by="{{ $visit->entry_authorized_by }}"
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
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->

        <!--Start Rightbar-->
        <div class="endbar-overlay d-print-none"></div>

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
@push("styles")
<link href="assets/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />
@endpush
@push("scripts")
<script src="assets/libs/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/js/pages/datatable.init.js"></script>
@endpush