function importUsers(){
    let custom_modal = $('#custom_modal');


    let modal_body = custom_modal.find('.modal-body');
    let modal_body_content = `
        <div class="mb-3">
            <label for="user_upload" class="form-label fw-bold">File Upload</label>
            <input type="file" name="user_import_file" id="user_import_file" class="form-control">
            
            <button class="btn btn-primary mt-2" onClick="doImportUsers();"> Upload </button>
        </div>
    `;
    modal_body.html(modal_body_content)
    custom_modal.modal('show')
}

function doImportUsers() {
    let formData = new FormData();
    let file = $('#user_import_file').prop('files')[0]; // Get the file object

    if (file) {

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {

                formData.append('user_import_file', file);

                $.ajax({
                    url: base_url+ '/admin/importUsers', // Adjust the URL to your endpoint
                    method: 'POST',
                    data: formData,
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Let the browser set the content type automatically
                    success: function(response) {
                        if (response.status === 'success') {
                            alert('Users imported successfully!');
                            window.location.reload(); // Refresh the page if needed
                        } else {
                            alert(response.message || 'Failed to import users.');
                        }
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr.responseText);
                        alert('An error occurred while importing users.');
                    }
                });
                //
                // Swal.fire({
                //     title: "Deleted!",
                //     text: "Your file has been deleted.",
                //     icon: "success"
                // });
            }
        });


    } else {
        alert('Please select a file to upload.');
    }
}
