<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Static Modifier</h1>
<?php
class Student
{
    static $total_students = 0;

    public static function welcome_students($var = "Hello")
    {
        echo "{$var} students";
    }
}

//$student = new Student();
//echo $student->total_student

//This is the other version that can be used
echo Student::$total_students . '<br>';
echo Student::welcome_students() . '<br>';
echo Student::welcome_students("Greetings") . '<br>';
Student::$total_students = 1;
echo Student::$total_students . '<br>';
?>
        </div>
    </div>