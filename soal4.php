3 scope levels available in PHP and how would you define 


1 - Private ( Visible only in its own class )
First level, private, says that all data are available only inside instance of specific class.
I can try to call private method or use private name, I will throw exception.
For example I have class First

  <?php class First {
    //make private scope
    private $name = 'angga lesmana';
    private function act(){} //...
  }
    $first = new First();
    $first->act->name; 
  ?>

<!---------------------------------------------->



2 - Public ( Visible to any other code accessing the class )
Public scope thats means a method is available from any area of project
for example

<?php 
 
class Second { 
	public $MiddleName = 'Lesmana'; 
 
	public function actmore() { 
		echo 'hello'; 
	} 
} 
 
$second = new Second(); 
$second->actmore(); // display "hello" 
echo $second->MiddleName; // display "Lesmana' 

?>

<!----------------------------------------->

3 - Protected ( Visible only to classes parent(s) and classes that extend the current class )
Protected means that I can access to method through hierarchy of class, but not from public area. 
for example

<?php  
 
class Third { 
	protected $Lastname = 'chelsea'; 
 
	protected function calllastname() { 
		echo 'hello'; 
	} 
} 
 
class Ex extends Third { 
	public function run() { 
		$this->calllastname(); 
	} 
 
	public function getField() { 
		return $this->Lastname; 
	} 
} 
 
$third = new Third(); 
$ex = new Ex(); 
 
$third->calllastname(); // throws exception 
$ex->run(); // display "hello" 
 
echo $third->Lastname; // throws exception 
echo $ex->calllastname(); // display "smth" 
?>