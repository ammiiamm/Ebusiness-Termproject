<center>
<p>
<br>
        <a href="<?php echo $shop_page; ?>" class="button"><?php echo _e( 'View Your Store', 'wcvendors' ); ?></a> | 
        <a href="<?php echo $settings_page; ?>" class="button"><?php echo _e( 'Store Settings', 'wcvendors' ); ?></a> | 

<?php if ( $can_submit ) { ?>
                <a target="_TOP" href="<?php echo $submit_link; ?>" class="button"><?php echo _e( 'Add New Product', 'wcvendors' ); ?></a> | 
                <a target="_TOP" href="<?php echo $edit_link; ?>" class="button"><?php echo _e( 'Edit Products', 'wcvendors' ); ?></a> | 
                <a target="_TOP" href="http://doublej.ammii.org/vendorportal/" class="button"><?php echo _e( 'Double J Vendor Portal', 'wcvendors' ); ?></a>
<?php } 
do_action( 'wcvendors_after_links' );
?>
</center>

<hr>