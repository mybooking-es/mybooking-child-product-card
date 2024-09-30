<?php
/**
 *   MYBOOKING ENGINE - Choose product card list single rates  TEMPLATE
 *   ---------------------------------------------------------------------------
 *   The Template for showing the planning component
 *   This template overridde
 *   theme/mybooking-templates/mybooking-plugin-reservation-product-card-list-tmpl.php
 * 
 *   @phpcs:disable PHPCompatibility.Miscellaneous.RemovedAlternativePHPTags.MaybeASPOpenTagFound
 *   @phpcs:disable Generic.PHP.DisallowAlternativePHPTags.MaybeASPOpenTagFound
 *   @phpcs:disable Generic.PHP.DisallowAlternativePHPTags.MaybeASPShortOpenTagFound
 */
?>
<script type="text/tpml" id="script_detailed_product">
	<!-- ===== Product list container you can add your customer classes like customer_prefix_horizontal_card etc ===== -->
	<div class="customer_prefix_horizontal_card">
		<!-- === Product list === -->
		<% if (products.length && products.length > 0) { %>
			<!-- / List -->
			<% for (var idx=0;idx<products.length; idx++) { %>
				<% var product = products[idx]; %>
				<div class="customer_prefix_horizontal_card_box">
					<!-- // Product image box -->
					<div class="customer_prefix_horizontal_card_imageBox">
						<!-- /// Product highlight parameter -->
						<% if (product.highlight_message && product.highlight_message !== '') { %>
							<span class="mb-badge">
								<%= product.highlight_message %>
							</span>
						<% } %>

						<!-- /// Product image parameter -->
						<% if (product.photo && product.photo !== '') { %>
							<img src="<%= product.photo %>" alt="<%= product.name %>" />
						<% } else { %>
							<img src="<?php echo esc_url( plugin_dir_url(__DIR__).'/assets/images/default-image-product.png' ) ?>"  alt="<%= product.name %>" />
						<% } %>

						<!-- /// Product key_characteristics parameters -->
						<?php if ( array_key_exists('show_key_characteristics', $args) && ( $args['show_key_characteristics'] !== 'hide' ) ): ?>
							<% if (product.key_characteristics) { %>
								<div class="customer_prefix_horizontal_card_characteristics">
									<% if (product.key_characteristics['doors'] && product.key_characteristics['doors'] !== '') { %>
										<div class="customer_prefix_horizontal_card_characteristics-item">
											<span class="customer_prefix_horizontal_card_characteristics-key">
											<%=product.key_characteristics['doors']%>  <?php echo esc_html_x( 'Doors', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											</span>
										</div>
									<% } %>
									<% if (product.key_characteristics['seats'] && product.key_characteristics['seats'] !== '') { %>
										<div class="customer_prefix_horizontal_card_characteristics-item">
											<span class="customer_prefix_horizontal_card_characteristics-key">
											<%=product.key_characteristics['seats']%>  <?php echo esc_html_x( 'Seats', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											</span>
										</div>
									<% } %>
									<% if (product.key_characteristics['suitcases'] && product.key_characteristics['suitcases'] !== '') { %>
										<div class="customer_prefix_horizontal_card_characteristics-item">
											<span class="customer_prefix_horizontal_card_characteristics-key">
											<%=product.key_characteristics['suitcases']%>  <?php echo esc_html_x( 'Suitcases', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											</span>
										</div>
									<% } %>
									<% if (product.key_characteristics['fuel'] && product.key_characteristics['fuel'] !== '') { %>
										<div class="customer_prefix_horizontal_card_characteristics-item">
											<span class="customer_prefix_horizontal_card_characteristics-key">
											<% if (product.key_characteristics['fuel'] === 'D') { %>
												<?php echo esc_html_x( 'Diesel', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>  <?php echo esc_html_x( 'Fuel', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											<% } else if (product.key_characteristics['fuel'] === 'E') { %>
												<?php echo esc_html_x( 'Electric', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>  <?php echo esc_html_x( 'Fuel', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											<% } else if (product.key_characteristics['fuel'] === 'H') { %>
												<?php echo esc_html_x( 'Hybrid', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>  <?php echo esc_html_x( 'Fuel', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											<% } else if (product.key_characteristics['fuel'] === 'G/D') { %>
												<?php echo esc_html_x( 'Petrol / Diesel', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>  <?php echo esc_html_x( 'Fuel', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											<% } else { %>
												<?php echo esc_html_x( 'Petrol', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>  <?php echo esc_html_x( 'Fuel', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											<% } %>
											</span>
										</div>
									<% } %>
									<% if (product.key_characteristics['transmission'] && product.key_characteristics['transmission'] !== '') { %>
										<div class="customer_prefix_horizontal_card_characteristics-item">
											<span class="customer_prefix_horizontal_card_characteristics-key">
											<%=product.key_characteristics['transmission']%>  <?php echo esc_html_x( 'Transmission', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											</span>
										</div>
									<% } %>
									<% if (product.key_characteristics['air_conditioner'] && product.key_characteristics['air_conditioner'] === 'Yes') { %>
										<div class="customer_prefix_horizontal_card_characteristics-item">
											<span class="customer_prefix_horizontal_card_characteristics-key">
												<?php echo esc_html_x( 'Air conditioner', 'mybooking-child-product-card', 'mybooking-wp-plugin') ?>
											</span>
										</div>
									<% } %>

									<!-- Dimensions characteristics -->
									<% if (product.characteristic_length && product.characteristic_length != 0) { %>
										<div class="customer_prefix_horizontal_card_characteristics-item">
											<span class="customer_prefix_horizontal_card_characteristics-key">
												<?php echo esc_html( MyBookingEngineContext::getInstance()->getLength() ) ?> <%=product.characteristic_length%> m.
											</span>
										</div>
									<% } %>
									<% if (product.characteristic_width && product.characteristic_width != 0) { %>
										<div class="customer_prefix_horizontal_card_characteristics-item">
											<span class="customer_prefix_horizontal_card_characteristics-key">
												<?php echo esc_html( MyBookingEngineContext::getInstance()->getWidth() ) ?> <%=product.characteristic_width%> m.
											</span>
										</div>
									<% } %>
									<% if (product.characteristic_height && product.characteristic_height != 0) { %>
										<div class="customer_prefix_horizontal_card_characteristics-item">
											<span class="customer_prefix_horizontal_card_characteristics-key">
												<?php echo esc_html( MyBookingEngineContext::getInstance()->getHeight() ) ?> <%=product.characteristic_height%> m.
											</span>
										</div>
									<% } %>
								</div>
							<% } %>
						<?php endif; ?>
					</div>

					<!-- // Product description box -->
					<div class="customer_prefix_horizontal_card_descriptionsBox">
						<div>
							<!-- /// Product few_available_units parameter -->
							<% if (product.few_available_units) { %>
								<span class="mb-badge danger">
									<?php echo esc_html_x( 'Few units left!', 'renting_choose_product', 'mybooking-wp-plugin') ?>
								</span>
							<% } %>

							<!-- /// Product discount parameter -->
							<% if (product.offer_discount_type == 'percentage' || product.offer_discount_type == 'amount') { %>
								<span class="mb-badge info">
									<%=new Number(product.offer_value)%>% <%=product.offer_name%>
								</span>
							<% } else if (typeof shoppingCart.promotion_code !== 'undefined' && shoppingCart.promotion_code !== null && shoppingCart.promotion_code !== '' && (product.promotion_code_discount_type == 'percentage' || product.promotion_code_discount_type == 'amount') ) { %>
								<span class="mb-badge success">
									<%=new Number(product.promotion_code_value)%>% <%=shoppingCart.promotion_code%>
								</span>
							<% } %>
						</div>

						<!-- /// Product name parameter -->
						<% if (product.name && product.name !== '' && product.name != product.short_description) { %>
							<div class="customer_prefix_horizontal_card_descriptionsBox-name">
								<%= product.name %>
							</div>
						<% } %>

						<!-- /// Product short_description parameter -->
						<% if (product.short_description && product.short_description !== '') { %>
							<div class="customer_prefix_horizontal_card_descriptionsBox-short_description">
								<%= product.short_description %>
							</div>
						<% } %>

						<!-- /// Product description parameter -->
						<% if ((product.rate_type && product.rate_type.description && product.rate_type.description  != '') || (product.description && product.description.replace(/<p><br><\/p>/g, '') !== '')) { %>
							<div class="customer_prefix_horizontal_card_descriptionsBox-description">
								<% if (product.rate_type && product.rate_type.description && product.rate_type.description != '') { %>
									<%=product.rate_type.description%>
								<% } else if (product.description&& product.description != '') { %>
									<%=product.description%>
								<% } %>
								<div class="customer_prefix_horizontal_card_descriptionsBox-description-overlay"></div> 
							</div>
						<% } %>

						<% if (product.description && product.description.replace(/<p><br><\/p>/g, '') !== '') { %>
							<!-- /// Product description more info button -->
							<div class="customer_prefix_horizontal_card_descriptionsBox-description-btn js-product-info-btn" data-toggle="modal" data-target="#infoModal" data-product="<%=product.code%>">
								<small>+ info</small>
							</div>
						<% } %>
					</div>

					<!-- // Product price box -->
					<div class="customer_prefix_horizontal_card_priceBox">
						<!-- // Product price info -->
						<% if ((!configuration.hidePriceIfZero || +product.price > 0) && (!configuration.hidePriceIfNotAvailable || product.availability)) { %>
							<div class="customer_prefix_horizontal_card_descriptionsBox-price">
								<!-- /// Price by day/hour/minute -->
								<% if (product.unit_base_price && product.unit_base_price !== '') { %>
									<div class="customer_prefix_horizontal_card_descriptionsBox-unit_base_price">
										<%= configuration.formatCurrency(product.unit_base_price) %>
										<!-- Day label -->
										<% if (product.price_units && product.price_units === 'days' && product.days && product.days !== '') { %>
											/ <%= i18next.t('common.days', {interpolation: {escapeValue: false}}) %>
										<% } %>
										<!-- Hour label -->
										<% if (product.price_units && product.price_units === 'hours' && product.hours && product.hours !== '') { %>
											/ <%= i18next.t('common.hours', {interpolation: {escapeValue: false}}) %>
										<% } %>
										<!-- Minutes label -->
										<% if (product.price_units && product.price_units === 'minutes' && product.minutes && product.minutes !== '') { %>
											/ <%= i18next.t('common.minutes', {interpolation: {escapeValue: false}}) %>
										<% } %>
									</div>
								<% } %>

								<!-- /// Price by day -->
								<% if (product.price_units && product.price_units === 'days' && product.days && product.days !== '') { %>
									<div class="customer_prefix_horizontal_card_descriptionsBox-price_units">
										x
										<%= i18next.t('common.days', {count: product.days, interpolation: {escapeValue: false}}) %>
									</div>
								<% } %>

								<!-- /// Price by hour -->
								<% if (product.price_units && product.price_units === 'hours' && product.hours && product.hours !== '') { %>
									<div class="customer_prefix_horizontal_card_descriptionsBox-price_units">
										x
										<%= i18next.t('common.hours', {count: product.hours, interpolation: {escapeValue: false}}) %>
									</div>
								<% } %>

								<!-- /// Price by minute -->
								<% if (product.price_units && product.price_units === 'minutes' && product.minutes && product.minutes !== '') { %>
									<div class="customer_prefix_horizontal_card_descriptionsBox-price_units">
										x
										<%= i18next.t('common.minutes', {count: product.minutes, interpolation: {escapeValue: false}}) %>
									</div>
								<% } %>
							</div>

							<!-- /// Original price -->
							<div class="customer_prefix_horizontal_card_priceBox-price">
								<small><?php echo esc_html_x('Total', 'renting_choose_product', 'mybooking-wp-plugin') ?></small>
								<% if (product.price && product.price != product.base_price) { %>
									<span class="customer_prefix_horizontal_card_priceBox-original_price">
										<%= configuration.formatCurrency(product.base_price)%>
									</span>
								<% } %>

								<!-- /// Product discount parameter -->
								<% if (product.offer_discount_type == 'percentage' || product.offer_discount_type == 'amount') { %>
									<span class="customer_prefix_horizontal_card_priceBox-price_discount">
										- <%=new Number(product.offer_value)%>%
									</span>
								<% } else if (typeof shoppingCart.promotion_code !== 'undefined' && shoppingCart.promotion_code !== null && shoppingCart.promotion_code !== '' && (product.promotion_code_discount_type == 'percentage' || product.promotion_code_discount_type == 'amount') ) { %>
									<span class="customer_prefix_horizontal_card_priceBox-price_discount">
									-  <%=new Number(product.promotion_code_value)%>%
									</span>
								<% } %>
							</div>

							<!-- /// Definitive price -->
							<span class="customer_prefix_horizontal_card_priceBox-definitive_price">
								<%=configuration.formatCurrency(+product.price +
												(+product.category_supplement_1_cost || 0) +
												(+product.category_supplement_2_cost || 0) +
												(+product.category_supplement_3_cost || 0))
											%>
							</span>

							<!-- /// Taxes included -->
							<?php if ( array_key_exists('show_taxes_included', $args) && ( $args['show_taxes_included'] ) ): ?>
								<small class="customer_prefix_horizontal_card_priceBox-taxes">
									<?php echo esc_html_x( 'Taxes included', 'renting_choose_product', 'mybooking-wp-plugin') ?>
								</small>
							<?php endif; ?>
						<% } %>

						<!-- // Product reservation button -->
						<% if (!product.exceeds_max && !product.be_less_than_min) { %>
							<% if (product.availability) { %>
								<!-- /// Reservation button -->
								<button class="mb-button btn-choose-product" data-product="<%=product.code%>"><?php echo esc_html_x('Book it!', 'renting_choose_product', 'mybooking-wp-plugin') ?></button>
							<% } else { %>
								<!-- /// Product is not available -->
								<span class="mb-button-product_not-available">
									<?php echo esc_html( MyBookingEngineContext::getInstance()->getNotAvailableMessage() ) ?>
								</span>
							<% } %>
						<% } else { %>
							<!-- /// Exceeds max duration -->
							<% if (product.exceeds_max) { %>
								<span class="mb-button-product_exceeds_max"><%= i18next.t('chooseProduct.max_duration', {duration: i18next.t('common.'+product.price_units, {count: product.max_value, interpolation: {escapeValue: false}} ), interpolation: {escapeValue: false}}) %></span>

							<!-- /// Less than min duration -->
							<% } else if (product.be_less_than_min) { %>
								<span class="mb-button-product_be_less_than_min"><%= i18next.t('chooseProduct.min_duration', {duration: i18next.t('common.'+product.price_units, {count: product.min_value, interpolation: {escapeValue: false}} ), interpolation: {escapeValue: false}}) %></span>
							<% } %>
						<% } %>
					</div>
				</div>
			<% } %>
		<% } else { %>
			<!-- / No items found alert -->
			<div class="mb-alert light">
				<?php echo esc_html_x( 'No items found', 'renting_choose_product', 'mybooking-wp-plugin') ?>
			</div>
		<% } %>
	</div>
</script>
