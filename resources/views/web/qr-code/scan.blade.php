@extends('web.layouts.app')
@section('content')
<body>
    <div style="text-align: center;">
        <h1>QR Code Scanner</h1>
        <div id="reader" style="width:500px; margin:auto;"></div>
        <p id="result"></p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        function onScanSuccess(decodedText, decodedResult) {
            document.getElementById('result').innerText = `Scanned result: ${decodedText}`;

            const url = new URL(decodedText);
            const subject = url.searchParams.get("subject");
            const authId = url.searchParams.get("auth_id");

            const postData = {
                subject: subject,
                auth_id: authId
            };

            fetch(@json(route('web.qrcode.scan')), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(postData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                } else {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
        }

        Html5Qrcode.getCameras().then(devices => {
            if (devices && devices.length) {
                let cameraId = devices[0].id;
                let html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader", 
                    { 
                        fps: 10, 
                        qrbox: 250 
                    },
                    false
                );

                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
            } else {
                document.getElementById('result').innerText = 'No cameras found. Please connect a camera and refresh the page.';
            }
        }).catch(err => {
            document.getElementById('result').innerText = 'Error getting cameras. Please check console for details.';
        });
    });
</script>
@endsection
