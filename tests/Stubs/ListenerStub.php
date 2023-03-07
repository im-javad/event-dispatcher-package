<?PhP 
namespace App\Tests\Stubs;

use App\Core\Event;
use App\Core\Listener;

class ListenerStub extends Listener{
    public function handle(Event $event)
    {
    }
}
