<?php include 'header.php'; ?>

<body class="bg-light">
    <style>
        body {
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            font-family: 'Segoe UI', sans-serif;
        }

        .faq-header {
            background-color: #0d6efd;
            color: white;
            padding: 3rem 1rem;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .faq-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.05);
        }

        .accordion-button::after {
            font-size: 1.2rem;
        }

        .accordion-button.collapsed {
            background-color: #f8f9fa;
        }

        .accordion-button {
            font-weight: 600;
            font-size: 1.05rem;
        }

        .bi {
            color: #0d6efd;
            margin-right: 10px;
        }
    </style>

    <header class="text-white py-4 text-center shadow-sm">
        <h2 class="fw-bold text-uppercase text-dark">Frequently Asked Questions</h2>
        <p class="text-secondary">Answers to common queries about PrimeConstruct</p>
    </header>


    <section class="container my-5">
        <div class="faq-card p-4">
            <div class="accordion" id="faqAccordion">


                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <i class="bi bi-tools"></i> What services does PrimeConstruct offer?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We specialize in residential, commercial, and industrial construction, interior design, and
                            renovation projects with turnkey solutions.
                        </div>
                    </div>
                </div>


                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <i class="bi bi-clipboard-check"></i> How do I request a project quote?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Simply visit our <a href="contact.php">Contact Page</a> and fill out the form, or call us
                            directly. We’ll respond within 24 hours.
                        </div>
                    </div>
                </div>


                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <i class="bi bi-shield-check"></i> Is PrimeConstruct licensed and insured?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we are fully licensed and insured for all construction services and comply with all
                            government safety regulations.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="faq4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <i class="bi bi-geo-alt"></i> What areas do you serve?
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We serve Pune, Baramati, and surrounding cities. For large-scale projects, we also work
                            across Maharashtra.
                        </div>
                    </div>
                </div>


                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="faq5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <i class="bi bi-hourglass-split"></i> How long does a typical project take?
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Timelines vary by project, but we always provide a clear schedule and aim to deliver on or
                            before the deadline.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php include "footer.php"; ?>
</body>