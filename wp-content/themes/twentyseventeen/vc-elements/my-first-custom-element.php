<?php

/*
Element Description: VC Info Box
*/
 
// Element Class 

class vcInfoBox extends WPBakeryShortCode {
     
    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'vc_infobox_mapping' ) );
        add_action( 'init', array( $this, 'vc_infobox_db' ) );

        add_shortcode( 'vc_infobox', array( $this, 'vc_infobox_html' ) );

    }
     
    // Element Mapping
    public function vc_infobox_mapping() {
         
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
         
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('VC Infobox', 'text-domain'),
                'base' => 'vc_infobox',
                'description' => __('Another simple VC box', 'text-domain'), 
                'category' => __('My Custom Elements', 'text-domain'),   
                'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',            
                'params' => array(   
                         
                    array(
                        'type' => 'textfield',
                        'holder' => 'h3',
                        'class' => 'title-class',
                        'heading' => __( 'Title', 'text-domain' ),
                        'param_name' => 'title',
                        'value' => __( 'Default value', 'text-domain' ),
                        'description' => __( 'Box Title', 'text-domain' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Custom Group',
                    ),  
                     
                    array(
                        'type' => 'textarea',
                        'holder' => 'div',
                        'class' => 'text-class',
                        'heading' => __( 'Text', 'text-domain' ),
                        'param_name' => 'text',
                        'value' => __( 'Default value', 'text-domain' ),
                        'description' => __( 'Box Text', 'text-domain' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Custom Group',
                    ),                      
                        
                ),
            )
        );                                
        
    }
     
     
    // Element HTML
    public function vc_infobox_html( $atts ) {
         
        // Params extraction
        extract(
            shortcode_atts(
                array(
                    'title'   => '',
                    'text' => '',
                ), 
                $atts
            )
        );
         
        // Fill $html var with data
       
        $html = '<form action="my-first-custom-element.php" method="post">
    <table>
        <tr>
            <td><label for="organizationname">Name:</label></td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email"/></td>
        </tr>
        <tr>
            <td><label for="msgtxt">Message txt:</label></td>
            <td><input type="textarea" name="msgtext"/></td>
        </tr>
       
       
        <tr>
            <td><button type="submit" name="submit">Submit</button></td>
        </tr>
    </table>
</form>';      
         
        return $html;
         
    }



   public function vc_infobox_db() {
        require_once('dbfile.php');

        if ( isset( $_POST['submit'] ) ){
            global $wpdb;
            $tablename = 'candidate';
            $wpdb->insert( $tablename, 
                array(
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'msg' => $_POST['msgtext']
                ),
                array( '%s','%s','%s') 
            );
        $from= $_POST['email'];
        $email = get_option('admin_email');
        $subject="Test mail For test purpose";
        $message = $_POST['msgtext'];
        $headers = 'From: '.  $email . "\r\n" . 'Reply-To: ' .  $from . "\r\n";

        if(wp_mail($from, $subject, $message, $headers)) {
            echo "<script>alert('Mail sent');</script>";
        }
        else {
            echo "<script>alert('Not sent');</script>";
        }

        }
    }

    
     
} // End Element Class
 
 
// Element Class Init
new vcInfoBox();  
?>