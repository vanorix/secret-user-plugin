<div class="wrap">
 
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
 
    <form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">
 
        <div id="universal-message-container">
            <h2>Universal Message</h2>
 
            <div class="options">
                <p>
                    <label>What message would you like to display above each post?</label>
                    <br />
                    <input type="text" name="acme-message" value="" />
                </p>
            </div>
        </div><!-- #universal-message-container -->
 
        <?php
            wp_nonce_field( 'acme-settings-save', 'acme-custom-message' );
            submit_button();
        ?>
 
    </form>
 
</div><!-- .wrap -->