<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class aboutusController extends CrudController
{

    public function all($entity)
    {
        parent::all($entity);


        $this->filter = \DataFilter::source(new \App\aboutus);
        $this->filter->add('name', 'Name', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('company_name', 'company_name');
        $this->grid->add('email', 'email');
        $this->addStylesToGrid();


        return $this->returnView();
    }

    public function edit($entity)
    {

        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\aboutus);

        $this->edit->label('Edit Aboutus');

        $this->edit->add('company_name', 'company_name', 'text');

        $this->edit->add('email', 'email', 'text');


        return $this->returnEditView();
    }
}
