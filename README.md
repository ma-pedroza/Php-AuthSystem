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
