<?php include "header.php"; ?>

<div class="container-fluid position-relative p-0">
    <div class="bg-image" style="
      background: url('./img/istock.jpg') center center / cover no-repeat;
      height: 400px;">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div
            class="container h-100 d-flex flex-column justify-content-center align-items-center text-white position-relative">
            <h1 class="display-4 fw-bold">Project</h1>
            <p class="lead">Inspiration for Your Next Project</p>
        </div>
    </div>
</div>

<style>
    .transition {
        transition: transform 0.2s ease-in-out;
    }

    .transition:hover {
        transform: translateY(-5px);
    }
</style>
<div class="container py-4">
    <div class="text-center mb-5">
        <h5 class="text-danger">Our Projects</h5>
        <h2 class="fw-bold">From Vision to Reality</h2>
    </div>


    <div class="row g-4">

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/11.jpg" class="card-img-top" alt="Low Rise Building">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Low Rise Building</h5>
                    <p class="card-text text-muted">Commercial</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/2.jpg" class="card-img-top" alt="Winter Maintenance">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Winter Maintenance</h5>
                    <p class="card-text text-muted">Residential</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/3.jpg" class="card-img-top" alt="Solar Roof">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Solar Roof</h5>
                    <p class="card-text text-muted">Commercial</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/4.jpg" class="card-img-top" alt="Solar Roof">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Solar Roof</h5>
                    <p class="card-text text-muted">Residential</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/5.jpg" class="card-img-top" alt="Traditional Style Pattern">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Traditional Style Pattern</h5>
                    <p class="card-text text-muted">Residential</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/6.jpg" class="card-img-top" alt="Modern Style Pattern">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Modern Style Pattern</h5>
                    <p class="card-text text-muted">Residential</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>