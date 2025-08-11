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
                    <x-counters></x-counters>
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
                                            <button type="button" class="btn btn-sm btn-primary"
                                                data-bs-toggle="modal" data-bs-target="#visit-create-modal"><i
                                                    class="fa-solid fa-plus me-1"></i> Nouvelle visite</button>
                                            <a href="{{ url("/visits") }}" class="btn btn-sm btn-outline-light"><i
                                                    class="fa-solid fa-refresh"></i> Actualiser</a>
                                        </div><!--end col-->
                                    </form>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <form method="get" action="{{ route('visits') }}" class="me-2" style="max-width: 400px;" id="form">
                                @csrf
                                <div class="input-group" id="DateRange">
                                    <input type="date" name="started_at" class="form-control" placeholder="JJ/MM/AAAA" aria-label="StartDate">
                                    <span class="input-group-text text-uppercase">à</span>
                                    <input type="date" name="end_date" class="form-control" placeholder="JJ/MM/AAAA" aria-label="EndDate">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table mb-0 checkbox-all" id="datatable_visits">
                                    <thead>
                                        <tr>
                                            <th>Visiteur</th>
                                            <th>Date</th>
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
                                                <img src="{{ asset($visit->picture_url ?? 'assets/images/users/avatar-1.jpg') }}"
                                                    alt="" class="thumb-sm rounded me-2 d-inline-block">
                                                {{ $visit->full_name }}
                                            </td>
                                            <td>{{ $visit->visit_date->format("d/m/y") ?? '-' }}</td>
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
                                                    data-entry_authorized_by="{{ $visit->entry_authorized_by }}"
                                                    data-remarks="{{ $visit->remarks }}"
                                                    data-picture_url="{{ asset($visit->picture_url ?? 'assets/images/users/default-avatar.png') }}"
                                                    title="Éditer">
                                                    <i class="iconoir-edit"></i>
                                                </a>
                                                @endif
                                                @if (Auth::user()->hasPermission("Delete"))
                                                <form action="{{ route('delete', ['table' => 'visits', 'val' => $visit->id]) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm shadow-none rounded-pill" onclick="return confirm('Confirmer la suppression ?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if(Auth::user()->hasPermission("Export"))
                                <button type="button" class="btn btn-sm btn-primary csv">Export CSV</button>
                                <a href="{{ url('/visits.export.pdf') }}" class="btn btn-sm btn-primary csv">Export PDF</a>
                                @endif
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
<script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
<script>
    try {
        const table = new simpleDatatables.DataTable("#datatable_visits", {
            searchable: !0,
            fixedHeight: !1,
            labels: {
                placeholder: "Recherche...",
                perPage: "{select} résultats par page",
                noRows: "Aucune donnée",
                info: "Page {start} à {end} sur {rows} entrées"
            }
        });
        document.querySelector("button.csv").addEventListener("click", () => {
            table.export({
                type: "csv",
                download: !0,
                lineDelimiter: "\n\n",
                columnDelimiter: ";",
            });
        });
        const formFilter = document.getElementById("form");
        const dataTableTop = document.querySelector(".dataTable-top .dataTable-search");

        if (dataTableTop && formFilter) {
            dataTableTop.insertBefore(formFilter, dataTableTop.firstChild);
            dataTableTop.classList.add("d-flex", "align-items-center", "gap-2");
        }


    } catch (e) {

    }
</script>
@endpush