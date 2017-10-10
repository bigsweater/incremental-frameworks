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
				<form id="product-configurator" novalidate>
					<div class="row">
						<div class="col-sm-6 text-center">
							<img alt="Product Image" :src="url" style="max-width: 100%; height: auto;">
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<div class="row">
									<div class="col-12">
										<label class="col-form-label" for="productText">Text</label>
										<input 
											type="text"
											class="form-control"
											:class="{ 'is-invalid': !validText }"
											id="productText"
											placeholder="Text on your image"
											v-model="text">
										<small
											class="form-text text-right"
											:class="{
												'text-muted': validText,
												'invalid-feedback': !validText,
											}">
											@{{ textLengthDifference }}
										</small>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="productSizeX">Size</label>
								
								<div class="row align-items-center">								
									<div class="col-5">
										<label class="sr-only" for="productSizeX">Width</label>
										<input
											class="form-control"
											:class="{ 'is-invalid': !validWidth }"
											type="number"
											id="productSizeX" 
											placeholder="Width" 
											aria-describedby="dimensionsHelp"
											min="50"
											max="600"
											v-model="size.width">
									</div>

									<div class="col-2">&times;</div>
									
									<div class="col-5">
										<label class="sr-only" for="productSizeY">Height</label>
										<input
											class="form-control"
											:class="{ 'is-invalid': !validHeight }"
											type="number"
											id="productSizeY" 
											placeholder="Height" 
											aria-describedby="dimensionsHelp"
											min="50"
											max="600"
											v-model="size.height">
									</div>
								</div>

								<small
									class="form-text text-right d-block"
									:class="{
										'text-muted': validWidth && validHeight,
										'invalid-feedback': !validWidth || !validHeight
									}">
									Minimum: 50. Maximum: 600.
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
							
							<h4 class="mb-0 text-right text-success">@{{ price }}</h4>
						</div>
					</div>
				</form>	
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" v-on:click="reset">Reset</button>
				<button type="button" class="btn btn-primary" :disabled="!validForm">Add to Cart</button>
			</div>
		</div>
	</div>
</section>