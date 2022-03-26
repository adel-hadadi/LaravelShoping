@if (session('swal-error'))
    <script>
        $(function() {
            Swal.fire({
                icon: 'error',
                title: 'حذف شد',
                text: '{{ session('swal-error') }}',
                confirmButtonText: 'باشه',
            });
        });
    </script>

@endif
