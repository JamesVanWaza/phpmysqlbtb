<?php include_once 'html5req.php';?>
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <h1 class="text-center">Access Modifiers: 2</h1>
<?php
class SetterGetterExample {
	private $a = 1;

	public function get_a() {
		return $this->a;
	}

	public function set_a($value) {
		$this->a = $value;
	}
}
$example = new SetterGetterExample();
// restricted : echo $example->a . '<br>';

echo $example->get_a() . '<br>';
$example->set_a(15);
echo $example->get_a() . '<br>';
?>
		</div>
	</div>