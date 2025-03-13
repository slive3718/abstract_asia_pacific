<div class="card p-3 mb-3 organization-item" data-id="${organizationCount}">
    <div class="mb-3">
        <label class="form-label">#${organizationCount} Name of Corporate Organization</label>
        <select class="form-select" name="organization[${organizationCount}][name]" required>
            <option value="">Select an organization</option>
            <option value="Alphatec Spine">Alphatec Spine</option>
            <option value="NuVasive">NuVasive</option>
            <option value="Medtronic">Medtronic</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Type of Affiliation/Financial Interest</label>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="organization[${organizationCount}][affiliation][]" value="Grants/Research Support">
            <label class="form-check-label">Grants/Research Support</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="organization[${organizationCount}][affiliation][]" value="Consultant">
            <label class="form-check-label">Consultant</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="organization[${organizationCount}][affiliation][]" value="Stock/Shareholder">
            <label class="form-check-label">Stock/Shareholder (self-managed)</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="organization[${organizationCount}][affiliation][]" value="Speaker's Bureau">
            <label class="form-check-label">Speaker's Bureau</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="organization[${organizationCount}][affiliation][]" value="Advisory Board or Panel">
            <label class="form-check-label">Advisory Board or Panel</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="organization[${organizationCount}][affiliation][]" value="Employee, Salary">
            <label class="form-check-label">Employee, Salary</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="organization[${organizationCount}][affiliation][]" value="Other Financial or Material Support">
            <label class="form-check-label">Other Financial or Material Support (royalties, patents, etc)</label>
        </div>
    </div>
    <button type="button" class="btn btn-danger btn-sm remove-organization" data-id="${organizationCount}">Remove</button>
</div>