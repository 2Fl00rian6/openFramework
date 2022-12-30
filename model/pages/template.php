<?php
require_once('../controller/homeController.php');
?>
<main class="px-6 pt-6">
    <div class="overflow-x-auto">
    <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Updated at</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
        <!-- body -->
        <?php
        echo $table;
        ?>
        </tbody>
    </table>
    </div>

    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <form class="container-form p-5 mt-10" action="" method="POST">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nom de l'utilisateur</span>
                        </label>
                        <input type="text" name="user" placeholder="John Doe" class="input input-bordered w-full mb-5" />
                    </div>
                    <div class="form-control mb-7">
                        <label class="label">
                            <span class="label-text">Adresse e-mail</span>
                        </label>
                        <label class="input-group">
                            <span>Email</span>
                            <input type="email" name="email" placeholder="info@site.com" class="input input-bordered" />
                        </label>
                    </div>
                    <div class="form-control">
                        <button type="submit" class="btn btn-active" name="create-btn">Créer un utilisateur</button>
                    </div>
                </form>

                <form class="container-form p-5 mt-10" action="" method="POST">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Les utilisateurs</span>
                        </label>
                        <select name="users" class="select select-bordered w-full">
                            <?php
                                echo $select;
                            ?>
                        </select>
                    </div>
                    <div class="form-control mb-7">
                        <label class="label">
                            <span class="label-text">Adresse e-mail</span>
                        </label>
                        <label class="input-group">
                            <span>Email</span>
                            <input type="email" name="email" placeholder="info@site.com" class="input input-bordered" />
                        </label>
                    </div>
                    <div class="form-control">
                        <button type="submit" class="btn btn-active" name="update-btn">Modifier l'utilisateur</button>
                    </div>
                </form>
            
            
                <form class="container-form p-5 mt-10 mb-10" action="" method="POST">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Les utilisateurs</span>
                        </label>
                        <select name="users" class="select select-bordered w-full mb-5">
                            <?php
                                echo $select;
                            ?>
                        </select>
                    </div>
                    <div class="form-control">
                        <button type="submit" class="btn btn-active" name="delete-btn">Supprimer l'utilisateur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>