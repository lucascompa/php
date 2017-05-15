<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b305b05af51a1321688730c2d11db3d
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'instar_funcoes\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'instar_funcoes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/instar_funcoes',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b305b05af51a1321688730c2d11db3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b305b05af51a1321688730c2d11db3d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5b305b05af51a1321688730c2d11db3d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5b305b05af51a1321688730c2d11db3d::$classMap;

        }, null, ClassLoader::class);
    }
}
