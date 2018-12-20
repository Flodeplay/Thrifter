<?php

interface inter_update
{
    public function inter_u_email($email);

    public function inter_u_surname($surname);

    public function inter_u_forename($forename);

    public function inter_u_birthday();

    public function inter_u_zip($zipcode);

    public function inter_u_image();

    public function inter_u_phonenr($phonenr);

    public function inter_u_description($description);
}