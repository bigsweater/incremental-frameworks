@extends('_layouts.master')

@section('body')
<section class="jumbotron text-center">
	<div class="container">
		<h1 class="jumbotron-heading">Hero headline</h1>
		<p class="lead text-muted">Here is some hero content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quos omnis magni corrupti amet quas pariatur odio tenetur voluptatum atque, veniam ea accusantium id, ratione unde eos velit officiis expedita.</p>
		<p>
			<a href="#" class="btn btn-primary">Primary Call to Action</a>
			<a href="#" class="btn btn-secondary">Secondary Call to Action</a>
		</p>
	</div>
</section>

<div class="album text-muted">
	<div class="container">
		<div class="row">
			<div class="card">
				<img alt="100%x280" style="height: 280px; width: 100%; display: block;" src="https://placehold.it/356x280/868e96/f8f9fa">
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
			<div class="card">
				<img alt="100%x280" src="https://placehold.it/356x280/868e96/f8f9fa" style="height: 280px; width: 100%; display: block;">
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
			<div class="card">
				<img alt="100%x280" src="https://placehold.it/356x280/868e96/f8f9fa" style="height: 280px; width: 100%; display: block;">
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
		</div>
	</div>
</div>
@endsection
