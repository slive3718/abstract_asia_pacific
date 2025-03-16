

<?php //print_r($author_details);exit;?>
<?php echo view('author/common/menu'); ?>

<main>
    <div class="container-fluid">
        <div class="row mt-5">
        <h5> Abstract Disclosure System Main Menu</h5>
        <hr />
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div id="landing-page-contents" class="container-fluid p-4">
                    <div class="submission-menu">
                        <div class="container mt-3">
                            <!-- Row 1 -->
                            <a href="<?= base_url().'author/financial_relationship_disclosure/'?>"  class="btn btn-light border w-100 text-start d-flex align-items-center mb-2">
                                <div class="bg-warning text-white px-3 py-2 fw-bold">1</div>
                                <div class="flex-grow-1 px-2">
                                    <strong>Financial Relationship Disclosure</strong>
                                </div>
                                <div class="text-end">
                                    Current date: <span class="">02/24/25</span> &nbsp; | &nbsp;
                                    Expires: <span class="">02/24/26</span> &nbsp; | &nbsp;
                                    <span class="text-success fw-bold">Complete</span>
                                </div>
                            </a>

                            <!-- Row 2 -->
                            <button class="btn btn-light border w-100 text-start d-flex align-items-center">
                                <div class="bg-warning text-white px-3 py-2 fw-bold">2</div>
                                <div class="flex-grow-1 px-2">
                                    <strong>Print/Preview/Finalize</strong>
                                </div>
                                <div class="text-end">
                                    Current date: <span class="">02/24/25</span> &nbsp; | &nbsp;
                                    Expires: <span class="">02/24/26</span> &nbsp; | &nbsp;
                                    <span class="text-success fw-bold">Complete</span>
                                </div>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
