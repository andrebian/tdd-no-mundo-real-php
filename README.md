# Test-Driven Development
###Teste e Design no Mundo Real com PHP

[![Build Status](https://travis-ci.org/andrebian/tdd-no-mundo-real-php.svg?branch=master)](https://travis-ci.org/andrebian/tdd-no-mundo-real-php) [![Coverage Status](https://coveralls.io/repos/andrebian/tdd-no-mundo-real-php/badge.svg)](https://coveralls.io/r/andrebian/tdd-no-mundo-real-php)

Repositório para os exemplos do livro Test Driven Development - Teste e Design no mundo real com PHP.


![Capa do livro](https://raw.githubusercontent.com/andrebian/tdd-no-mundo-real-php/master/cover.jpeg)

##Como seguir os exemplos apresentados no livro

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

###Rodando os testes no Windows

Para rodar os testes em ambiente Windows siga as instruções [deste link](https://github.com/andrebian/tdd-no-mundo-real-php/blob/master/UTILIZANDO_O_COMPOSER_NO_WINDOWS.md). Em seguida pode rodar com o seguinte comando:

```shell
vendor\bin\phpunit.bat --colors tests
```

###Mas...

Antes de mais nada você deve atualizar o composer. No livro foi apresentado o download do Composer, neste caso o composer já está no repositório bastando apenas a sua atualização e instalação das dependências:

```shell
$ php composer.phar self-update
$ php composer.phar install
```

###Configurando o ambiente para os testes

####Windows

[![Alt text for your video](http://www.andrebian.com/wp-content/uploads/2015/03/tdd-no-windows.jpg)](http://www.youtube.com/watch?v=x_F_hC6Pnes)

---------------
####MAC OS

[![Alt text for your video](http://www.andrebian.com/wp-content/uploads/2015/03/tdd-no-mac.jpg)](http://www.youtube.com/watch?v=2mP37Bzyz_w)


---------------
####Linux

[![Alt text for your video](http://www.andrebian.com/wp-content/uploads/2015/03/tdd-no-linux.jpg)](http://www.youtube.com/watch?v=L3YvGfu5tE8)



###Checkouts para acompanhamento

O video a seguir explica como seguir os checkouts corretamente.

[![Alt text for your video](http://www.andrebian.com/wp-content/uploads/2015/03/tdd-no-mac.jpg)](http://www.youtube.com/watch?v=exZYaxlS3jo)

####Capítulo 2

 - a98fad4c041c93e2886da861c587919fefef7d89
 - 48bc2452dce43374cb8dc5f6609d97df8f3b646a
 - 79bccb61f4ebc87d0f6c9a08834100d67a7be400
 - 5096253a247ceb2bf381e7a5be221331c23c2d00
 - 83a4d8366cd7a3dea9b6f2edbcba3a98af64867c
 - 6eb8bf382da3373a7fb3621481e670d3a7b23456
 - 612ecaad509e58f6257430e63e4097a157425aff

####Capítulo 3

 - ca0892cee36dde4a7e836f4e351fdd199b0f0a2a
 - f29d14441b90894f3186cd6685f7b11367ab87c6
 - 4efc03d11fbb11cc4f90a48d154e8c225367fa62
 - d99ec8a3e43f55d7666226462f3a0c9bbb923fb7
 - cae676258cba4127e54a0e0373df3de08763a549
 - 25294475fce27dc1bae84054b80a6a5371d99b7b
 - 465da8186ed1c64a0cef146437cb05dfd63886bd
 - 78bb7cc738e0cf524a149036928ded0cb85bb8d8
 - 4fbb46342c1a64e4faa3d40dea40da9ab9aa6a59
 - 6d4b595fa7e765a83c69aca659aa98ad9608ed6b
 - fa00269c1f49d3052615cbcdee9aa217b4fce0a6

####Capítulo 4

 - dc4d0e8077168d1da76a83ddc8073b58a44b3b7e
 - 83060382ff1bddd25d7da491eb890097e59c6b24
 - 613a322136f156978ceeab9cfb442563aaf8b1dc
 - 35154fc1c7727756c4b75ee9b13ba348ecd625ea
 - 2cc71102a4e43023211afe2a2726c34eed01d54a
 - 1d12c341e3f44c53f3eecef391695184e944bd7f
 - 06008c1744169f88160a8892b82e559cb90c4782
 - 1fde9218f84ab3c4855e5687a7b44de635a65293
 - 72498a1256f1679ae508d1de44bc3d817d74d9af
 
####Capítulo 5

 - 1aaa61d51a23ce2207678948689b4c4c1aad04d5
 - 95dac7aefb8e5b9617293270ba7b76e54fed12b5
 - 1a503c24a97e79e6880fdb9f49f81ebad0805b46
 - d79923e14f6c66690ec6e6b7fa4300990d3baea1
 - f88f28f9aee6cba154cdabb01768ff0a24a7edfa
 - 5ca5da94e9704682302ddd423b5c888d9d0ce4f9


####Capítulo 6

 - fd71fb20add280e6b025f1c8038da0bb59642e4c
 - f640f800b82d4237f9257b2af14bf1a38dde71c1
 - bede1c25a3fedc9bb8b816781f954943e39c2d36
 - 6bdfacc77b7f6e9d20a2827ba301136537fd4f5b
 - 6b19efeb0ca32fedc1d578fda041433180c140eb
 - f768f802a93329c4cfba9de95a48a8728f601af1


####Capítulo 7

 - 5c35fc9d5facea3591dc2571b0c13a0ff161b37a
 - bfcbe623a515601d03eb29a899a047dfc4169512
 - c49823fd2db832061b4b9dc01c2cd8e512a5076a
 - 74ce5accdd409d6f08380f683366ba533afca287
 - 7a58b530196e402ad90196838d25380b6c36a596
 - 27239321ad4a3a8c1ead042d5d3545214ab287c5


####Capítulo 8

 - 6ff6a608573f3e0867702ec18ef922ca5339b75e
 - 7338173d6fa2c9d86848c2332d55dc04d4e625fd
 - 80bb0ccb169c737eb64ee0e33e225fda207ec756
 - f13ec53c43d1a9ab28c5da7fa410f09ec1e9298c
 - 593c3804e9797fd32361032f04e801b97873c496
 - d66aa35313ec1d5cb08e908e279d6b83adca2125
 - 3c57f2be832de7ac9c7c7b37f914105272d16804
 - 0addd077f93801a1a039b24f7ffd6da0c970d4eb
 - c51b37c0cd389b32c49e5a138f09b573e6369ccf
 - 86886f7819a1577c7f413cee7ad464996d2d0116
 - e2480e6fb1ab14f85222f1927fa9c2facf27511a
 - 858457000e34fc2065620ba8fb1a316bdabdf708
 - 139910ea5de2e4609e3be779eba8dbc688c6435b
 - f685bf3d115a472a0a767efafd2fd57480537095
 
####Capítulo 9

 - b89b5003da34cede3b8a132e97c17fe304337c47
 - f36d70e3452cbca06249a0dce5911341b4f9725e
 - a56a9eb760afc3ccad765f93cd1944fb8ecf661a
 - 7ac659e567318e5fdf3b0a2ab3d6c287760ad68c


####Capítulo 10

 - 67ab9463e6b307978865ddcd7f893b39c1e9c5c9
 - f8eba7f4308fe33db73318766485a35727691f1d
 - 801bd4a2a556515cb1d1ca906d9dd073b934c7e8
 - 513bafa21fed066b6c0441cea0d2beae09a9d94e
 - dba12e4b32fec41448f3ba76fe279dc75be68353
 - 64f52a68e38c2ea790fdd2c561b49ee4a630c8e4
 - 48f44b9959560566e6eccee06d2bf057de8ab6ea


####Retornar ao estado mais atual dos códigos

`$ git checkout master`


Ao retornar ao estágio mais atual dos códigos poderão serem rodados os testes com o feedback de coverage, para isto basta chamar o phpunit informando que o mesmo utilizará o arquivo de configurações **phpunit.xml**.

```shell
$ ./vendor/bin/phpunit -c phpunit.xml
```

> Detalhe: Para que sejam gerados os reports deve estar instalada em sua máquina o xdebug. Se não souber como instalar, procura no Google algo como "instalar xdebug no [Windows|Linux|Mac]"

Ao rodar todos os testes navegue até a pasta `tests/_reports/coverage` e abra o arquivo **index.html** em seu browser favorito.


##Erratas

Caso localize algo que considere errado em algum exemplo do livro, você pode reportar diretamente à Casa do Código.

[Enviar Errata](https://docs.google.com/forms/d/13Tu-1NQSvhMG8Fdtc73Vcag86MxiA0w4QWcRhAhaGnU/viewform)



