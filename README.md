# Test-Driven Development
###Teste e Design no Mundo Real com PHP

[![Build Status](https://travis-ci.org/andrebian/tdd-no-mundo-real-php.svg?branch=master)](https://travis-ci.org/andrebian/tdd-no-mundo-real-php)
[![Coverage Status](https://coveralls.io/repos/andrebian/tdd-no-mundo-real-php/badge.svg)](https://coveralls.io/r/andrebian/tdd-no-mundo-real-php)

Repositório para os exemplos do livro Test Driven Development - Teste e Design no mundo real com PHP.
![enter image description here](https://raw.githubusercontent.com/andrebian/tdd-no-mundo-real-php/master/cover.jpeg)

##Como serguir os exemplos apresentados no livro

Para cada trecho ou sequência de trechos de código apresentado no livro existe um commit com a seguinte estrutura:
`Cap X - Pág X[,X e X] [- complemento]`

Exemplo: 
`Cap 5 - Pág 68 - Feitos testes passarem após a mudança`

Você pode seguir os exemplos do livro passo a passo realizando checkout no commit em que o o trecho de código é apresentado no livro. 
Exemplo: 
```shell 
$ git checkout 1a503c24a97e79e6880fdb9f49f81ebad0805b46
$ ./vendor/bin/phpunit --colors tests
```

