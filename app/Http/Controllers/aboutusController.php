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
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('name', 'Name');
        $this->grid->add('email', 'Email');
        $this->grid->add('address', 'Address');
        $this->grid->add('mobile', 'Mobile');
        $this->grid->add('image1', 'Image1');
        $this->grid->add('image2', 'Image2');
        $this->grid->add('logo', 'Logo');
        $this->grid->add('imageabout', 'Imageabout');



        $this->addStylesToGrid();

        return $this->returnView();
    }

    public function edit($entity)
    {

        parent::edit($entity);

        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\aboutus);

        $this->edit->label('Edit Aboutus');

        $this->edit->add('name', 'Name', 'text')->rule('required');

        $this->edit->add('email', 'Email', 'text')->rule('required');

        $this->edit->add('address', 'Address', 'text')->rule('required');

        $this->edit->add('mobile', 'Mobile', 'text')->rule('required');

        $this->edit->add('image1', 'Image1', 'file')->rule('required');

        $this->edit->add('image2', 'Image2', 'file')->rule('required');

        $this->edit->add('logo', 'Logo', 'file')->rule('required');

        $this->edit->add('imageabout', 'Imageabout', 'file')->rule('required');





        return $this->returnEditView();




    }



}
