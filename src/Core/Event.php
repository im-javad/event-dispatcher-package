<?PhP 
namespace App\Core;

abstract class Event{
    public function getName(){
        $reflection = new \ReflectionClass($this);

        
        return $reflection->getShortName();
    }
}
