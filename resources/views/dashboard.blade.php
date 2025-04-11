    @extends("layouts.admin")

    @section("content")
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row gap-0">
                <div class="col-sm-12">
                    <div class="page-title-content d-sm-flex justify-content-sm-between align-items-center">
                        <h4 class="page-title mt-3 mt-md-0">Reports</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Materialy</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="#">Analytics</a>
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
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title">Leads Report</h4>
                                            </div><!--end col-->
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-sm btn-outline-light"><i class="icofont-download fs-14 me-1"></i>Download</button>
                                            </div><!--end col-->
                                        </div> <!--end row-->
                                    </div><!--end card-header-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="">
                                                    <tr>
                                                        <th class="border-top-0">Lead</th>
                                                        <th class="border-top-0">Email</th>
                                                        <th class="border-top-0">Phone No</th>
                                                        <th class="border-top-0">Company</th>
                                                        <th class="border-top-0">Status</th>
                                                        <th class="border-top-0 text-end">Action</th>
                                                    </tr><!--end tr-->
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-10.jpg" alt="" class="thumb-sm rounded me-2 d-inline-block">Donald Gardner</td>
                                                        <td>xyx@gmail.com</td>
                                                        <td>+123456789</td>
                                                        <td>Starbucks coffee</td>
                                                        <td><span class="badge text-success border border-success px-2">New Lead</span></td>
                                                        <td class="text-end">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="iconoir-edit text-secondary fs-18"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="iconoir-xmark-circle text-secondary fs-18"></i></a>
                                                        </td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-9.jpg" alt="" class="thumb-sm rounded d-inline-block me-2">Matt Rosales</td>
                                                        <td>xyx@gmail.com</td>
                                                        <td>+123456789</td>
                                                        <td>Mac Donald</td>
                                                        <td><span class="badge text-danger border border-danger px-2">Lost</span></td>
                                                        <td class="text-end">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="iconoir-edit text-secondary fs-18"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="iconoir-xmark-circle text-secondary fs-18"></i></a>
                                                        </td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-8.jpg" alt="" class="thumb-sm rounded d-inline-block me-2">Michael Hill</td>
                                                        <td>xyx@gmail.com</td>
                                                        <td>+123456789</td>
                                                        <td>Life Good</td>
                                                        <td><span class="badge text-success border border-success px-2">New Lead</span></td>
                                                        <td class="text-end">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="iconoir-edit text-secondary fs-18"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="iconoir-xmark-circle text-secondary fs-18"></i></a>
                                                        </td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-7.jpg" alt="" class="thumb-sm rounded d-inline-block me-2">Nancy Flanary</td>
                                                        <td>xyx@gmail.com</td>
                                                        <td>+123456789</td>
                                                        <td>Flipcart</td>
                                                        <td><span class="badge text-blue border border-blue px-2">Converted</span></td>
                                                        <td class="text-end">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="iconoir-edit text-secondary fs-18"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="iconoir-xmark-circle text-secondary fs-18"></i></a>
                                                        </td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-5.jpg" alt="" class="thumb-sm rounded d-inline-block me-2">Joseph Cross</td>
                                                        <td>xyx@gmail.com</td>
                                                        <td>+123456789</td>
                                                        <td>Reebok</td>
                                                        <td><span class="badge text-success border border-success px-2">New Lead</span></td>
                                                        <td class="text-end">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="iconoir-edit text-secondary fs-18"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="iconoir-xmark-circle text-secondary fs-18"></i></a>
                                                        </td>
                                                    </tr><!--end tr-->
                                                </tbody>
                                            </table> <!--end table-->
                                        </div><!--end /div-->
                                        <div class="d-lg-flex justify-content-lg-between mt-2 align-items-center">
                                            <div class="mb-2 mb-lg-0">
                                                <p class="mb-0 text-truncate fw-medium fs-13 text-muted">01-05 of 12</p>
                                            </div>
                                            <div>
                                                <ul class="pagination  pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1"><span aria-hidden="true">«</span></a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"><span aria-hidden="true">»</span></a>
                                                    </li>
                                                </ul><!--end pagination-->
                                            </div>
                                        </div><!--end table-responsive-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
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

            <!--end Rightbar-->
            <!--Start Footer-->
            @include("components.footer")
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    @endsection