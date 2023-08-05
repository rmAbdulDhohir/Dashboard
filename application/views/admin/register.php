    <section class="vh-100" style="background-color: #7EAA92;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 ">
                            <h3 class="mb-5 text-center">Registrasi Admin</h3>
                            <form class="user" method="post" action="<?= base_url('admin/auth/register');?>">
                                <div class="form-group">
                                    <input type="name" class="form-control form-control-user" 
                                    id="name" 
                                    name="name"
                                    value="<?= set_value('name');?>"
                                    placeholder="Full Name">
                                    <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" 
                                    id="email" 
                                    name="email"
                                    value="<?= set_value('email');?>"
                                    placeholder="Email Address">
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" 
                                        id="password1" 
                                        name="password1"
                                        placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" 
                                        id="password2" 
                                        name="password2"
                                        placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('admin/auth');?>">Already have an account? Login!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>