<!DOCTYPE html>
<html lang="id">
<head>
    <title>WAPRON.ID Verification</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let user = '{{ $id }}';
    $.ajax({
        url: '{{ url('verify') }}',
        method: 'post',
        data: {
            id: user
        },
        success: function (response) {
            window.close();
        },
        error: function (response) {
            console.log(response);
        }
    })
</script>
</body>
</html>