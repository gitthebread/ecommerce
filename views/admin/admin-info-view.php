<?php 
    foreach($data as $user) {
        if($user->getRole() == "R2") {
            echo "
                <div class='admin-info col-4 d-flex'>
                    <div class='welcome'>
                        <div class='user-info'>".$user->getFirstName()." ".$user->getLastName()."</div>
                    </div>
                </div>
            ";
        }
        
    }
?>