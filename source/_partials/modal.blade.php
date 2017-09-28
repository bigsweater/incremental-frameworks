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
				<form>
					<div class="row">
						<div class="col-sm-6">
							<img alt="100%x280" src="https://placehold.it/356x280/868e96/f8f9fa" style="height: 280px; width: 100%; display: block;">
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<div class="row">
									<div class="col-12">
										<label class="col-form-label" for="productText">Text</label>
										<input type="text" class="form-control" id="productText" placeholder="Text on your image" v-model="text">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="productSizeX">Size</label>
								
								<div class="row align-items-center">								
									<div class="col-5">
										<label class="sr-only" for="productSizeX">Width</label>
										<input class="form-control" type="text" id="productSizeX" placeholder="Width" aria-describedby="dimensionsHelp" v-model="size.width">
									</div>

									<div class="col-2">&times;</div>
									
									<div class="col-5">
										<label class="sr-only" for="productSizeY">Height</label>
										<input class="form-control" type="text" id="productSizeY" placeholder="Height" aria-describedby="dimensionsHelp" v-model="size.height">
									</div>
								</div>

								<small id="dimensionsHelp" class="form-text text-muted">
									Maximum width/height: 600 pixels. Minimum: 50 pixels.
								</small>
							</div>

							<div class="form-group">
								<label for="productColorScheme">Color Scheme</label>

								<div class="row">
									<div class="col-12">
										<select class="custom-select" id="productColorScheme" v-model="selectedColorScheme">
											<option value="">Choose a color scheme</option>
											<option v-for="(scheme, schemeName) in colorScheme" :value="schemeName" :selected="schemeName === selectedColorScheme">@{{schemeName}}</option>
										</select>
									</div>
								</div>
							</div>

							<div v-if="selectedColorScheme === 'Custom...'" class="form-group">
								<label for="productCustomColorScheme">Custom color scheme</label>

								<div class="row">
									<div class="col-6">
										<input id="productCustomColorScheme" type="color" name="productBGColor" v-model="colorScheme[selectedColorScheme].background" class="form-control p-0">
										<label class="form-text text-muted mt-0" for="productCustomColorScheme"><small>Background</small></label>
									</div>

									<div class="col-6">
										<input id="productTextColor" type="color" name="productTextColor" v-model="colorScheme[selectedColorScheme].text" class="form-control p-0">
										<label class="form-text text-muted mt-0" for="productTextColor"><small>Text</small></label>
									</div>
								</div>
							</div>
							
							<h4 class="mb-0 text-right text-success">$0.00</h4>
						</div>
					</div>
				</form>	
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
				<button type="button" class="btn btn-primary">Add to Cart</button>
			</div>
		</div>
	</div>
</section>