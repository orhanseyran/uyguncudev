<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Temel stil */
        body {
            font-family: Arial, sans-serif;
        }

        /* Modal arka planı */
        .modal-background {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Opak siyah arka plan */
            justify-content: center;
            align-items: center;
        }

        /* Modal penceresi */
        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin: 0 auto;
        }

        /* Kapat düğmesi */
        .close-btn {
            cursor: pointer;
            color: #333;
            font-size: 20px;
            float: right;
        }
    </style>
</head>
<body>

<!-- Açılır modal butonu -->
<button onclick="openModal()">Açılır Modal</button>

<!-- Modal arka planı ve içeriği -->
<div id="myModal" class="modal-background">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <p>Modal içeriği buraya gelecek.</p>
    </div>
</div>

<script>
    // Modalı açan fonksiyon
    function openModal() {
        document.getElementById('myModal').style.display = 'flex';
    }

    // Modalı kapatan fonksiyon
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    // Arka planda tıklanınca modalı kapat
    window.onclick = function(event) {
        if (event.target === document.getElementById('myModal')) {
            closeModal();
        }
    }
</script>

</body>
</html>
