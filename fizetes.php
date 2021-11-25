	<!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Fizetés</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Főoldal</a></li>
							<li class="active">FIzetés</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
    
    <!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Számlázási cím</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Vezeték név">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Kereszt név">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="E-mail">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Utca/Házszám">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="Város">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Ország">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="Irányítószám">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telefonszám">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Regisztráció
									</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										<input class="input" type="password" name="password" placeholder="Adj meg egy jelszót">
									</div>
								</div>
							</div>
						</div>
						<!-- /Billing Details -->

                        <!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Szallítási cím</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Kiszállítás egy másik címre
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="Vezeték név">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Kerszt név">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="E-mail">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Utca/Házszám">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="Város">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Ország">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="Irányítószám">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telefonszám">
									</div>
								</div>
							</div>
						</div>
						<!-- /Shiping Details -->

                        <!-- Order notes -->
                        <div class="order-notes">
							<textarea class="input" placeholder="Megjegyzés"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Rendelésed</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>Termék</strong></div>
								<div><strong>Költség</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
								<div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
							</div>
							<div class="order-col">
								<div>Szállítás</div>
								<div><strong>Inygenes</strong></div>
							</div>
							<div class="order-col">
								<div><strong>Összesen</strong></div>
								<div><strong class="order-total">$2940.00</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								Elolvastam, és elfogadom a<a href="#">felhasználási feltételeket</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Megrendelés</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->