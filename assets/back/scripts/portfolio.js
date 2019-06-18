$('.deletePortfolio').on('click', function (e) {
	e.preventDefault();
	const url = $(this).attr('href');
	swalDelete(url);
})
