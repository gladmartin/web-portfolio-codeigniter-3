function swalDelete(url) {
	swal({
		title: 'Konfirmasi',
		text: "Data akan dihapus permanen",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Tidak',
		confirmButtonText: 'Ya'
	}).then((result) => {
		if (result.value) {
			document.location.href = url;
		}
	});
}

$('.delete-photo').on('click', function (e) {
	e.preventDefault();
	swal({
		title: 'Konfirmasi',
		text: "Foto akan dihapus",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Tidak',
		confirmButtonText: 'Ya'
	}).then((result) => {
		if (result.value) {
			const id = $(this).data('id');
			const el = $(this);
			$.ajax({
				type: "POST",
				url: "../deletephotoajax",
				data: {
					'id': id
				},
				success: function (msg) {
					if (msg == 1) {
						el.remove();
						$('.img-' + id).remove();
					}
				},
				error: function () {
					alert('something error');
				}

			});
		}
	});
});

function deleteThis(el) {
	el.remove();
}
