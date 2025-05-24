<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

<div id="reader" style="width:300px;"></div>
<div id="hasil-scan" class="mt-2"></div>

<script>
    const scanner = new Html5Qrcode("reader");
    const channel = new BroadcastChannel("scanChannel");

    async function startScanner() {
        const devices = await Html5Qrcode.getCameras();
        if (!devices.length) {
            alert("Kamera tidak ditemukan");
            return;
        }

        const frontCam = devices.find((d) =>
            d.label.toLowerCase().includes("front")
        );
        const cameraId = frontCam ? frontCam.id : devices[0].id;

        scanner.start({
                deviceId: {
                    exact: cameraId
                }
            }, {
                fps: 10,
                qrbox: 250
            },
            (qrCodeMessage) => {
                document.getElementById("hasil-scan").innerText =
                    "QR ditemukan: " + qrCodeMessage;

                scanner.pause(); // pause sejenak

                // Kirim ke dashboard
                channel.postMessage({
                    uniqid: qrCodeMessage
                });

                setTimeout(() => {
                    scanner.resume(); // lanjut scan lagi
                }, 1000);
            },
            (err) => {
                // bisa diabaikan
            }
        );
    }

    startScanner();
</script>