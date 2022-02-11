
# Enviar email usando PHPMailer e SendGrid

Eu desenvolvi esse código após ver uma publicação em um grupo do Facebook, usando o PHPMailer e o SendGrid para enviar emails, abaixo tem o passo a passo de como usar

## É necessário!
- Git instalado
- Conta no SendGrid (abaixo tem explicando o passo a passo de como criar a conta)

## Instalação

1 - Dê um clone no projeto

```
git clone https://github.com/marcelonralves/send-mail-no-composer/
```

2 - Vá até a pasta src e terá um arquivo chamado 'Config-example.php', basta alterar para 'Config.php'

3 - Crie uma conta no site SendGrid (https://sendgrid.com/)

4 - Após ter sua conta criada, você irá se deparar com esse painel, basta clicar na opção abaixo!
![App Screenshot](https://i.imgur.com/p82Jcu0.png)

5 - Depois de clicar em "Choose" basta escolher um nome aleatório em API KEY e clicar em "Create Key"

![App Screenshot](https://i.imgur.com/m5nHzMT.png)
![App Screenshot](https://i.imgur.com/QjSjnKi.png)

6 - Copie os dados gerados e cole no arquivo Config.php (o que você renomeou)

7 - Agora tudo configurado! Para testar, basta preencher as variáveis na index.php com o email que você quer enviar e toda vez que você acessar esse index.php pelo navegador ele irá enviar um email!
