@extends("layouts.admin")


@section("content")
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row gap-0">
            <div class="col-sm-12">
                <div class="page-title-content d-sm-flex justify-content-sm-between align-items-center">
                    <h4 class="page-title mt-3 mt-md-0">Historiques de visite </h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Visitors management</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item"><a href="#">Visit Histories</a>
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
                <div class="col-lg-12">
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table mb-0 checkbox-all" id="datatable_histories">
                                <thead>
                                    <tr>
                                        <th>Date visite</th>
                                        <th>Visiteur</th>
                                        <th>Motif</th>
                                        <th>Heure Entrée.</th>
                                        <th>Heure Sortie</th>
                                        <th>Durée</th>
                                        <th>Autorisée par</th>
                                        <th>Créer | Modifier par</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($histories as $story)
                                    <tr>
                                        <td>{{ isset($story->visit->visit_date) ? $story->visit->visit_date->format("d/m/y | H:i") : '-' }}</td>
                                        <td>
                                            <img src="{{ asset($story->visit->picture_url ?? 'assets/images/users/avatar-1.jpg') }}"
                                                alt="" class="thumb-sm rounded me-2 d-inline-block">
                                            {{ $story->visit->full_name ?? '-' }}
                                        </td>
                                        <td>{{ $story->visit->purpose ?? '-' }}</td>
                                        <td>{{ $story->visit->time_in ?? '-' }}</td>
                                        <td>{{ $story->visit->time_out ?? '-' }}</td>
                                        <td>{{ $story->visit->stay_time ?? '-' }}</td>
                                        <td>{{ $story->visit->entry_authorized_by ?? '-' }}</td>
                                        <td>{{ $story->user->name ?? '-' }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!-- container -->
            <div class="endbar-overlay d-print-none"></div>
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
<script>
    try{
        const table = new simpleDatatables.DataTable("#datatable_histories", {
            searchable: !0,
            fixedHeight: !1,
            labels: {
                placeholder: "Recherche...",
                perPage: "{select} résultats par page",
                noRows: "Aucune donnée",
                info: "Page {start} à {end} sur {rows} entrées"
            }
        });
    
    }catch(e){
        
    }
</script>
@endpush