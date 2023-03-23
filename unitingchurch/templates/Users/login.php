<?php
/**
 * @var \App\View\AppView $this

 *


 */

$formTemplate =
    [

        'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
        'input' => '<input type="{{type}}" name="{{name}}"  class="form-control" {{attrs}} />',
        'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
        'label' => '<label{{attrs}} class="form-label"> {{text}}</label>',
        'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
        'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
        'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea>',
    ];

$this->Form->setTemplates($formTemplate);


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uniting - Login</title>

    <!-- Custom fonts for this template-->

    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>


    <!-- Custom styles for this template-->
    <?= $this->Html->css('/css/sb-admin-2.css') ?>
</head>

<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <?=  $this->Html->image('church.png', ['class' => 'church']); ?> </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">



                                    <div class="d-flex align-items-center mb-3 pb-1">

                                        <?=  $this->Html->image('uniting-logo.png', ['class' => 'uniting-logo']); ?>

                                    </div>
                                    <div class="users form">
                                        <?= $this->Flash->render() ?>
                                        <h3 class="headings">Login</h3>
                                        <p>Please login to your account</p>
                                        <?= $this->Form->create() ?>
                                        <fieldset>

                                            <?= $this->Form->control('email', ['required' => true]) ?>
                                            <?= $this->Form->control('password', ['required' => true]) ?>
                                        </fieldset>
                                        <br>
                                        <?= $this->Form->submit(__('Login'),['class'=>'btn btn-primary btn-user btn-block']); ?>
                                        <?= $this->Form->end() ?>

                                        <br>

                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" >Don't have an account? <a href="#"
                                                                                                                  style="color: #A20066;">Register here</a></p>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('/vendor/jquery/jquery.min.js')?>
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js')?>

<!-- Core plugin JavaScript-->
<?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js')?>
<!-- Custom scripts for all pages-->
<?= $this->Html->script('sb-admin-2.min.js')?>





</body>

</html>



