# 📌 Projeto: Sistema de Usuários e Autenticação

**Disciplina:** Design Patterns & Clean Code  
**Alunos:**  
- Otavio Augusto B. Santana — RA: 1999877  
- Vinicius Miguel — RA: 2002638  

---

## 🎯 Objetivo do Projeto

Desenvolver um sistema simples de **cadastro**, **login** e **reset de senha** em PHP, aplicando os princípios de:

- Programação Orientada a Objetos (POO)
- PSR-12
- DRY (Don't Repeat Yourself)
- KISS (Keep It Simple, Stupid)

---

## 🚀 Instruções de Execução

1. Certifique-se de ter o **XAMPP** instalado e rodando.
2. Copie a pasta do projeto para a pasta `htdocs` do seu XAMPP.
3. Abra seu navegador e acesse:

http://localhost/projeto-2-user-auth-prd-finish/index.php


As saídas dos testes serão exibidas diretamente na tela.

4. Ou, se preferir, execute no terminal:


---

## ✅ Funcionalidades Implementadas

- **Cadastro de Usuário**
- Valida e-mail e senha forte.
- Salva a senha com `password_hash`.

- **Login de Usuário**
- Verifica o e-mail.
- Compara a senha com `password_verify`.

- **Reset de Senha**
- Permite atualizar a senha de um usuário já cadastrado.
- Aplica novamente as regras de segurança.

- **Validação de E-mails Duplicados**
- Impede cadastro com e-mails já existentes.

---

## 🧪 Casos de Uso (Cenários de Teste)

- ✅ Cadastro válido → Um novo usuário é registrado com sucesso.
- ❌ Cadastro com e-mail inválido → O sistema retorna uma mensagem de erro.
- ❌ Tentativa de login com senha errada → O sistema rejeita o acesso e exibe uma mensagem de erro.
- 🔄 Reset de senha válido → A senha do usuário é alterada com sucesso.
- ❌ Cadastro com e-mail duplicado → O sistema impede o cadastro e retorna uma mensagem de erro.

---

