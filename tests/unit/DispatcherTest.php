<?PhP 
namespace App\Tests\Unit;

use App\Core\Dispatcher as CoreDispatcher;
use App\Tests\Stubs\EventStub;
use PHPUnit\Framework\TestCase;

class DispatcherTest extends TestCase{
    /**
     * @test
     */
    public function test_listeners_property_holds_listeners_in_array()
    {
        $dispatcher = new CoreDispatcher();

        $listeners = $dispatcher->getListeners();
        
        $this->assertIsArray($listeners);

        $this->assertEmpty($listeners);
    }

    
    public function it_can_add_listener()
    {
        $dispatcher = new CoreDispatcher();

        $dispatcher->addListener('UserLogOut' , new EventStub);

        $this->assertCount(1 , $dispatcher->getListeners()['UserLogOut']);
    }
}
