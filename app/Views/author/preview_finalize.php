<?php echo view('author/common/menu'); ?>

<main>
    <div class="container-fluid pb-5">

        <div class="row">
            <div class="col-md-12 p-0">
                <img id="main-banner" src="" class="img-fluid figure-img" alt="Main Banner"/>
            </div>
            <hr />
        </div>

        <div class="row">
            <div class="col-md-12 text-center text-sm-start">
                <h4><strong></strong></h4>
            </div>
        </div>

        <div class="card p-5">
            <div class="row">
                <div class="col">
                    <h4 class="fw-bold">Preview</h4>
                    <hr />
                    <p>You must click on the 'Finalize Disclosure' button to complete your disclosure and receive your confirmation email.</p>
                    <a class="btn btn-primary btn-sm finalizeAuthorDisclosureBtn">Finalize Disclosure</a>
                </div>
            </div>

            <div class="row">
                <div class="col disclosure_data">
                    <h5 class="fw-bold">
                        Disclosure Information for
                        <?= ucfirst($author['name']) ?> <?= ucfirst($author['surname']) ?>
                    </h5>
                    <table class="table table-bordered">
                        <tbody>
                        <!-- Financial Disclosure -->
                        <tr>
                            <td style="width:200px;">Financial Disclosure:</td>
                            <td>
                                <?= ($author['financial_relationship'] === 'Yes')
                                    ? 'I have held a financial relationship with an ineligible company within the past 24 months.'
                                    : 'I have NO financial relationship(s) with an ineligible company producing healthcare goods or services.'; ?>
                            </td>
                        </tr>

                        <!-- Disclosure Support -->
                        <tr>
                            <td>Disclosure Support:</td>
                            <td>
                                <?= ($author['disclosure_support'] == 1)
                                    ? 'Yes'
                                    : 'No'; ?>
                            </td>
                        </tr>

                        <!-- Disclosure Discussed -->
                        <tr>
                            <td>Disclosure Discussed:</td>
                            <td>
                                <?= ($author['disclosure_discussed'] == 1)
                                    ? 'Yes'
                                    : 'No'; ?>
                            </td>
                        </tr>

                        <!-- Signature -->
                        <tr>
                            <td>Signature:</td>
                            <td><?= !empty($author['disclosure_signature'])
                                    ? htmlspecialchars($author['disclosure_signature'])
                                    : 'N/A'; ?>
                            </td>
                        </tr>

                        <!-- Organizations and Affiliations -->
                        <tr>
                            <td>Organizations and Affiliations:</td>
                            <td>
                                <?php if (!empty($selectedOrganizations)): ?>
                                    <?php
                                    // Create a map of organization IDs for faster lookup
                                    $organizationMap = array_column($organizations, null, 'organization_id');
                                    $affiliationMap = array_column($affiliations, null, 'id');
                                    ?>

                                    <?php foreach ($selectedOrganizations as $org): ?>
                                        <?php
                                        // Get organization name directly from map
                                        $organizationName = $organizationMap[$org['id']]['name'] ?? 'N/A';
                                        ?>
                                        <strong><?= htmlspecialchars($organizationName) ?></strong>

                                        <?php if (!empty($org['affiliations'])): ?>
                                            <ul>
                                                <?php foreach ($org['affiliations'] as $affiliationId): ?>
                                                    <?php
                                                    // Get affiliation name directly from map
                                                    $affiliationName = $affiliationMap[$affiliationId]['name'] ?? 'N/A';
                                                    ?>
                                                    <li><?= htmlspecialchars($affiliationName) ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    No affiliated organizations.
                                <?php endif; ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>


                    <!-- Finalize Button -->
                    <a class="btn btn-primary btn-sm finalizeAuthorDisclosureBtn">Finalize Disclosure</a>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    $(function() {
        $('.finalizeAuthorDisclosureBtn').on('click', function(e) {
            e.preventDefault();

            let onError = false;

            $('.declarationCheckbox').each(function() {
                if (!this.checked) {
                    toastr.error('All declarations should be accepted.');
                    onError = true;
                }
            });

            if (onError) {
                return false;
            } else {
                window.location.href = "<?= base_url('/author/finalize') ?>";
            }
        });
    });
</script>
