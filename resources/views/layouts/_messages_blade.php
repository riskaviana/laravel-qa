if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success!</strong> {{ session('success') }}
	<buton type="buton" class="close" data-dismiss="alert" aria-label="close">
		<span aria-hidden="true">&times;</span>
</buton>
</div>
@endif