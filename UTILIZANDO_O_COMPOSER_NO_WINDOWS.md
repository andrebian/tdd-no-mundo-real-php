#Utilizando o Composer no Windows

##Instalando

Para instalar o composer no Windows é preciso ter o Openssl instalado e habilitado no seu **php.ini**.

###Habilitando openssl no php.ini

```ini
; Como está inicialmente
;extension=php_openssl.dll

; Como deve ficar
extension=php_openssl.dll
```

###Baixando o Composer

```shell
curl -sS https://getcomposer.org/installer | php

// Ou

php -r "readfile('https://getcomposer.org/installer');" | php
```

###Verificando a instalação

```shell
php composer.phar
```

##Instalando as dependências

```shell
php composer.phar install
```


##Rodando os testes

```shell
vendor\bin\phpunit.bat tests
```
