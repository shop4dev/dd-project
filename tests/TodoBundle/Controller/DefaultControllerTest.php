<?php

namespace TodoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Form\ListType;
use AppBundle\Entity\Todo;
use AppBundle\Entity\ToList;
use AppBundle\Form\ToDoType;
use Symfony\Component\Validator;
use Symfony\Component\Form\Test\TypeTestCase;
use PHPUnit\Framework\TestCase;

class DefaultControllerTest extends TypeTestCase
{
    public function testSubmitToListData()
    {
        $formData = array(
            'name' => 'testName'
        );

        $form = $this->factory->create(ListType::class);

        $object = new ToList();
        $object->setName("testName");

        // submit the data to the form directly
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($object, $form->getData());

        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
    }
    /*public function testSubmitToDoData()
    {
        $now = new\DateTime('now');
        $formData = array(
            'name' => 'testName',
            'category' => 'testCategory',
            'description' => 'testDescription'
        );
        $formData['due_date']=$now;
        $formData['create_date']=$now;

        $form = $this->factory->create(ToDoType::class);

        $object = new ToDo();
        $object->setName("testName");
        $object->setCategory("testCategory");
        $object->setDescription("testDescription");
        $object->setDueDate($now);
        $object->setCreateDate($now);

        // submit the data to the form directly
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($object, $form->getData());

        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
    }*/
}
