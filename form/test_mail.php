<?php
if (mail("faisalikhsan20@gmail.com", "Test Email", "This is a test email", "From: test@yourdomain.com")) {
    echo "Email berhasil dikirim!";
} else {
    echo "Email gagal dikirim!";
}
