<?php include "header.php"; ?>


<div class="container-fluid position-relative p-0">
    <div class="bg-image" style="
      background: url('./img/working.jpg') center center / cover no-repeat;
      height: 400px;">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div
            class="container h-100 d-flex flex-column justify-content-center align-items-center text-white position-relative">
            <h1 class="display-4 fw-bold">Services</h1>
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
<div class="container py-4 mt-3">
    <div class="text-center mb-5">
        <h5 class="text-danger">Our Services</h5>
        <h2 class="fw-bold">What We Offer</h2>
    </div>

    <div class="row g-4">

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/services-1.jpg" class="card-img-top" alt="Roof Installations">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Roof Installations</h5>
                    <p class="card-text">Professional roof installations built to last. High-quality materials and
                        expert craftsmanship. Protecting your home with reliable, long-term solutions.</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/services-2.png" class="card-img-top" alt="Roof Repair">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Roof Repair</h5>
                    <p class="card-text">Fast and efficient roof repair services. Fixing leaks, damage, and wear with
                        expert care. Restoring your roof’s strength and reliability.</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/service-3-.png" class="card-img-top" alt="Leak Repair">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Leak Repair</h5>
                    <p class="card-text">Expert leak repair to stop water damage fast. Identifying and sealing leaks
                        with lasting solutions. Keeping your home dry, safe, and secure.</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/metal-roof.jpg" class="card-img-top" alt="Roof Installations 2">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Roof Installations</h5>
                    <p class="card-text">Expert roof installations for lasting performance. Using top-quality materials
                        and skilled craftsmanship. Built to withstand the elements and protect your home.</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/vegetative-roof.jpg" class="card-img-top" alt="Vegetative Roofing">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Vegetative Roofing</h5>
                    <p class="card-text">Eco-friendly vegetative roofing solutions. Improves insulation, reduces runoff,
                        and enhances air quality. A perfect blend of sustainability, beauty, and function.</p>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm h-100 shadow-sm hover-shadow transition">
                <img src="./img/metal-roof-1.jpg" class="card-img-top" alt="Specialty Metal">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Specialty Metal</h5>
                    <p class="card-text">High-quality specialty metal roofing for lasting durability. Custom designs
                        that combine strength with aesthetic appeal. Engineered to withstand harsh weather.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Roof Inspection Section -->
<section class="roof-inspection bg-white text-dark position-relative pt-5 pb-5 border-top">
    <!-- Top SVG Shape Divider -->
    <div class="position-absolute top-0 w-100" style="z-index: 1;">
        <svg viewBox="0 0 2600 131.1" preserveAspectRatio="none" class="w-100">
            <path fill="#f8f9fa" d="M0 0L2600 0 2600 69.1 0 0z"></path>
            <path fill="#f8f9fa" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z"></path>
            <path fill="#f8f9fa" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z"></path>
        </svg>
    </div>

    <div class="container position-relative z-2">
        <div class="text-center mb-5">
            <h6 class="text-uppercase text-danger fw-bold">Roof Inspection</h6>
            <h2 class="fw-bold">Scheduling an Appointment</h2>
            <p class="text-muted">
                Book your free roof inspection today. Our experts will assess potential issues and provide a fast,
                accurate quote.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label visually-hidden">Full Name</label>
                        <input type="text" class="form-control form-control-lg" id="name"
                            placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label visually-hidden">Phone number</label>
                        <input type="text" class="form-control form-control-lg" id="phone" placeholder="Phone number">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-warning btn-lg text-dark fw-bold">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>