<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PrimeConstruct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container py-5">
        <div class="card shadow-lg">
            <div class="card-header bg-danger text-white">
                <h2 class="mb-0"><i class="bi bi-envelope-at-fill me-2"></i>Contact Us</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="row g-4 mb-3">
                        <div class="col-md-4">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" id="email" class="form-control" placeholder="name@example.com" required>
                        </div>
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Phone No*</label>
                            <input type="tel" id="phone" class="form-control" placeholder="123-456-7890" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label">Message*</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Write your message here..." required></textarea>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary btn-lg me-2"><i class="bi bi-send-fill me-1"></i>Submit</button>
                        <button type="reset" class="btn btn-outline-secondary btn-lg"><i class="bi bi-arrow-repeat me-1"></i>Reset</button>
                    </div>
                </form>
                <hr>
                <div class="row g-4">
                    <div class="col-md-4">
                        <h5><i class="bi bi-geo-alt-fill me-2"></i>Address</h5>
                        <p>Anand Icon Building, Back side of Bus-Stand, Baramati, Dist-Pune</p>

                        <h5><i class="bi bi-telephone-fill me-2"></i>Mobile Number</h5>
                        <p>+91 000 22 333 88</p>

                        <h5><i class="bi bi-envelope-fill me-2"></i>Email</h5>
                        <p>primeconstruct@gmail.com</p>
                    </div>
                    <div class="col-md-8">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15165.95721337625!2d74.58147690000001!3d18.1413601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1748583974600!5m2!1sen!2sin"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                class="rounded-3 border">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php include "footer.php";?>
</body>

</html>
