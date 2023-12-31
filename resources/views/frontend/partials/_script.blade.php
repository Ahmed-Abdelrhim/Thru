<script src="{{asset('frontend/js/shared/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('frontend/js/shared/datatables.buttons.min.js')}}"></script>
<script src="{{asset('frontend/js/shared/dataTables.responsive.min.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script src="{{asset('frontend/js/shared/moment.min.js')}}"></script>
<script src="{{asset('frontend/js/shared/responsive.bootstrap5.min.js')}}"></script>
{{--<script src="{{asset('frontend/js/shared/toastr.min.js')}}"></script>--}}
<script src="{{asset('frontend/js/shared/vendors.min.js')}}"></script>

<!-- BEGIN: Theme JS-->
<script src="{{asset('frontend/js/shared/app-menu.min.js')}}"></script>
<script src="{{asset('frontend/js/shared/app.min.js')}}"></script>
<!-- END: Theme JS-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer">
</script>

<script>
    function display_ct6() {
        var x = new Date()
        var ampm = x.getHours() >= 12 ? ' PM' : ' AM';
        hours = x.getHours() % 12;
        hours = hours ? hours : 12;
        hours = hours - 1;
        if(hours === 0) {
            hours = 12;
        }
        var x1 = x.getMonth() + 1 + "/" + x.getDate() + "/" + x.getFullYear();
        // x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
        x1 = hours + ":" + x.getMinutes() + ":" + x.getSeconds() + ":" + ampm;
        document.getElementById('ct6').innerHTML = x1;
        display_c6();
    }

    function display_c6() {
        var refresh = 1000; // Refresh rate in milli seconds
        mytime = setTimeout('display_ct6()', refresh)
    }
    display_c6();
</script>
@yield('scripts')
<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
<script src="{{ asset('assets/modules/js/iziToast.min.js') }}"></script>




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








<script type="text/javascript">
    function deleteConfirmation(id) {
        swal.fire({
            title: "Delete?",
            icon: 'question',
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{{url('Admin/role/delete')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire("Done!", results.message, "success");
                            // refresh page after 2 seconds
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    }
                });
            } else {
                e.dismiss;
            }
        }, function (dismiss) {
            return false;
        })
    }
</script>
