<section class="row p-2 justify-content-center align-content-start vh">
    <div class="col-12 col-md-8 text-center">
        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, dolor! Tempore ex deserunt aliquid consequuntur quaerat officiis quae omnis assumenda eaque, delectus repellat dolorem odio sint.</p>
    </div>

    <div class="col-12 col-md-8 row justify-content-center">
        <div class="col-12">
            <form action="" class="register row justify-content-center">

                <!-- Personel information -->

                <div class="col-8 row">
                    <div class="col-12">
                        <!-- Organisation Name -->
                        <div class="col-12 my-3">
                            <label class="form-label" for="organization">Organization name</label>
                            <input name="register_comapny" type="text" id="organization" class="form-control" placeholder="Company name">
                        </div>

                        <!-- Organisation Type -->
                        <div class="col-12 my-3">
                            <label class="form-label" for="organization_type">Organization Type</label>
                            <select class="form-select" aria-label="Default select example" name="register_ctype">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>

                        <!-- Email Address -->
                        <div class="col-12 my-3">
                            <label class="form-label" for="register_email">Email Address</label>
                            <input type="text" id="register_email" class="form-control" placeholder="Done">
                        </div>

                        <!-- Password -->
                        <div class="col-12 my-3">
                            <label class="form-label" for="password">Password</label>
                            <div class="pwd-field">
                                <div class="pwd-visibility">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
                                <input name="register_password" type="password" id="password" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-12 my-3">
                            <label class="form-label" for="cpassword">Confirm Password</label>
                            <div class="pwd-field">
                                <div class="pwd-visibility">
                                    <i class="fa-solid fa-eye"></i>
                                </div>
                                <input name="register_cpassword" type="password" id="cpassword" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>

                        <!-- Submit form -->
                        <div class="col-12 my-5 text-center">
                            <input type="submit" class="btn btn-primary col-6">
                        </div>
                    </div>
                </div>  

                
                <!-- Personel information -->

                

            </form>
        </div>
    </div>

</section>