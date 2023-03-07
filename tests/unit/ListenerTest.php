<?PhP 
namespace App\Tests\Unit;

use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\ListenerStub;
use PHPUnit\Framework\TestCase;
use TypeError;

class ListenerTest extends TestCase{
    /**
     * @test
     */
    public function throws_error_if_handle_method_given_invalid_event()
    {
        $this->expectException(TypeError::class);

        $listener = new ListenerStub();

        $listener->handle('it isnt event');
    }

    /**
     * @test
     */
    public function handle_method_accept_just_event()
    {
        $listener = new ListenerStub();

        $listener->handle(new EventStub());

        $this->addToAssertionCount(1);
    }
}
