    <section class="vh-100" style="background-color: #7EAA92;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Login Admin</h3>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" 
                                    id="email" 
                                    name="email" 
                                    placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Password">
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