const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		type: 'success',
		title: '' + flashData,
		showConfirmButton: false,
		timer: 1000
	})
}

//tombol hapus
$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const hapus = $(this).attr('href');
	Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.value) {
			document.location.href = hapus;
		}
	})
})
