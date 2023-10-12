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
                            <h2 class="content-header-title float-start mb-0">Roles</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Roles</a>
                                    </li>
                                    <li class="breadcrumb-item active">Permissions
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                            href="app-todo.html"><i class="me-1"
                                                                                                    data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                                                               href="app-chat.html"><i class="me-1"
                                                                                                       data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                                                               href="app-email.html"><i class="me-1"
                                                                                                        data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                                                                href="app-calendar.html"><i class="me-1"
                                                                                                            data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
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
                                <form class="myForm" id="myForm" method="POST" action="{{ route('permission.show.update' , $role->id) }}">
                                    @csrf
                                    <table class="datatables-basic table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Role</th>
                                            <th>Create</th>
                                            <th>Edit</th>
                                            <th>Show</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach ($permissionList as $permission)

                                            <tr>

                                                <!-- MainModule-->
                                                <td>
                                                    <div class="form-check form-check-primary form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                               class="mainmodule" id="{{$permission->name}}"
                                                               name="{{$permission->name}}"
                                                               value="{{$permission->id}}"
                                                               @if(isset($permissions[$permissionArray[$permission->name]])) checked @else  @endif
                                                               onclick="processCheck(this);" />
                                                    </div>
                                                </td>
                                                <!-- MainModule -->


                                                <!-- Role Name-->
                                                <td>
                                                    {{ ucfirst($permission->name) }}
                                                </td>
                                                <!-- Role Name -->


                                                <!-- Create -->
                                                <td>
                                                    @php
                                                        $permissionCreate = $permission->name . '_create';
                                                    @endphp
                                                    <div class="form-check form-check-primary form-switch">
                                                        @if(isset( $permissionArray[$permissionCreate]) )
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="{{$permissionCreate}}"
                                                                   name="{{$permissionCreate}}"
                                                                   value="{{ $permissionArray[$permissionCreate]}}"
                                                            @if(isset( $permissions[$permissionArray[$permissionCreate]] ))
                                                                checked
                                                            @endif
                                                            />
                                                        @else
                                                            &nbsp;
                                                        @endif
                                                    </div>
                                                </td>
                                                <!-- Create -->

                                                <!-- Edit -->
                                                <td>
                                                    @php
                                                        $permissionEdit = $permission->name . '_edit';
                                                    @endphp
                                                    <div class="form-check form-check-primary form-switch">
                                                        @if(isset( $permissionArray[$permissionEdit]) )
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="{{$permissionEdit}}"
                                                                   name="{{$permissionEdit}}"
                                                                   value="{{ $permissionArray[$permissionEdit]}}"
                                                            @if(isset( $permissions[$permissionArray[$permissionEdit]] ))
                                                                checked
                                                            @endif
                                                            />
                                                        @else
                                                            &nbsp;
                                                        @endif
                                                    </div>
                                                </td>
                                                <!-- Edit -->

                                                <!-- Show -->
                                                <td>
                                                    @php
                                                        $permissionShow = $permission->name . '_show';
                                                    @endphp
                                                    <div class="form-check form-check-primary form-switch">
                                                        @if(isset( $permissionArray[$permissionShow]) )
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="{{$permissionShow}}"
                                                                   name="{{$permissionShow}}"
                                                                   value="{{ $permissionArray[$permissionShow]}}"
                                                            @if(isset( $permissions[$permissionArray[$permissionShow]] ))
                                                                checked
                                                            @endif
                                                            />
                                                        @else
                                                            &nbsp;
                                                        @endif
                                                    </div>
                                                </td>
                                                <!-- Show -->

                                                <!-- Delete -->
                                                <td>
                                                    @php
                                                        $permissionDelete = $permission->name . '_delete';
                                                    @endphp
                                                    <div class="form-check form-check-primary form-switch">
                                                        @if(isset( $permissionArray[$permissionDelete]) )
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="{{$permissionDelete}}"
                                                                   name="{{$permissionDelete}}"
                                                                   value="{{ $permissionArray[$permissionDelete]}}"
                                                            @if(isset( $permissions[$permissionArray[$permissionDelete]] ))
                                                                checked
                                                            @endif
                                                            />
                                                        @else
                                                            &nbsp;
                                                        @endif
                                                    </div>
                                                </td>
                                                <!-- Delete -->

                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>

                                    <div class="card-footer">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </section>
                <!-- END:: Basic table -->


            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('scripts')
    <script>


        $('.mainmodule').each(function () {

            var mainmodule = $(this).attr('id');


            var mainidCreate = mainmodule + "_create";
            var mainidEdit = mainmodule + "_edit";
            var mainidDelete = mainmodule + "_delete";
            var mainidShow = mainmodule + "_show";

            if (!$('#' + mainmodule).is(':checked')) {
                $('#' + mainidCreate).prop('disabled', true);
                $('#' + mainidCreate).prop('checked', false);

                $('#' + mainidEdit).prop('disabled', true);
                $('#' + mainidEdit).prop('checked', false);

                $('#' + mainidDelete).prop('disabled', true);
                $('#' + mainidDelete).prop('checked', false);

                $('#' + mainidShow).prop('disabled', true);
                $('#' + mainidShow).prop('checked', false);
            }
        });


        function processCheck(event) {
            var mainmodule = $(event).attr('id');

            var mainidCreate = mainmodule + "_create";
            var mainidEdit = mainmodule + "_edit";
            var mainidDelete = mainmodule + "_delete";
            var mainidShow = mainmodule + "_show";


            if ($('#' + mainmodule).is(':checked')) {

                $('#' + mainidCreate).prop('disabled', false);
                $('#' + mainidCreate).prop('checked', true);

                $('#' + mainidEdit).prop('disabled', false);
                $('#' + mainidEdit).prop('checked', true);

                $('#' + mainidDelete).prop('disabled', false);
                $('#' + mainidDelete).prop('checked', true);

                $('#' + mainidShow).prop('disabled', false);
                $('#' + mainidShow).prop('checked', true);


            } else {
                $('#' + mainidCreate).prop('disabled', true);
                $('#' + mainidCreate).prop('checked', false);

                $('#' + mainidEdit).prop('disabled', true);
                $('#' + mainidEdit).prop('checked', false);

                $('#' + mainidDelete).prop('disabled', true);
                $('#' + mainidDelete).prop('checked', false);

                $('#' + mainidShow).prop('disabled', true);
                $('#' + mainidShow).prop('checked', false);
            }

            if (mainmodule == 'dashboard') {
                $('#' + mainmodule).prop('disabled', false);
                $('#' + mainmodule).prop('checked', true);
            }
        }
    </script>
{{--    --}}





@endsection
