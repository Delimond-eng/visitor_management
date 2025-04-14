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
                                                <h4 class="card-title">Visites journaliers</h4>
                                            </div><!--end col-->
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-sm btn-outline-light"><i class="icofont-download fs-14 me-1"></i>Excel</button>
                                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#visit-create-modal"><i class="fa-solid fa-plus me-1"></i> Nouvelle visite</button>
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