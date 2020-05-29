<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class TruckForm extends Form
{
    public function buildForm()
    {
        $this->add('make_id', 'select', [
            'label' => 'Markė',
            'choices' => ['1' => 'Volvo', '2' => 'VAZ', '3' => 'Mercedes', '4' => 'GAZ'],
            'selected' => 'empty_value',
            'empty_value' => 'Pasirinkite markę...',
        ]);
        $this->add('year', 'number', [
            'label' => 'Pagaminimo metai',
            'value' => '1900'
        ]);
        $this->add('owner', 'text', [
            'label' => 'Savininkas',
            'rules' => 'required'
        ]);
        $this->add('owner_number', 'number', [
            'label' => 'Savininkų skaičius',
            'value' => ''
        ]);
        $this->add('comments', 'textarea', [
            'label' => 'Komentarai',
            'value' => '',
        ]);
        $this->add('submit', 'submit', ['label' => 'Išsaugoti']);
        $this->add('clear', 'reset', ['label' => 'Išvalyti laukus']);
    }
}
