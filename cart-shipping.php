<?php
/**
 * Shipping Methods Display
 *
 * In 2.1 we show methods per package. This allows for multiple methods per order if so desired.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-shipping.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

$formatted_destination    = isset( $formatted_destination ) ? $formatted_destination : WC()->countries->get_formatted_address( $package['destination'], ', ' );
$has_calculated_shipping  = ! empty( $has_calculated_shipping );
$show_shipping_calculator = ! empty( $show_shipping_calculator );
$calculator_text          = '';
?>

<tr class="woocommerce-shipping-totals shipping
	<?php if(get_theme_mod('cart_boxed_shipping_labels', 0) && 1 < count( $available_methods )) echo 'shipping--boxed'; ?>">
	<td class="shipping__inner" colspan="2">
		<table class="shipping__table <?php if ( 1 < count( $available_methods ) ) : ?>shipping__table--multiple<?php endif; ?>">
			<tbody>
			<tr>
				<th <?php if ( 1 < count( $available_methods ) ) : ?> colspan="2" <?php endif; ?>><?php echo wp_kses_post( $package_name ); ?></th>
				<td data-title="<?php echo esc_attr( $package_name ); ?>">

						<ul id="shipping_method" class="shipping__list woocommerce-shipping-methods">
								<li class="shipping__list_item">
									<input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate3" value="flat_rate:3" class="shipping_method"><label class="shipping__list_label" for="shipping_method_0_flat_rate3">Giao nhanh: <span class="woocommerce-Price-amount amount"><?php echo $tong_ship_nhanh ; ?><span class="woocommerce-Price-currencySymbol">₫</span></span></label>								
								</li>
								<li class="shipping__list_item">
									<input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate4" value="flat_rate:4" class="shipping_method"><label class="shipping__list_label" for="shipping_method_0_flat_rate4">Giao chậm: <span class="woocommerce-Price-amount amount">20,000<span class="woocommerce-Price-currencySymbol">₫</span></span></label>								
								</li>
						</ul>
						
					

					<?php if ( $show_package_details ) : ?>
						<?php echo '<p class="woocommerce-shipping-contents"><small>' . esc_html( $package_details ) . '</small></p>'; ?>
					<?php endif; ?>

					<?php if ( $show_shipping_calculator ) : ?>
						<?php //woocommerce_shipping_calculator( $calculator_text ); ?>
					<?php endif; ?>
				</td>
			</tbody>
			</tr>
		</table>
	</td>
</tr>






