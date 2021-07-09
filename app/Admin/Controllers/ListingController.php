<?php

namespace App\Admin\Controllers;

use App\Listing;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ListingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Listing';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Listing());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('image2', __('Image2'));
        $grid->column('image3', __('Image3'));
        $grid->column('image4', __('Image4'));
        $grid->column('image5', __('Image5'));
        $grid->column('image6', __('Image6'));
        $grid->column('image7', __('Image7'));
        $grid->column('image8', __('Image8'));
        $grid->column('image9', __('Image9'));
        $grid->column('price', __('Price'));
        $grid->column('overview', __('Overview'));
        $grid->column('livingroom', __('Livingroom'));
        $grid->column('bedroom', __('Bedroom'));
        $grid->column('bathroom', __('Bathroom'));
        $grid->column('size', __('Size'));
        $grid->column('status', __('Status'));
        $grid->column('property_type', __('Property type'));
        $grid->column('address', __('Address'));
        $grid->column('zip_code', __('Zip code'));
        $grid->column('city', __('City'));
        $grid->column('state', __('State'));
        $grid->column('country', __('Country'));
        $grid->column('school', __('School'));
        $grid->column('worship_center', __('Worship center'));
        $grid->column('park', __('Park'));
        $grid->column('mall', __('Mall'));
        $grid->column('shop', __('Shop'));
        $grid->column('appliance', __('Appliance'));
        $grid->column('garage', __('Garage'));
        $grid->column('pet', __('Pet'));
        $grid->column('floor', __('Floor'));
        $grid->column('agent_name', __('Agent name'));
        $grid->column('agent_number', __('Agent number'));
        $grid->column('agent_email', __('Agent email'));
        $grid->column('inspection_cost', __('Inspection cost'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Listing::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('image2', __('Image2'));
        $show->field('image3', __('Image3'));
        $show->field('image4', __('Image4'));
        $show->field('image5', __('Image5'));
        $show->field('image6', __('Image6'));
        $show->field('image7', __('Image7'));
        $show->field('image8', __('Image8'));
        $show->field('image9', __('Image9'));
        $show->field('price', __('Price'));
        $show->field('overview', __('Overview'));
        $show->field('livingroom', __('Livingroom'));
        $show->field('bedroom', __('Bedroom'));
        $show->field('bathroom', __('Bathroom'));
        $show->field('size', __('Size'));
        $show->field('status', __('Status'));
        $show->field('property_type', __('Property type'));
        $show->field('address', __('Address'));
        $show->field('zip_code', __('Zip code'));
        $show->field('city', __('City'));
        $show->field('state', __('State'));
        $show->field('country', __('Country'));
        $show->field('school', __('School'));
        $show->field('worship_center', __('Worship center'));
        $show->field('park', __('Park'));
        $show->field('mall', __('Mall'));
        $show->field('shop', __('Shop'));
        $show->field('appliance', __('Appliance'));
        $show->field('garage', __('Garage'));
        $show->field('pet', __('Pet'));
        $show->field('floor', __('Floor'));
        $show->field('agent_name', __('Agent name'));
        $show->field('agent_number', __('Agent number'));
        $show->field('agent_email', __('Agent email'));
        $show->field('inspection_cost', __('Inspection cost'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Listing());

        $form->image('image', __('Front Image'));
        $form->image('image2', __('Back Image'));
        $form->image('image3', __('Interior Image'));
        $form->image('image4', __('Interior Image'));
        $form->image('image5', __('Interior Image'));
        $form->image('image6', __('Interior Image'));
        $form->image('image7', __('Interior Image'));
        $form->image('image8', __('InteriorImage'));
        $form->image('image9', __('Interior Image'));
        $form->text('price', __('Price'));
        $form->text('overview', __('Overview'));
        $form->text('livingroom', __('Livingroom'));
        $form->text('bedroom', __('Bedroom'));
        $form->text('bathroom', __('Bathroom'));
        $form->text('size', __('Size'));
        $form->text('status', __('Status'));
        $form->text('property_type', __('Property type'));
        $form->text('address', __('Address'));
        $form->text('zip_code', __('Zip code'));
        $form->text('city', __('City'));
        $form->text('state', __('State'));
        $form->text('country', __('Country'));
        $form->text('school', __('School'));
        $form->text('worship_center', __('Worship center'));
        $form->text('park', __('Park'));
        $form->text('mall', __('Mall'));
        $form->text('shop', __('Shop'));
        $form->text('appliance', __('Appliance'));
        $form->text('garage', __('Garage'));
        $form->text('pet', __('Pet'));
        $form->text('floor', __('Floor'));
        $form->text('agent_name', __('Agent name'));
        $form->text('agent_number', __('Agent number'));
        $form->text('agent_email', __('Agent email'));
        $form->text('inspection_cost', __('Inspection cost'));

        return $form;
    }
}
