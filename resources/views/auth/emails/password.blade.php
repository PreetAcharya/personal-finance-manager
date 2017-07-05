<?php
/**
 * Created by PhpStorm.
 * User: Preet Acharya
 * Date: 04-Dec-16
 * Time: 8:16 PM
 */?>
Click Here to Reset Your Password

<p>
    <a href="{{ $link = url('password/resetme', $token).'?email='.urlencode($email) }}">{{ $link }}</a>
</p>

