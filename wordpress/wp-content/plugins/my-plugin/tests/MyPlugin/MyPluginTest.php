<?php
/**
 * MyPlugin Tests
 */
class MyPluginTest extends WP_UnitTestCase {
    public $plugin_slug = 'my-plugin';

    public function setUp() {
        parent::setUp();
        $this->my_plugin = $GLOBALS['my_plugin'];
    }

    public function testAppendContent() {
        $this->assertEquals( "<p>Hello WordPress Unit Tests</p>", $this->my_plugin->append_content(''), '->append_content() appends text' );
    }

    /**
     * A contrived example using some WordPress functionality
     */
    public function testPostTitle() {
        // This will simulate running WordPress' main query.
        // See wordpress-tests/lib/testcase.php
        $this->go_to('http://example.org/?p=1');

        // Now that the main query has run, we can do tests that are more functional in nature
        global $wp_query;
        $post = $wp_query->get_queried_object();
        $this->assertEquals('Hello world!', $post->post_title );
    }
}