<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="card m-4">
        <div class="card-header">
            <h2>Contact Us</h2>
        </div>
        <div class="card-body">
            <form action="">
            <div class="row">
                <div class="col-4">
                    <p class="ms-3">Name*</p>
                    <input type="text" style="width: 320px; height: 37px;" class="ms-3">
                </div>
                <div class="col-4">
                    <p>Email*</p>
                    <input type="text" style="width: 320px; height: 37px;">
                </div>
                <div class="col-4">
                    <p class="ms-3">Phone No*</p>
                    <input type="text" style="width: 320px; height: 37px;" class="ms-3">
                </div>
            </div>
            <div class="ms-3">
                <p>Message*</p>
                <textarea name="" id="" style="width: 1110px; height: 150px;" class="mb-2"></textarea>
            </div>
            <button type="button" class="btn btn-primary btn-lg ms-3">Submit</button>
            <button type="button" class="btn btn-secondary btn-lg">Reset</button>
            </form>
            <hr>
            <div class="row">
                <div class="col-4">
                    <b>Address</b>
                    <p>Anand Icon Building Back side of Bus-Stand Baramati,dis-Pune</p>
                    <b>Mobial Number</b>
                    <p><b>91-</b>000 22 333 88.</p>
                    <b>Email</b>
                    <p>www.primeconstruct@gmail.com</p>
                </div>
                <div class="col-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15165.95721337625!2d74.58147690000001!3d18.1413601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1748583974600!5m2!1sen!2sin" width="740" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</body>

</html>