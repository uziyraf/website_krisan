<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Tambah Petani Baru</title>
    </head>
<body>
    @include('admin._form')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#flowers-select').select2({
                placeholder: "Cari dan pilih bunga...",
                allowClear: true
            });
        });
    </script>
</body>
</html>