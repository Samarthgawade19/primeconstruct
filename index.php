<?php
include "header.php";
?>
<div class="row position-relative">
    <div class="col-12 p-0">
        <div class="image-container">
            <img src="./img/main_img.webp" alt="Main Image" class="img-fluid w-100">
            <div class="overlay-text">
                <div class="main-heading">
                    Welcome to <span class="highlight">PrimeConstruct</span>
                </div>
                <div class="tagline">
                    Building the Future with Precision and Passion
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.image-container {
    position: relative;
    height: 300px; /* adjust height as needed */
    overflow: hidden;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    z-index: 2;
    padding: 20px 30px;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 16px;
    max-width: 90%;
}

.main-heading {
    font-size: 2.5rem;
    font-weight: bold;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.8);
}

.tagline {
    font-size: 1.2rem;
    font-weight: 400;
    margin-top: 10px;
    text-shadow: 1px 1px 5px rgba(0,0,0,0.7);
    color: #f0f0f0;
}

.highlight {
    color: #FFD700;
}
</style>

<div class="container mt-5 mb-1">
    <div class="row">
        <div class="col-6">
            <b style="color: red;">About Company</b>
            <h1><b>Building with Purpose. Delivering with Pride.</b></h1>
            <p>Welcome to <b>primeconstruct</b>, where your vision meets our craftsmanship. We are a full-service
                construction company with a reputation built on quality, integrity, and excellence. From concept to
                completion, we deliver projects that stand the test of time — and exceed expectations.</p>
            <br>
            <a href="about.php"><button type="button" class="btn btn-danger"> READ MORE </button></a>
            <br>
            <div class="row">
                <div class="col-3"><img src="./img/founder.jpg" alt="Founder Image" class="mt-3"
                        style="height: 100px; width: 100px; border-radius: 50px;"></div>
                <div class="col-9 mt-3">
                    <p>Founder :</p>
                    <b>Omraj Optimiser</b>
                    <p>+91-444 333 44 66</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <b>What We Do</b>
            <p>We specialize in a wide range of construction services, including:</p>
            <br>
            <ul>
                <li>
                    <p>Residential and commercial building construction</p>
                </li>
                <li>
                    <p>Renovations and remodeling</p>
                </li>
                <li>
                    <p>Project planning and management</p>
                </li>
                <li>
                    <p>Structural repairs and maintenance</p>
                </li>
            </ul>
            <br>
            <b>Our Mission</b>
            <p>To shape the future of construction through innovation, quality, and a relentless commitment to client
                satisfaction.</p>
            <br>
            <b>Our Vision</b>
            <p>To be the most trusted construction partner in the region — known for building safely, sustainably, and
                successfully.</p>
            <br>
        </div>

    </div>
</div>

<div class="col-12" style="height: 1600px; background-color: black;">
    <div style="height: 200px; background-color: white;"></div>

    <div style="height: 200px; background-color: black; mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="bg-danger shadow text-center pt-5"
                        style="height: 170px; width: 250px; margin-top: -85px;">
                        <h1 class="text-light"><b>15+</b></h1>
                        <p class="text-light">Years In Business</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="shadow text-center pt-5"
                        style="height: 170px; width: 250px; background-color: white; margin-top: -85px;">
                        <h1><b>1.5K</b></h1>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="bg-dark shadow text-center pt-5"
                        style="height: 170px; width: 250px; margin-top: -85px;">
                        <h1 class="text-light"><b>2.5k</b></h1>
                        <p class="text-light">Projects Completed</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="bg-danger shadow text-center pt-5"
                        style="height: 170px; width: 250px; margin-top: -85px;">
                        <h1 class="text-light"><b>150+</b></h1>
                        <p class="text-light">Trained Staff</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="text-danger text-center"><b>Our Services</b></p>
        <h2 class="text-light text-center mb-5">We Provide Superior Construction Services</h2>
        <div class="row">
            <div class="col-4">
                <img src=".\img\services-1 (1).jpg" alt="" style="height: 225px;">
                <div class="container p-2 text-light">
                    <h5>Roof Installations</h5>
                    <p>Roof installations involve the removal of old roofing materials if necessary.
                        A weatherproof underlayment is laid to protect against moisture.
                        Shingles, tiles, or metal panels are installed based on the chosen roofing type.
                    </p>
                    <a href="" class="btn btn-outline-danger">READ MORE</a>
                </div>
            </div>
            <div class="col-4">
                <img src=".\img\services-2 (1).png" alt="" style="height: 225px;">
                <div class="container p-2 text-light">
                    <h5>Renovations and remodeling</h5>
                    <p>Renovations and remodeling update and improve existing structures.
                        Common projects include kitchen, bathroom, and basement makeovers.
                        The goal is to enhance functionality, comfort, and property value.
                    </p>
                    <a href="" class="btn btn-outline-danger">READ MORE</a>
                </div>
            </div>
            <div class="col-4">
                <img src=".\img\services-3.png" alt="" style="height: 225px;">
                <div class="container p-2 text-light">
                    <h5>Structural repairs and maintenance</h5>
                    <p>Structural repairs address damage to foundations, beams, walls, and supports.
                        Maintenance ensures buildings remain safe, stable, and up to code.
                        Common issues include cracks, water damage, and settling.
                    </p>
                    <a href="" class="btn btn-outline-danger">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>