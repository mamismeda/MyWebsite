<?php 

  $sensitiveData = "Krossing";
  $salt = bin2hex(random_bytes(16)); // Generate random salt
  $pepper = "ASecretPepperString";


  $dataToHash = $sensitiveData . $salt . $pepper;
  $hash = hash("sha256", $dataToHash);


  $sensitiveData = "Krossing";

  $storedSalt = $salt;
  $storedHash = $hash;
  $pepper = "ASecretPepperString";

  $dataToHash = $sensitiveData . $storedSalt . $pepper;

  $verificationHash = hash("sha256", $dataToHash);

if ($storedHash === $verificationHash) {
    echo "The data ar the same!"
} else {
    echo "The data are not the same!"
}
