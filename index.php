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

<div class="col-12" style="height: 1500px; background-color: black;">
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
    <div class="container mb-5">
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

    <div class="container">
        <p class="text-danger text-center"><b>Additional Services</b></p>
        <h2 class="text-light text-center"><b>We Also Offer</b></h2>
        <p class="text-light text-center">In addition to our core services, we offer a wide range of additional
            solutions to meet
            all your home improvement and maintenance needs. These include gutter installation and repair to ensure
            proper drainage, as well as siding installation to enhance curb appeal and insulation. We provide expert
            interior and exterior painting, drywall repair, and custom carpentry for personalized finishes. Our
            insulation services help improve energy efficiency, while deck construction and power washing add beauty and
            functionality to outdoor spaces. We also specialize in tile and flooring installation, window and door
            replacement, fence installation, and basement finishing. For structural enhancements, we offer masonry work
            and lighting or fixture installation. Whether it's a large project or minor repairs, our general handyman
            services ensure that no task is too small or overlooked. Your satisfaction is our priority, and we’re here
            to make every part of your property the best it can be.
        </p>
        <div class="row text-light pt-3">
            <div class="col-2"></div>
            <div class="col-4">
                <ul>
                    <li>Interior & Exterior Painting</li>
                    <li>Custom Carpentry & Drywall Repair</li>
                    <li>Insulation & Energy Efficiency Upgrades</li>
                </ul>
            </div>
            <div class="col-4">
                <ul>
                    <li>Deck Construction & Outdoor Enhancements</li>
                    <li>Gutter and Siding Installation</li>
                    <li>Deck Construction & Outdoor Enhancements</li>
                </ul>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5"></div>
            <div class="col-2"><button type="button" class="btn btn-danger"> READ MORE </button></div>
            <div class="col-5"></div>
        </div>
    </div>
</div>
<div class="col-12 mt-5">
    <div class="container mb-5">
         <h5 class="text-danger"><b>Why Choose Us</b></h5>
         <h2><b>Six Reasons For People Choosing Us</b></h2>
         <div class="row mb-4 mt-3">
            <div class="col-4">
                <div class="card shadow text-center" style="height:250px;">
                    <i class="fa-solid fa-medal  fs-2 pt-4 pb-3"></i>
                    <p class="text-danger"><b>Quality Material</b></p>
                    <p class="p-2">We use only high-quality materials to ensure durability, safety, and long-lasting results in every construction project.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow text-center" style="height:250px;">
                    <i class="fa-regular fa-circle-check  fs-2 pt-4 pb-3"></i>
                    <p class="text-danger"><b>Accredited</b></p>
                    <p class="p-2">Our construction company is fully accredited, meeting industry standards for quality, safety, and professionalism.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow text-center" style="height:250px;">
                    <i class="fa-regular fa-user  fs-2 pt-4 pb-3"></i>
                    <p class="text-danger"><b>Trained Workers</b></p>
                    <p class="p-2">Our construction projects are handled by highly trained workers skilled in delivering precise, safe, and efficient results.</p>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-4">
                <div class="card shadow text-center" style="height:250px;">
                    <i class="fa-regular fa-clock  fs-2 pt-4 pb-3"></i>
                    <p class="text-danger"><b>Time Availabilaty</b></p>
                    <p class="p-2">We offer flexible time availability to accommodate your construction schedule and project needs.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow text-center" style="height:250px;">
                    <i class="fa-solid fa-phone-volume  fs-2 pt-4 pb-3"></i>
                    <p class="text-danger"><b>Quick Responce</b></p>
                    <p class="p-2">We provide quick response times to address client needs and ensure smooth progress throughout every construction project.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow text-center" style="height:250px;">
                    <i class="fa-solid fa-certificate  fs-2 pt-4 pb-3"></i>
                    <p class="text-danger"><b>1 Year Warranty</b></p>
                    <p class="p-2">We offer a 1-year warranty on all our construction work, ensuring quality and peace of mind for our clients.</p>
                </div>
            </div>
         </div>
    </div>

<?php
include "footer.php";
?>