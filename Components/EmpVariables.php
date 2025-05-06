<?php
class employee{
    public ?string $employee_rank;
    public ?string $employee_name;
    public ?string $employee_email;
    public ?string $employee_favoriteBook;

    public function __construct(?string $rank, ?string $name, ?string $email, ?string $book){
        $this->employee_rank = $rank;
        $this->employee_name = $name;
        $this->employee_email = $email;
        $this->employee_favoriteBook = $book;
    }
}

$vincent = new employee('Treasurer', 'Vincent Van Michael', 
'VVMichael@newlyrisen.com', 'For Whom The Bell Tolls by Ernest Hemmingway');

$reggie = new employee('CFO', 'Reggie Hernandez', 
'RHernandez@newlyrisen.com', 'Wiseguy by Nicholas Pileggi');

$guy = new employee('CEO', 'Guy Mann', 
'GMann@newlyrisen.com', 'The Mist by Stephen King');

$theo = new employee('Lead Event Coordinator', 'Theodore Poljak', 'TPoljak@newlyrisen.com', 'Treasure Island by Robert Louis Stevenson');

$lucas= new employee('Lead Missions Director', 'Lucas McGonnal', 'LMcGonnal@newlyrisen.com', 'Around The World in 80 Days by Jules Verne');
?>

<?php
$customerLogin = array("customer", "customer")
?>