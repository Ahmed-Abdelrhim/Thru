@extends('frontend.app.master')
@section('main-content')


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <!-- START::Breadcrumb -->
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">DataTables</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Datatable</a>
                                    </li>
                                    <li class="breadcrumb-item active">Basic
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END::Breadcrumb -->

            <!-- START::content-body -->
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <p>Read full documentation <a href="https://datatables.net/" target="_blank">here</a></p>
                    </div>
                </div>
                <!-- END::content-body -->

                <!-- START:: Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($roles) and count($roles) > 0 )
                                        @foreach($roles as $key => $role)
                                           <tr>
                                              <td> {{ ++ $key  }} </td>
                                               <td> {{$role->name}} </td>
                                              <td>
                                                <div class="form-check form-check-primary form-switch">
                                                    <input type="checkbox" class="form-check-input" checked/>
                                                </div>
                                              </td>
                                              <td>
                                                  <div >
                                                      <a class="btn btn-primary" href="{{route('permission.show' , $role->id)}}" title="permissions">
                                                          <i class="fas fa-plus"></i>
                                                      </a>
                                                      <a class="btn btn-dark" title="Edit">
                                                          <i class="far fa-edit"></i>
                                                      </a>
                                                      <a class="btn btn-danger" title="Delete">
                                                          <i class="fa fa-trash"></i>
                                                      </a>
                                                  </div>
                                              </td>
                                           </tr>
                                        @endforeach
                                    @endif
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal to add new record -->
                    <div class="modal modal-slide-in fade" id="modals-slide-in">
                        <div class="modal-dialog sidebar-sm">
                            <form class="add-new-record modal-content pt-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-post">Post</label>
                                        <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                        <small class="form-text"> You can use letters, numbers & periods </small>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                        <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000" />
                                    </div>
                                    <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- END:: Basic table -->


            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
@push('script')
    <script>
       $(document).ready(function() {
           console.log('Document loaded Successfully');
       });
    </script>


    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch (type) {
            case 'info':
                iziToast.info({
                    title: 'info',
                    message: '{{ session('message') }}',
                    position: 'topRight'
                });
                break;

            case 'success':
                iziToast.success({
                    title: 'Success',
                    message: '{{ session('message') }}',
                    position: 'topRight'
                });
                break;

            case 'warning':
                iziToast.warning({
                    title: 'warning',
                    message: '{{ session('message') }}',
                    position: 'topRight'
                });
                break;

            case 'error':
                iziToast.error({
                    title: 'error',
                    message: '{{ session('message') }}',
                    position: 'topRight'
                });
                break;
        }
        @endif
    </script>

@endpush
