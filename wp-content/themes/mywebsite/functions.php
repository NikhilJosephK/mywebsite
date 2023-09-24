
<!-- to register style.css -->

 <?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');


// to register javascript

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/main.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
  
}
add_action('wp_enqueue_scripts', 'add_script');


// ///////

add_action('rest_api_init', function () {
   register_rest_field('your_custom_post_type', 'context_data', array(
     'get_callback' => function ($post) {
       // Determine the context parameter value (e.g., 'view', 'embed', 'edit')
       $context = isset($_GET['context']) ? sanitize_text_field($_GET['context']) : 'view';
 
       // Prepare data based on the context
       $data = array();
 
       if ('view' === $context) {
         // Data for the 'view' context
         $data['title'] = $post['title']['rendered'];
         // Add more fields as needed
       } elseif ('embed' === $context) {
         // Data for the 'embed' context
         $data['content'] = $post['content']['rendered'];
         // Add more fields as needed
       } elseif ('edit' === $context) {
         // Data for the 'edit' context
         $data['title'] = $post['title']['raw'];
         // Add more fields as needed
       }
 
       return $data;
     },
   ));
 });
 