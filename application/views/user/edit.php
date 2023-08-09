<div class="container px-5 my-5">
    <div class="row justify-content-center">

        <div class="col-lg-8">

            <?= form_open_multipart('user/edit'); ?>

            <div class="form-group row mb-2">
                <label for="name" class="col-sm-2 col-form-label">User name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="username" value="<?= $user['username']; ?>" readonly>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row mb-2">
                <label for="name" class="col-sm-2 col-form-label">Full name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row mb-2">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>


            </form>


        </div>

    </div>
</div>