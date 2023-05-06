<?php
    echo
    "
        <p><strong>Họ:</strong> ".$data->getFirstName()."</p>
        <p><strong>Tên:</strong> ".$data->getLastName()."</p>
        <p><strong>Email:</strong> ".$data->getEmail()."</p>
        <p><strong>Số điện thoại:</strong> ".$data->getPhoneNumber()."</p>
        <p><strong>Địa chỉ:</strong> ".$data->getAddress()."</p>
    "
?>