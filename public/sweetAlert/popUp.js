

    // Listen for delete button click
    $(document).on('click', '.delete-btn', function() {
        const itemId = $(this).data('id');  // Get item ID

        // SweetAlert Confirmation Popup
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                // AJAX request to delete item
                $.ajax({
                    url: '/delete-item/' + itemId,  // Route to handle delete
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}', // Include CSRF token
                    },
                    success: function(response) {
                        if (response.success) {
                            // Remove the row from the table
                            $('#row-' + itemId).remove();
                            Swal.fire(
                                'Deleted!',
                                'The item has been deleted.',
                                'success'
                            );
                        } else {
                            Swal.fire(
                                'Error!',
                                'Something went wrong.',
                                'error'
                            );
                        }
                    },
                    error: function() {
                        Swal.fire(
                            'Error!',
                            'Unable to delete item.',
                            'error'
                        );
                    }
                });
            }
        });
    });

