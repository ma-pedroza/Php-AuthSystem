# 👤 AuthSystem

Sistema simples de gerenciamento de usuários desenvolvido em PHP, com funcionalidades básicas de cadastro, login, validação de dados e redefinição de senha.

---

## 🚀 Como executar

1. Copie a pasta do projeto para dentro da pasta `htdocs` da sua instalação do XAMPP.  
2. Inicie o XAMPP e ative o serviço Apache.  
3. No navegador, acesse:  http://localhost/Php-AuthSystem/AuthSystem/index.php

---

## 👨‍🎓 Alunos

- Matheus Gomes Pedroza – RA: 1998912

---

## ✅ Funcionalidades

- Cadastro de usuários com validação de e-mail e senha  
- Verificação de e-mail duplicado antes do cadastro  
- Criptografia de senha com `password_hash()`  
- Login com verificação de e-mail e senha usando `password_verify()`  
- Redefinição de senha por ID do usuário  
- Mensagens claras para cada ação (ex: “Email inválido”, “Senha atualizada com sucesso”)  

---
# Casos de Uso

## 1. Registrar Usuário Válido
```php
$userManagerClass->registerUser('Maria Oliveira', 'maria@email.com', 'Senha123');
```
- **Objetivo:** Criar um novo usuário no sistema.  
- **Resultado Esperado:** Usuário cadastrado com sucesso.  

---

## 2. Registrar Usuário com E-mail Inválido
```php
$userManagerClass->registerUser('Pedro', 'pedro@@email', 'Senha123');
```
- **Objetivo:** Testar validação de e-mail.  
- **Resultado Esperado:** Retornar erro informando que o e-mail é inválido.  

---

## 3. Login com Senha Incorreta
```php
$userManagerClass->login('joao@email.com', 'Errada123');
```
- **Objetivo:** Testar login com credenciais inválidas.  
- **Resultado Esperado:** Retornar erro de autenticação (senha incorreta).  

---

## 4. Resetar Senha de Usuário
```php
$userManagerClass->resetPassword(1, 'NovaSenha123');
```
- **Objetivo:** Redefinir a senha de um usuário existente (ID = 1).  
- **Resultado Esperado:** Senha atualizada com sucesso.  

---

## 5. Registrar Usuário com E-mail Duplicado
```php
$userManagerClass->registerUser('Valdir', 'maria@email.com', 'Senha231');
```
- **Objetivo:** Testar restrição de e-mails duplicados.  
- **Resultado Esperado:** Retornar erro informando que o e-mail já está cadastrado.  

## ⚠️ Limitações

- Os dados não são persistentes (sem banco de dados)  
- O sistema não possui interface gráfica (UI)  
- O sistema não armazena os dados fora da execução atual  

---

## 💡 Regras de Negócio

- O e-mail deve conter `@` e terminar com `.com`  
- A senha deve ter no mínimo 8 caracteres, incluindo um número e uma letra maiúscula  
- E-mails duplicados não são permitidos no cadastro  
- Senhas são armazenadas de forma segura com hash  
- A redefinição de senha atualiza o hash do usuário correspondente  
