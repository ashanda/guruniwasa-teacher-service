@extends('web.layouts.app')
@section('content')
<body>
    <div class="qr-scanner-container">
        <h1>QR Code Scanner</h1>
        <div id="reader"></div>
        <p id="result"></p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
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
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: data.status === 'success' ? 'success' : 'error',
                    title: data.message,
                    showConfirmButton: false,
                    timer: 3000
                });
            })
            .catch(error => console.error('Error:', error));
        }

        function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
        }

        function initiateCamera() {
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
                    .then((stream) => {
                        const videoElement = document.createElement('video');
                        videoElement.srcObject = stream;
                        videoElement.setAttribute('playsinline', 'true'); // for iOS Safari
                        videoElement.play();

                        const html5QrcodeScanner = new Html5QrcodeScanner(
                            "reader", 
                            { fps: 10, qrbox: 250 },
                            false
                        );
                        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
                    })
                    .catch((err) => {
                        document.getElementById('result').innerText = 'Unable to access camera: ' + err.message;
                        console.error('getUserMedia error:', err);
                    });
            } else {
                document.getElementById('result').innerText = 'Camera access is not supported in this browser.';
            }
        }

        Html5Qrcode.getCameras().then(devices => {
            if (devices && devices.length) {
                initiateCamera();
            } else {
                document.getElementById('result').innerText = 'No cameras found. Please connect a camera and refresh the page.';
            }
        }).catch(err => {
            document.getElementById('result').innerText = 'Error getting cameras. Please check console for details.';
            console.error('Camera error:', err);
        });
    });
</script>

<style>
    /* Main container styling */
    .qr-scanner-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
        margin: auto;
    }

    /* QR Code reader styling */
    #reader {
        width: 100%;
        max-width: 500px;
        height: auto;
        margin: 20px auto;
    }


</style>
@endsection
