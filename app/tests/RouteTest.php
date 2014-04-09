
<?php

class RouteTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */

    /** @test */
	public function MainRoute()
	{
        $response = $this->call("GET","/");
        $this->assertTrue($response->isOk());
	}

    /** @test */
    public function CreateForm ()
    {
        $response = $this->call("GET","/create-form");
        $this->assertTrue($response->isOk());
        
    }
    /** @test */
    public function EditForm ()
    {
        $response = $this->call("GET","/edit-form");
        $this->assertTrue($response->isOk());
        
    }

}
