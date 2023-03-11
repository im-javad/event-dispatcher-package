<?PhP 
namespace App\Listeners;

use App\Core\Event;
use App\Core\Listener;

class SendEmail extends Listener
{
    public function handle(Event $event)
    {
        echo "Sending email to {$event->user->email} was successful \n";
    }
}
