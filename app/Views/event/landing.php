<link href="<?=base_url()?>/assets/css/event/landing.css" rel="stylesheet">

<?php echo view('event/common/menu'); ?>
<?php echo view('event/common/event_details'); ?>
<style>
    .header-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 3rem;
        flex-wrap: wrap;
    }
    .header-logo {
        width: 200px;
        height: auto;
        margin: 0 1rem;
    }
    .header-title {
        flex: 1;
        text-align: center;
    }
</style>
<main class="light-white">
    <div class="container shadow-lg glass-container">
        <div class="card">
            <div class="row mt-4">
                <div class="text-center ">
                    <label class="alert alert-success text-center glass-content submissionBtn w-700" role="alert">
                        The submission site is now open!
                    </label>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col justify-content-center text-center ">
                    <button onClick="window.location.href='<?=base_url()?>login'" class="glass-button w-700  btn btn-primary btn-lg align-center" type="button">Submit Or Update Abstract</button>
                </div>
            </div>
            <hr/>
            <div class="container p-5 mt-5">
                <h1 class="text-center fw-bold">MEETING TITLE</h1>
                <p class="text-center">TBA, Japan<br>February 2026</p>
                <p class="text-center">Abstract Submission: May 1, 2025 – June 30, 2025</p>

                <h2 class="fw-bold mt-5">IMPORTANT DATES</h2>
                <ul>
                    <li>Abstract Submission: May 1, 2025 – June 30, 2025, at 11:59 Japan Standard Time</li>
                    <li>Abstract Acceptance Notification via E-mail: September 4, 2025*</li>
                    <li>Abstract Presenter Acceptance Deadline: October 2, 2025*</li>
                    <li>Meeting Dates: February 2026</li>
                </ul>
                <p>*Dates are subject to change.</p>

                <div class="text-center">
                    <h3> <u> Prior to submission oran abstract, please review all information on this page</u></h3>
                </div>

                <h2 class="fw-bold mt-5">ASIA & OCEANIA AUTHORSHIP</h2>
                <p>This inaugural meeting will be for the region, by the region. Therefore, a submitted abstract must have a senior author, presenting author and a majority of co-authors from the regions of Asia and/or Oceania.</p>

                <h2 class="fw-bold mt-5">SRS MEMBERSHIP</h2>
                <p>Abstracts may be submitted by SRS members and non-members.</p>

                <h2 class="fw-bold mt-5">ABSTRACT SUBMISSION SITE</h2>
                <ul>
                    <li>Please log in to submit your abstract here.</li>
                    <li>If you have not submitted a proposal to SRS before or submitted one prior to 2020, you will need to create a new account.</li>
                    <li>Submitters may revisit the site as often as necessary to edit the submission (finalized or not) at any time before the submission deadline.</li>
                    <li>No changes can be made to the abstract text after the submission deadline.</li>
                </ul>

                <h2 class="fw-bold mt-5">ABSTRACT CATEGORIES</h2>
                <ul>
                    <li>Adolescent Idiopathic Scoliosis</li>
                    <li>Adult Spinal Deformity</li>
                    <li>Basic/Translational Science</li>
                    <li>Cervical Deformity</li>
                    <li>Early Onset Scoliosis</li>
                    <li>Kyphosis (SK, Congenital and Pathological Conditions)</li>
                    <li>Miscellaneous Categories (Spondy, Trauma, Tumor, etc.)</li>
                    <li>Neuromuscular/Syndromic Deformity</li>
                    <li>Non-Operative Treatment Methods</li>
                    <li>Quality/Safety/Value/Complications</li>
                </ul>

                <h2 class="fw-bold mt-5">ABSTRACT SUBMISSION: KEY INFORMATION</h2>
                <ul>
                    <li>Abstracts are limited to a maximum of 2,500 characters.</li>
                    <li>Characters in the abstract title, body and table/image caption will be counted (including spaces).</li>
                    <li>Characters in the author and institution listing will not be counted.</li>
                    <li>For each co-author listed, you will need:
                        <ul>
                            <li>Full name</li>
                            <li>Designation/degree</li>
                            <li>Email (please ensure to double check all email addresses are correct)</li>
                            <li>Country</li>
                            <li>Institution/affiliation</li>
                        </ul>
                    </li>
                    <li>Only one (1) attachment is allowed per abstract. Attachments can include graphs, figures, images, or supplemental data.</li>
                    <li>All submitted abstracts will undergo a blinded review. To maintain an unbiased review of all abstracts, please do NOT include any identifying information such as researcher, institution, or study group names in your abstract. Inclusion of any identifying information will disqualify your abstract from review.</li>
                </ul>

                <h2 class="fw-bold mt-5">PREVIOUS PRESENTATION</h2>
                <p>Abstracts that have been presented or have been accepted to present at an SRS Annual Meeting or IMAST may not be considered for submission to this meeting.</p>

                <h2 class="fw-bold mt-5">TWO-YEAR FOLLOW UP REQUIREMENT</h2>
                <p>Two-year clinical follow-up is required for abstract submission. The two-year follow-up rule does not apply to categories of basic science or biomechanical studies or for topics where two-year follow-up is irrelevant, such as 30-day readmission rates.</p>

                <h2 class="fw-bold mt-5">DISCLOSURES</h2>
                <p>The Scoliosis Research Society (SRS) must ensure balance, independence, objectivity and scientific rigor in all educational activities. Therefore, ALL abstract authors must disclose all financial relationships held in the past 24 months with ineligible companies.*</p>
                <p>*An ineligible company is an entity whose primary business is producing, marketing, selling, re-selling, or distributing health care goods or services consumed by or on patients. For specific examples of ineligible companies visit accme.org/standards.</p>

                <h2 class="fw-bold mt-5">NOTIFICATIONS</h2>
                <ul>
                    <li>All submitters will be notified via email of the status of their submission(s). In the event that you do not receive notifications, please log into the submission site at ANY time to view any recent mail regarding your submissions.</li>
                </ul>

                <h2 class="fw-bold mt-5">ACCEPTANCE</h2>
                <ul>
                    <li>All selected authors will be required to respond to a formal invitation by the deadline set forth in their acceptance notification.</li>
                    <li>Authors without an account AND an updated disclosure cannot be added after the invitation response deadline. No exceptions will be made.</li>
                </ul>

                <h2 class="fw-bold mt-5">ATTENDANCE REQUIREMENTS</h2>
                <ul>
                    <li>By submitting an abstract to the TBA COURSE NAME, abstract authors agree that at least one (1) author will attend the meeting and will be available to present on the date and time assigned.</li>
                    <li>Presenting authors are expected to register to attend the meetings for which they are accepted by the deadline set forth in their acceptance notification. Submissions for which an author is not pre-registered by the dates set forth may be withdrawn from the program.</li>
                </ul>

                <h2 class="fw-bold mt-5">TECHNOLOGY TROUBLESHOOTING</h2>
                <ul>
                    <li>Please use one of the following browsers: Mozilla Firefox 4+, Safari 5+, Chrome 14+, Microsoft Edge</li>
                    <li>Browser back and forward arrows have been disabled. Users must use the page progress bar located at the top left of each page.</li>
                    <li>Inactivity of more than 90 minutes on system pages will result in a session time out. Please save your pages intermittently to avoid loss of data.</li>
                    <li>To successfully receive emails regarding your submission, you must add “@owpm1.com” as a safe sender in your email client.</li>
                </ul>

            </div>

            <div class="row mt-4">
                <div class="col justify-content-center text-center ">
                    <button onClick="window.location.href='<?=base_url()?>login'" class="glass-button w-700  btn btn-primary btn-lg align-center" type="button">Submit Or Update Abstract</button>
                </div>
            </div>

            <div class="row mt-4">
                <div class="text-center ">
                    <label class="alert alert-success text-center glass-content submissionBtn w-700" role="alert">
                        The submission site is now open!
                    </label>
                </div>
            </div>
        </div>
    </div>
</main>