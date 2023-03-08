<?PhP 
namespace APp\Tests\Integration;

use App\Core\Dispatcher;
use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\ListenerStub;
use PHPUnit\Framework\TestCase;

class DispatcherTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_dispatch_event()
    {
        $dispatcher = new Dispatcher();

        $event = new EventStub();

        $mockListener = $this->createMock(ListenerStub::class);

        $mockListener->expects($this->once())->method('handle')->with($event);

        $dispatcher->addListener('UserLogOut' , $mockListener);

        $dispatcher->dispatch($event);
    }

    /**
     * @test
     */
    public function it_can_dispatch_multiple_listeners_for_the_event()
    {
        $dispatcher = new Dispatcher();

        $event = new EventStub();

        $mockListener = $this->createMock(ListenerStub::class);

        $secondMockListener = $this->createMock(ListenerStub::class);

        $thirdMockListener = $this->createMock(ListenerStub::class);

        $mockListener->expects($this->once())->method('handle')->with($event);

        $secondMockListener->expects($this->once())->method('handle')->with($event);
        
        $thirdMockListener->expects($this->once())->method('handle')->with($event);

        $dispatcher->addListener('UserLogOut' , $mockListener);

        $dispatcher->addListener('UserLogOut' , $secondMockListener);

        $dispatcher->addListener('UserLogOut' , $thirdMockListener);

        $dispatcher->dispatch($event);
    }
}

