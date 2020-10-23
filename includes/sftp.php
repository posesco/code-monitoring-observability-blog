<?php
$servidorssh  = getenv('SERVER_SFTP');
$usuariossh   = getenv('SFTP_USER');
$passwordssh  = getenv('SFTP_PASSWORD');
$enlace       = ssh2_connect($servidorssh, 22);
$login_result = ssh2_auth_password($enlace, $usuariossh, $passwordssh);
$sftp         = ssh2_sftp($enlace);
$dir          = 'ssh2.sftp://' . $sftp . '/home/remote_user/almacen/';
$fingerprint  = ssh2_fingerprint($enlace, SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX);
