<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class galleryController extends CrudController
{

    public function all($entity)
    {
        parent::all($entity);

        $this->filter = \DataFilter::source(new \App\gallery);
        $this->filter->add('name', 'Name', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('title', 'Title');//list view column names
        $this->grid->add('subtitle', 'Subtitle');
        $this->grid->add('image', 'Image');


        $this->addStylesToGrid();


        return $this->returnView();
    }

    public function edit($entity)
    {

        parent::edit($entity);

        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\gallery);

        $this->edit->label('Edit Gallery');

        $this->edit->add('title', 'Title', 'text');

        $this->edit->add('subtitle', 'Subtitle', 'text');

        $this->edit->add('image', 'Image', 'file')->rule('required');

        return $this->returnEditView();

    }
}
