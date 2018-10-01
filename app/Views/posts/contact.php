<!-- Contact Section -->
<div class="contact section-invert py-4">
    <h3 class="section-title text-center m-5">Formulaire de contact</h3>
    <div class="container py-4">
        <div class="row justify-content-md-center px-4">
            <div class="contact-form col-sm-12 col-md-10 col-lg-7 p-4 mb-4 card">
                <form method="post">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <?= $form->input('username', 'Pseudo'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <?= $form->input('email', 'Email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <?= $form->input('message', 'Message', ['type' => 'textarea']); ?>
                            </div>
                        </div>
                    </div>
                    <?= $form->submit() ?>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- / Contact Section -->
