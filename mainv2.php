<?php
class InputText {
    protected $value = '';

    public function Add($c) {
        $this->value .= $c;
    }

    public function GetValue() {
        return $this->value;
    }
}

class InputNumeric extends InputText {
    public function Add($c) {
        if (is_numeric($c)) {
            parent::Add($c);
        }
    }
}

// Contoh penggunaan
$input = new InputNumeric();
$input->Add('2');
$input->Add('a');
$input->Add('5');
echo $input->GetValue(); // Output: 25
?>
