<x-layout>

</x-layout>

<script>
    let success = "{{Session::get('status')}}";
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1000
        });

        if (success) {
            $('.toastrDefaultSuccess').ready(function() {
                toastr.success(success)
            });
        }
    });
</script>