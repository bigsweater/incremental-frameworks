@extends('_layouts.master')

@section('body')
<section class="jumbotron text-center">
	<div class="container">
		<h1 class="jumbotron-heading">Hero headline</h1>
		<p class="lead text-muted">Here is some hero content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quos omnis magni corrupti amet quas pariatur odio tenetur voluptatum atque, veniam ea accusantium id, ratione unde eos velit officiis expedita.</p>
		<p>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalWidget">
				Launch demo modal
			</button>
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


<!-- Modal -->
<section class="modal fade" id="modalWidget" tabindex="-1" role="dialog" aria-labelledby="modalWidgetLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalWidgetLabel">Customize your product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
				<button type="button" class="btn btn-primary">Add to Cart</button>
			</div>
		</div>
	</div>
</section>

@endsection
