<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<p>
	<?php
		echo sprintf( esc_attr__( 'Hello %s%s%s (not %2$s? %sSign out%s)', 'woocommerce' ), '<strong>', esc_html( $current_user->display_name ), '</strong>', '<a href="' . esc_url( wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) ) ) . '">', '</a>' );
	?>
</p>

<p>
	<?php
		echo sprintf( esc_attr__( 'From your account dashboard you can view your %1$srecent orders%2$s, manage your %3$sshipping and billing addresses%2$s and %4$sedit your password and account details%2$s.', 'woocommerce' ), '<a href="' . esc_url( wc_get_endpoint_url( 'orders' ) ) . '">', '</a>', '<a href="' . esc_url( wc_get_endpoint_url( 'edit-address' ) ) . '">', '<a href="' . esc_url( wc_get_endpoint_url( 'edit-account' ) ) . '">' );
	?>
	<br><br>
	<?php
		echo sprintf( esc_attr__( 'In addition, you can see your profile and connect with other members via our community by clicking below buttons.') );
	?>
	<br>
	<a href = "<?php echo sprintf ('http://ammii.org/doublej/members/'.$current_user->display_name.'/'); ?>"><img src="http://ammii.org/doublej/wp-content/uploads/2016/11/profile.png" width = "100" height = "40"></a>
	<a href = "<?php echo sprintf ('http://ammii.org/doublej/members/'.$current_user->display_name.'/notifications'); ?>"><img src="http://ammii.org/doublej/wp-content/uploads/2016/11/noti.png" width = "100" height = "40"></a>
	<a href = "<?php echo sprintf ('http://ammii.org/doublej/members/'.$current_user->display_name.'/messages'); ?>"><img src="http://ammii.org/doublej/wp-content/uploads/2016/11/msg.png" width = "100" height = "40"></a>
	<a href = "<?php echo sprintf ('http://ammii.org/doublej/members/'); ?>"><img src="http://ammii.org/doublej/wp-content/uploads/2016/11/member.png" width = "100" height = "40"></a>

</p>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );
?>
