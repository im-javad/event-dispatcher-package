<?PhP 
namespace App\Listeners;

use App\Core\Event;
use App\Core\Listener;

class UpdateLastLogin extends Listener
{
    public function handle(Event $event)
    {
        echo "Successfully updating the last user login with ID {$event->user->id} \n";
    }
}
