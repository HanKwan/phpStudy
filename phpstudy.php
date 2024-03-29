<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study php</title>
</head>
<body>

    <h4>Super simple culculator</h4>
    <form action="phpstudy.php" method="post">
        <input type="number" name="num1">
        <input type="text" name="oprt">
        <input type="number" name="num2">
        <input type="submit">
    </form>

    <h4>Associative array</h4>
    <form action="phpstudy.php" method="POST">
        <h5>Workers name</h5>
        <input type="text" name="salary">
        <input type="submit">
    </form>
    <?php 

        // connecting mysqladmin to php
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=citymallpj', 'root', 'hankwansaing');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('SELECT * FROM brands');
        $stmt->execute();
        $brands = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($brands as $brand) {
            echo $brand->brand_name. ' ';
        }

        //simple calcu
         $num1 = $_POST["num1"];
         $num2 = $_POST["num2"];
         $oprt = $_POST["oprt"];
         if ($oprt === "+"){
            echo $num1 + $num2.'<br>';
         } elseif ($oprt === "-"){
            echo $num1 - $num2.'<br>';
         } elseif ($oprt === "/"){
            echo $num1 / $num2.'<br>';
         } elseif ($oprt === "*"){
            echo $num1 * $num2.'<br>';
         } else {
             echo "invalid".'<br>';
         }

         //associative array
         $workers = ["john"=>4000, "mike"=>2500, "jimmy"=>5500];
         echo $workers[$_POST["salary"]].'<br>';

        // 2 dimentional
        // working with database look like
        $todos = [
            ["title" => "to do 1", "complete" => true],
            ["title" => "to do 2", "complete" => false]
        ];
        // 

        $person = [
            'name' => 'john',
            'nickname' => 'jj',
            'pet' => ['fish', 'dog']
        ];
        echo $person['address'] ?? 'address unknown'.'<br>';
        echo $person['pet'][0].'<br>';

        // tenary if 
        $age = 23;
        echo $age < 20 ? "young" : "old"; // if age is less than 20 = young, otherwise = old
        // short tenary
        $myAge = $age ?: 19; // if age = exist, echo age. if not, $age=19

        // Class (OOP)
        class Book {
            public $title;
            private $author;
            public $pages;
            public static $numBook;  //use 'static' for creating counter
            
            function __construct($title, $pages){
                $this->title = $title;
                $this->pages = $pages;
                self::$numBook++;  //making counter
            }

            function howManyPages(){
                if($this->pages >= 500){
                    return "Over 500 pages".'<br>';
                }
            }
            
            public function setAuthor($author){
                $this->author = $author;
            }

            public function getAuthor(){
                return $this->author;
            }

            public static function getNumBook(){
                return self::$numBook;
            }
        } 
        $book1 = new Book("river", 600);
        echo $book1->howManyPages();
        echo $book1->title.'<br>';
        echo $book1->setAuthor("john").'<br>';
        echo $book1->getAuthor().'<br>';
        $book2 = new Book("snow", 30);
        $book2->setAuthor('lamy');
        echo $book2->getAuthor().'<br>';
        echo Book::$numBook.'<br>';  //the numBook(counter) need to be below everything

        echo __DIR__; // print out the location file

        // Switch - case 
        $role = 'thief';           // role must be written at start
        switch ($role) {
            case 'manager': echo 'manager';
            break;
            case 'waiter': echo 'waiter';
            break;
            case 'chief': echo 'chief';
            break; 
            default: echo 'not found'.'<br>';
        }

         // For each loop
        foreach ($person as $person){
            if (is_array($person)){
                echo implode(',', $person).'<br>';
            } else {
                echo $person.'<br>';
            }
        }

        // for loop
        $hay = ['some', null, 'n', 1, 2];
        // echo 'found n at position ' . array_search('n', $hay) . '<br>';
        // if (in_array('n', $hay)) {
        //     echo 'true';
        // } else {
        //     echo 'false';
        // }
        
        //function + sum
        function sum(...$nums){
            $total = 0;
            foreach ($nums as $num){
                $total += $num;
            } return $total;
        }
        echo sum(1, 2, 3, 4, 5, 6).'<br>';
        // $nums = [1,2,3,4,5,6];
        // $total = 0;
        // foreach($nums as $num) {
        //     $total += $num;
        // } echo $total.'<br>';

        //date
        echo date('F j Y, H:i:s').'<br>'; 

        //curl
        $url = 'https://jsonplaceholder.typicode.com/users';
        // $resource = curl_init($url);                           //i dont know what i did wrong in curl_init :(
        // curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($resource);
        // $code = curl_getinfo($resource, CURLINFO_HTTP_CODE);
        // curl_close($resource);
        // echo $code;
        // echo $result;
        
        //making post request
        // $resource = curl_init();
        // curl_setopt_array($resource, [
        //     CURLOPT_URL => $url,
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_POST => true,
        //     CURLOPT_HTTPHEADER => ['content-type: application/json'],
        //     CURLOPT_POSTFIELDS => json_encode($person)
        // ]);
        // $result = curl_exec($resource);
        // curl_close($resource);
        // echo $result;


        // trying linked list :)
        class Node {
            public $data;
            public $next;
            public function __construct($data) {
                $this->data = $data;
                $this->next = null;
            }
        }
        class Linkedlist {
            public $head;
            public $tail;
            public $count;
            public function __construct() {
                $this->head = null;
                $this->tail = null;
                $this->count = 0;
            }
            public function insertFirst($data) {
                $node = new Node($data);        // don't $this->head = new Node($data) ~_~
                $node->next = $this->head;
                $this->head = $node;
                $this->count++;
            }
            public function insertLast($data) {
                $node = new Node($data);
                if (!$this->head) {
                    $this->head = $node;
                } else {
                    $current = $this->head;
                    while ($current->next) {            // to prevent from replacing the 2nd value
                        $current = $current->next;      // put $current->next into head->next 
                    }
                    $current->next = $node;
                    $this->count++;
                }
            }
            public function insertIndex($data, $index) {
                if ($index > 0 && $index > $this->count) {
                    return;
                } else if ($index === 0) {
                    return $this->insertFirst($data);
                } else {
                    $node = new Node($data);
                    $current = $this->head;
                    $counter = 0;
                    while ($counter < $index) {
                        $previous = $current;
                        $counter++;
                        $current = $previous->next;         // idk why its red but it still works
                    }
                    $previous->next = $node;
                    $node->next = $current;
                    $this->count++;
                }
            }
            public function getIndex($index) {
                if ($index > 0 && $index > $this->count) {
                    return;
                } else {
                    $current = $this->head;
                    $counter = 0;
                    while($current) {
                        if ($counter == $index) {
                            echo $current->data;
                        }
                        $current = $current->next;
                        $counter++;
                    }
                }
            }
            public function removeIndex($index) {
                $current = $this->head;
                $counter = 0;
                if ($index > 0 && $index > $this->count) {
                    return;
                } else if ($index === 0) {
                    $this->head = $current->next;
                } else {
                    while ($counter < $index) {
                        $previous = $current;
                        $counter++;
                        $current = $previous->next;         // idk why its red but it still works
                    }
                    $previous->next = $current->next;
                    $this->count--;
                }
            }
            public function removeLast() {
                $current = $this->head;
                if (!$current->next) {
                    $this->head = null;
                }
                while ($current->next->next) {
                    $current = $current->next;
                }
                $current->next = null;
                $this->count--;
            }
            public function printList() {
                $current = $this->head;
                if ($current) {
                    while ($current) {
                        echo $current->data . " ";
                        $current = $current->next;
                    }
                } else {
                    echo 'The list is empty';
                }
            }
            public function reverseList() {
                $pre = null;
                $current = $this->head;
                while ($current) {
                    $next = $current->next;
                    $this->tail = $next;
                    $current->next = $pre;
                    $pre = $current;
                    $current = $next;
                }
                return $this->head = $pre;
            }
        }

        $list1 = new Linkedlist();
        $list1->insertFirst(100);
        $list1->insertFirst(200);
        $list1->insertFirst(300);
        $list1->insertIndex(400,1);
        // $list1->removeLast();
        echo $list1->printList().'<br>';
        $list1->reverseList();
        echo $list1->printList().'<br>';
        // var_dump($list1);


        // stack
        class Stack {
            public $stack;
            public $count;
            public function __construct() {
                $this->stack = [];
                $this->count = -1;
            }
            public function push($value) {
                $this->stack[$this->count] = $value;
                $this->count++;
                echo $value . ' has been added to position ' . $this->count . '<br>';
            }
            public function pop() {
                if ($this->count < 0) {
                    echo 'The stack is empty';
                } else {
                    $delete = $this->stack[$this->count];
                    echo $delete . ' has been popped <br>';
                    $this->count--;         // the remove magic happened here
                    // return $delete;
                }
            }
            public function peek() {
                echo $this->stack[$this->count - 1] . ' is at the top <br>';
                return $this->stack[$this->count - 1];
            }
            public function printall() {
                // $str = '';
                if ($this->count > -1) {
                    for ($i = -1; $i < $this->count; $i++) {
                        echo $str = $this->stack[$i] . ' ';
                    }
                    // return $str;
                } else {
                    echo 'The stack is empty';
                }
            }
        }
        $stck = new Stack();
        $stck->push(10);
        $stck->push(40);
        $stck->peek();
        $stck->pop();
        // $stck->printall();

        // queueing
        class Queue {
            public $front;
            public $back;
            public $count;
            public function __construct() {
                $this->front = null;
                $this->back = null;
                $this->count = 0;
            }
            public function enqueue($data) {
                $node = new Node($data);
                if (!$this->front) {
                    $this->front = $this->back = $node;
                } else {
                    $this->back->next = $node;
                    $this->back = $node;
                }
                $this->count++;
            }
            public function dequeue() {
                $tmp = $this->front;
                if (!$tmp) {
                    echo "Empty Queue";
                } elseif ($tmp && !$tmp->next) {
                    $this->front = null;                    
                    $this->back = null;
                } else {
                    $this->front = $tmp->next;
                    // $this->front->next= null;        // will result front.next = null but still hv this.back (wont make sense)
                }
                $this->count--;
                return $tmp;
            }
            public function print() {
                // echo $this->count;
                if (!$this->front) {
                    echo "The queue is empty";
                } else {
                    while ($this->front) {
                        echo $this->front->data . ' ';
                        $this->front = $this->front->next;
                    }
                }
            }
        }
        $que = new Queue();
        $que->enqueue(10);
        $que->enqueue(20);
        $que->enqueue(30);
        $que->dequeue();
        $que->print();
        // var_dump($que);
    ?>
</body>
</html>