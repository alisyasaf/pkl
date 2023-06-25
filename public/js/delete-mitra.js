function showDeleteConfirmation(event) {
    event.preventDefault(); // Prevent the form from submitting immediately

    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
      title: 'Apakah Anda Yakin?',
      text: "Anda tidak dapat mengulang ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Tidak, batalkan!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        // Proceed with form submission
        event.target.closest('form').submit();
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire(
          'Dibatalkan',
          'Data Anda tidak terhapus.',

        )
      }
    });
  }
