<?php

$ldaprdn  = 'sb12002';     // ldap rdn or dn
$ldappass = 'AE46C10DECEE826370C558FCF708A8A8';

// Variables del servidor LDAP
$ldaphost = "ldap.ues.edu.sv";  // servidor LDAP
$ldapport = 389;                 // puerto del servidor LDAP

// Conexión al servidor LDAP
$ldapconn = ldap_connect($ldaphost, $ldapport)
          or die("Could not connect to $ldaphost");
if ($ldapconn) {

    // realizando la autenticación
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // verificación del enlace
    if ($ldapbind) {
        echo "LDAP bind successful...";
    } else {
        echo "LDAP bind failed...";
    }

}
?>
