    <section class="vh-100" style="background-color: #7EAA92;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <h3 class="mb-5 text-center">Login Admin</h3>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user" method="post" action="<?= base_url('admin/auth/index');?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" 
                                    id="email" 
                                    name="email" 
                                    placeholder="Enter Email Address..."
                                    value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>