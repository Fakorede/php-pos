<?php

class UserController
{
    public function loginUser()
    {
        if (isset($_POST["user"])) {
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["user"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])) {

                $table = "users";
                $item = "user";
                $value = $_POST["user"];

                $model = UserModel::showUsers($table, $item, $value);

                if($model["user"] == $_POST["user"] && $model["password"] == $_POST["password"]){

					$_SESSION["loggedIn"] = "ok";
				
					echo '<script>

						window.location = "home";

					</script>';

				}else{

					echo '<br><div class="alert alert-danger">User or password incorrect</div>';

				}

            }
        }
    }
}
