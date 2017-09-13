@extends('_layouts.master')

@section('body')
<section class="jumbotron text-center">
	<div class="container">
		<h1 class="jumbotron-heading">Album example</h1>
		<p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
		<p>
			<a href="#" class="btn btn-primary">Main call to action</a>
			<a href="#" class="btn btn-secondary">Secondary action</a>
		</p>
	</div>
</section>

<div class="album text-muted">
	<div class="container">

		<div class="row">
			<div class="card">
				<img alt="100%x280" style="height: 280px; width: 100%; display: block;" src="https://unsplash.it/g/356/280?random&1">
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
			<div class="card">
				<img alt="100%x280" src="https://unsplash.it/g/356/280?random&2" style="height: 280px; width: 100%; display: block;">
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
			<div class="card">
				<img alt="100%x280" src="https://unsplash.it/g/356/280?random&3" style="height: 280px; width: 100%; display: block;">
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
		</div>

	</div>
</div>
@endsection
