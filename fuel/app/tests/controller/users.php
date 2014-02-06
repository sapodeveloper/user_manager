<?php
	/**
	 * Tests for Controller_Users
	 *
	 * @group  App
	 */
	class Test_Controller_Users extends TestCase
	{
		public function test_can_access_index_page()
	  {
	  	$response = Request::forge('users/index')->execute()->response();
      $this->assertEquals(200, $response->status); 
	  }
	}
