@error('login')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
@error('password')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Atenção!',
                text: '{{ $message }}',
                showConfirmButton: true,
            });
        </script>
@enderror
